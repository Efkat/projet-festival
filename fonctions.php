<?php
Flight::register('db', 'PDO', array('mysql:host=127.0.0.1;dbname=festival','root','root'),
    function ($db){
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES UTF8");
    }
);

/**
 * Name = "home"
 */
Flight::route('/', function (){
    $db=Flight::db();
    if(isset($_SESSION['nom'])) //seulement si connecté
    {
        $user=$_SESSION['nom'];
        $candidature=$db->query("SELECT have_candidature FROM utilisateur WHERE nom_user='$user'");
        $candidature=$candidature->fetch();
    }
    Flight::render('templates/index.tpl',array('name'=>isset($_SESSION['nom'])?$_SESSION['nom']:null, 'candidature'=>isset($_SESSION['nom'])?$candidature[0]:null, 'erreurs'=>null));
});

/**
 * Name = "liste"
 */
Flight::route('/liste', function (){
    if(isset($_SESSION['nom']) && $_SESSION['nom']=='admin'){ //seul l'admin peut accèder à la liste
        $db=Flight::db();
        $lignes=$db->query("SELECT nom_groupe,departement,nom_type,nom_style,annee_creation,presentation,experience FROM candidature,style,departement,scene WHERE scene.num_type=candidature.id_scene AND num_dept=id_departement AND style.id_style=candidature.id_style;");
        $lignes=$lignes->fetchAll();
        Flight::render('templates/liste.tpl', array('lignes'=>$lignes));
    }else
        Flight::redirect('/');
});

/**
 * Name = "details"
 */
Flight::route("/details/@nom_groupe", function ($nom_groupe){
    if($_SESSION['nom']=='admin'){ //seul l'admin peut accèder au détails d'une candidature
        $db=Flight::db();
        $candidature=$db->query("SELECT *
                                FROM candidature,style,departement,scene 
                                WHERE scene.num_type=candidature.id_scene 
                                AND num_dept=id_departement 
                                AND style.id_style=candidature.id_style
                                AND nom_groupe='$nom_groupe';");
        $candidature=$candidature->fetch();
        //Gestion condition statut_assoc,sacem,producteur
        //on peut le faire aussi sur smarty (dans le tpl)
        if($candidature['statut_assoc']==0){
            $candidature['statut_assoc']="Non";
        } else $candidature['statut_assoc']="Oui";

        if($candidature['is_sacem']==0){
            $candidature['is_sacem']="Non";
        } else $candidature['is_sacem']="Oui";

        if($candidature['have_producer']==0){
            $candidature['have_producer']="Non";
        } else $candidature['have_producer']="Oui";
        
        //Récupération noms fichiers
        $files=$db->query("SELECT * FROM fichier WHERE nom_groupe='$nom_groupe'");
        $files=$files->fetchAll();
        $images=$pistes=array(null);
        foreach($files as $file)
        {
            if($file['nom_fichier']=='image1' || $file['nom_fichier']=='image2')
                array_push($images,$file);
            else array_push($pistes,$file);
        }

        //Gestion membres
        if($candidature['membres']!=null){   //dodo1_nom/dodo1_prenom/violon,dodo2_nom/dodo2_prenom/triangle
            $i=0;
            foreach(explode('\\',$candidature['membres']) as $membre){
                $membres[$i]=explode('/',$membre);
                $i++;
            }
        }
        Flight::render('templates/details.tpl', array('candidature'=>$candidature,'membres'=>$membres,'images'=>$images,'pistes'=>$pistes));
    }
    else 
        Flight::redirect('/');
});

/**
 * Name = "register"
 */
Flight::route('GET /register',function(){
    if(!isset($_SESSION['nom'])){ //seulement si déconnecté
        Flight::render('templates/register.tpl',array('erreurs'=>null,'old_form'=>null));
    }else{
        Flight::redirect('/');
    }
});

/**
 * Name = "register-traitement"
 */
Flight::route('POST /register',function(){
    $db = Flight::db();
    $erreurs="";

    //sécurité
    $nom  = htmlspecialchars(trim($_POST["nom"]));
    $mail = htmlspecialchars(trim($_POST["email"]));
    $pswd = htmlspecialchars(trim($_POST["pswd"]));
    
    /*SUCCESSION DE IF => PERMET D'AFFICHER CHAQUE ERREUR */

    //validité adresse mail
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){$erreurs.="<br/>Veuillez saisir une adresse mail correcte.";}
    
    //tous les champs remplis
    if(empty($nom) | empty($mail) | empty($pswd)){$erreurs.="<br/>Veuillez remplir tous les champs.";}

    //taille du mot de passe
    if(strlen($pswd)<8){$erreurs.="<br/>Mot de passe: 8 caractères minimum requis.";}

    //taille de l'email
    if(strlen($mail) > 64){$erreurs.="<br/>Email trop long";}

    //Vérification nom & mail pas dans la base
    $existe_deja=$db->query("SELECT email,nom_user FROM Utilisateur WHERE email='$mail' OR nom_user='$nom';");
    if($existe_deja->fetchAll()!=array()){$erreurs.="<br/>Compte existe déjà dans la base.";    }

    //si pas d'erreurs => succes
    //sinon => affichage erreurs
    if($erreurs==""){
        $pswd=password_hash($pswd,PASSWORD_DEFAULT);
        $requete=$db->prepare("INSERT INTO utilisateur (`id_user`,`nom_user`,`password`,`email`,`have_candidature`) VALUES (NULL,:nom,:pswd,:mail,0);");
        $requete->execute(array(
            ':nom'=>$nom,
            ':pswd'=>$pswd,
            ':mail'=>$mail
        ));
        Flight::render("templates/success.tpl",array(null));
    } else Flight::render('templates/register.tpl',array('erreurs'=>$erreurs,'old_form'=>$_POST)); 
});

/**
 * Name = "login"
 */
Flight::route("GET /login", function (){
    if(!isset($_SESSION['nom'])){ //seulement si déconnecté
        Flight::render('templates/login.tpl', array(
            'erreurs'=>null,
            'old_form'=>null));
    }else{
        Flight::redirect('/');
    }  
});

Flight::route("POST /login", function (){                   
    $db=Flight::db();
    $nom =htmlspecialchars(trim($_POST['nom']));
    $pswd=htmlspecialchars(trim($_POST['pswd']));
    $erreurs="";
    /*Vérifications, à compléter?*/
    if(!empty($_POST['nom']) & !empty($_POST['pswd'])){
        //Vérification existence nom
        $nom_check=$db->query("SELECT nom_user FROM utilisateur WHERE nom_user='$nom'");
        $nom_check=$nom_check->fetchAll();
        if($nom_check==array()){
            $erreurs="Compte inexistant.";
        }else{
            //Vérification mot de passe
            $getInfo=$db->query("SELECT id_user,password FROM utilisateur WHERE nom_user='$nom'");
            $info=$getInfo->fetch();
            if(password_verify($pswd,$info['password'])){
                $_SESSION['nom']=$nom;
                $_SESSION['id']=$info['id_user'];
                Flight::redirect('/');
            }else{$erreurs="Mot de passe incorrect.";}
        }
    }else{ $erreurs="Veuillez remplir tous les champs."; }
    Flight::render('templates/login.tpl', array('erreurs'=>$erreurs,'old_form'=>$_POST));
});

/**
 * Name = "logout"
 */
Flight::route("/logout",function(){
    session_destroy();
    unset($_SESSION);
    Flight::render("templates/index.tpl",array(
        'name'=>null,
        'erreurs'=>null));
});

/**
 * Name = "candidature"
 */
Flight::route("GET /candidature", function (){
    $db=Flight::db();
    if(isset($_SESSION['nom'])){ //seulement si connecté 
        if($_SESSION['nom']=='admin'){ //si admin 
            Flight::redirect('/liste'); //on affiche la liste
        }
        else{
            $user=$_SESSION['nom'];
            $candidature_check=$db->query("SELECT have_candidature FROM utilisateur WHERE nom_user='$user'");
            $candidature_check=$candidature_check->fetch();

            if($candidature_check[0]==0)
            {
                $depts=$db->query("SELECT departement,num_dept FROM departement;");
                $depts=$depts->fetchAll(PDO::FETCH_ASSOC);

                $styles=$db->query("SELECT nom_style FROM style;");
                $styles=$styles->fetchAll(PDO::FETCH_COLUMN);
        
                $scenes=$db->query("SELECT nom_type FROM scene;");
                $scenes=$scenes->fetchAll(PDO::FETCH_COLUMN);
                
                Flight::render('templates/candidature.tpl', array(
                    'erreurs'=>null,
                    'old_form'=>null,
                    'depts'=>$depts,
                    'styles'=>$styles,
                    'scenes'=>$scenes,
                )); 
            }
            else Flight::redirect('/c_consulter');
        }
    }else{Flight::redirect('/login');}    
});

/**
 * Name = "candidature-traitement"
 */
Flight::route("POST /candidature", function(){  
    $db = Flight::db();
    $erreur = "";
    
    $user=$_SESSION['nom'];
    $candidature_check=$db->query("SELECT have_candidature FROM utilisateur WHERE nom_user='$user'");
    $candidature_check=$candidature_check->fetch();

    if($candidature_check[0]==0) //seulement si pas de candidature
    {
        //Vérification si tous les champs nécessaires sont présents
        if((!empty($_POST['nom_groupe']) && !empty($_POST['annee_creation']) && !empty($_POST['presentation']) && !empty($_POST['experience']) && !empty($_POST['site_web']) && isset($_POST['departement']) && isset($_POST['style']) && isset($_POST['scene']) && !empty($_POST['membres']))){
            //Vérifie le nom du groupe
            if(strlen($_POST['nom_groupe'] <= 100)){
                $nomGroupe = htmlspecialchars(trim($_POST['nom_groupe']));
            }else{ $erreur = "Le nom du groupe est trop long"; }

            $group_check=$db->query("SELECT nom_groupe FROM candidature WHERE nom_groupe='$nomGroupe'");
            $group_check=$group_check->fetchAll();
            if($group_check!=array())
            {
                $erreur="Nom de groupe déjà pris.";
            }

            //Vérifie le code postal
            $codepostal=$_POST['codepostal'][0].$_POST['codepostal'][1];
            if($codepostal != $_POST['departement'])
            {
                $erreur="Code postal incohérent.";
            }
            $codepostal=(int)filter_var($_POST['codepostal'],FILTER_SANITIZE_NUMBER_INT);
            if(strlen($codepostal)!=5)
            {
                $erreur="Format de code postal incorrecte (5 chiffres)";
            }

            //Vérification téléphone
            $phone=(string)(int)filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            if(strlen($phone)!=9)
            {
                $erreur="Numéro de téléphone incorrecte (10 chiffres)";
            }
            $phone="0".$phone;

            //Vérifie l'année de création
            if(strlen($_POST['annee_creation']) == 4){
                $anneeCreation = htmlspecialchars($_POST['annee_creation']);
            }else{ $erreur = "Le format de l'année de création n'est pas valide (ex: 2020)"; }

            //Vérifie la présentation
            if(strlen($_POST['annee_creation']) <= 500){
                $presentation = htmlspecialchars(trim($_POST['presentation']));
            }else{ $erreur = "La présentation doit faire 500 caractères maximum !"; }

            //Vérifie l'expérience
            if(strlen($_POST['experience']) <= 500){
                $experience = htmlspecialchars(trim($_POST['experience']));
            }else{ $erreur = "L'expérience doit faire 500 caractères maximum !"; }

            //Vérifie le site web
            if(strlen($_POST['site_web']) <= 100){
                $siteWeb = htmlspecialchars(trim($_POST['site_web']));
            }else{ $erreur = "L'URL de votre site de communication est trop longue !"; }

            
            //Vérifie le statut associatif
            if(isset($_POST['statut_assoc'])){
                $statutAssoc = 1;
            }else{ $statutAssoc = 0; }

            //Vérifie si inscrit à la SACEM
            if(isset($_POST['is_sacem'])){
                $isSacem = 1;
            }else{ $isSacem = 0;}

            //Vérifie la présence d'un producteur
            if(isset($_POST['have_producteur'])){
                $haveProducer = 1;
            }else{
                $haveProducer = 0;
            }
            

            //Vérifie le site youtube si il est renseigné 
            if(isset($_POST['youtube'])){
                if(strlen($_POST['youtube']) <= 100){
                    $youtube = htmlspecialchars(trim($_POST['youtube']));
                }else{ $erreur = "Le lien youtube est trop long";}
            }else{ $youtube = ""; }
            //Vérifie le site soundcloud si il est renseigné
            if(isset($_POST['soundcloud'])){
                if(strlen($_POST['soundcloud']) <= 100){
                    $soundcloud = htmlspecialchars(trim($_POST['soundcloud']));
                }else{ $erreur = "Le lien soundcloud est trop long";}
            }else{ $soundcloud = ""; }

            //Vérifie les images
            if((($_FILES['image1']['type'] == "image/jpeg") || ($_FILES['image1']['type'] == "image/png")) && (($_FILES['image2']['type'] == "image/jpeg") || ($_FILES['image2']['type'] == "image/png"))){
                $_FILES['image1']['name'] = $nomGroupe . "_image1";
                $_FILES['image2']['name'] = $nomGroupe . "_image2";
            }else{ $erreur = "Il faut 2 images au format JPG ou PNG !"; }

            if((($_FILES['piste1']['type'] == "audio/mpeg") && ($_FILES['piste2']['type'] == "audio/mpeg") && ($_FILES['piste3']['type'] == "audio/mpeg"))){
                $_FILES['piste3']['name'] = $nomGroupe . "_piste1";
                $_FILES['piste2']['name'] = $nomGroupe . "_piste2";
                $_FILES['piste1']['name'] = $nomGroupe . "_piste3";
            }else{ $erreur = "Il faut 3 pistes audio au format MP3 !"; }

            if(($_FILES['technique']['type'] == "application/pdf")){
                $_FILES['technique']['name'] = $nomGroupe."_technique";
            }else{ $erreur = "La fiche technique du groupe doit être au format PDF !";}

            if(isset($_POST['is_sacem'])) // si elle est cochée
            {
                if(($_FILES['sacem']['type'] == "application/pdf")){
                    $_FILES['sacem']['name'] = $nomGroupe . "_sacem";
                }
                else $erreur = 'Le document SACEM doit être au format PDF (case cochée)';
            }
            
        
        }else{ $erreur = "Tous les champs nécessaires ne sont pas renseignés !"; }
        if($erreur == ""){
            //candidature
            $insertCandidRequest = $db->prepare('INSERT INTO candidature VALUES(:nomGroupe,:idDepartement,:codepostal,:phone,:idScene,:idRepresentant,:idStyle,:anneeCreation,:presentation,:experience,:siteWeb,:soundcloud,:youtube,:statutAssoc,:isSacem,:haveProducer,:membres)');
            $insertCandidRequest->execute(array(':nomGroupe' => $nomGroupe,':idDepartement' => (int)$_POST['departement'],':codepostal'=>$codepostal,'phone'=>$phone,':idScene' => (int)$_POST['scene']+1,':idRepresentant' => (int)$_SESSION['id'],':idStyle' => (int)$_POST['style']+1,':anneeCreation' => (int)$anneeCreation,':presentation' => $presentation,':experience' => $experience,':siteWeb' => $siteWeb,':soundcloud' => $soundcloud,':youtube' => $youtube,':statutAssoc' => (int)$statutAssoc,':isSacem' => (int)$isSacem,':haveProducer' => (int)$haveProducer,            ':membres' => $_POST['membres']));
            
            //récupérations des extensions
            $blocs=explode('/',$_FILES['image1']['type']);
            $extensions[0]=$blocs[count($blocs)-1];
            $blocs=explode('/',$_FILES['image2']['type']);
            $extensions[1]=$blocs[count($blocs)-1];
            $blocs=explode('/',$_FILES['piste1']['type']);
            $extensions[2]=$blocs[count($blocs)-1];
            $blocs=explode('/',$_FILES['piste2']['type']);
            $extensions[3]=$blocs[count($blocs)-1];
            $blocs=explode('/',$_FILES['piste3']['type']);
            $extensions[4]=$blocs[count($blocs)-1];
            $blocs=explode('/', $_FILES['technique']['type']);
            $extensions[5]=$blocs[count($blocs)-1];
        
            
            $insertFileName = $db->prepare("INSERT INTO fichier(format,nom_fichier,nom_groupe) VALUES(:format, :nomFichier, :nomGroupe)");
            $insertFileName->execute(array(':format'=>$extensions[0], ':nomFichier'=>'image1', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[1], ':nomFichier'=>'image2', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[2], ':nomFichier'=>'piste1', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[3], ':nomFichier'=>'piste2', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[4], ':nomFichier'=>'piste3', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[5], ':nomFichier'=>'technique', ':nomGroupe'=>$nomGroupe));

            mkdir("data/$nomGroupe");
            move_uploaded_file($_FILES['image1']['tmp_name'],"data/$nomGroupe/image1.$extensions[0]");
            move_uploaded_file($_FILES['image2']['tmp_name'],"data/$nomGroupe/image2.$extensions[1]");
            move_uploaded_file($_FILES['piste1']['tmp_name'],"data/$nomGroupe/piste1.$extensions[2]");
            move_uploaded_file($_FILES['piste2']['tmp_name'],"data/$nomGroupe/piste2.$extensions[3]");
            move_uploaded_file($_FILES['piste3']['tmp_name'],"data/$nomGroupe/piste3.$extensions[4]");
            move_uploaded_file($_FILES['technique']['tmp_name'], "data/$nomGroupe/technique.$extensions[5]");

            //Si SACEM cochée
            if((isset($_POST['is_sacem']))){
                $blocs=explode('/', $_FILES['sacem']['type']);
                $extensions[6]=$blocs[count($blocs)-1];
                $insertFileName->execute(array(':format'=>$extensions[6], ':nomFichier'=>'sacem', ':nomGroupe'=>$nomGroupe));
                move_uploaded_file($_FILES['sacem']['tmp_name'], "data/$nomGroupe/sacem.$extensions[6]");
            }
            
            $_SESSION['candidature'] = $nomGroupe;
            $user=$_SESSION['nom'];
            $db->query("UPDATE utilisateur SET have_candidature=1 WHERE nom_user='$user';");
            Flight::render('templates/success.tpl',array(null));
        }else{
            $depts=$db->query("SELECT departement,num_dept FROM departement;");
            $depts=$depts->fetchAll(PDO::FETCH_ASSOC);
            $styles=$db->query("SELECT nom_style,id_style FROM style;");
            $styles=$styles->fetchAll(PDO::FETCH_COLUMN);
            $scenes=$db->query("SELECT nom_type,num_type FROM scene;");
            $scenes=$scenes->fetchAll(PDO::FETCH_COLUMN);
            Flight::render('templates/candidature.tpl', array(
                'erreurs'=>$erreur,
                'old_form'=>$_POST,
                'depts'=>$depts,
                'styles'=>$styles,
                'scenes'=>$scenes,
            ));
        }
    }
    else Flight::redirect('/');
});

/**
 * Name = "candidature_consulter"
 */
Flight::route("/c_consulter", function (){
    $db=Flight::db();
    if(isset($_SESSION['nom'])) //seulement si connecté
    {
        if($_SESSION['nom']=='admin'){ //si c'est l'admin
            Flight::redirect('/liste'); //on affiche la liste des candidatures
        }else{
            $user=$_SESSION['nom'];
            $candidature_check=$db->query("SELECT have_candidature,nom_groupe FROM utilisateur,candidature WHERE nom_user='$user' AND id_representant=id_user");
            $candidature_check=$candidature_check->fetch();

            if($candidature_check[0]==1){ //seulement si candidature faite
                $nomGroupe=$candidature_check['nom_groupe'];
                $candidature=$db->query("SELECT * FROM candidature,style,departement,scene WHERE scene.num_type=candidature.id_scene AND num_dept=id_departement AND style.id_style=candidature.id_style AND candidature.nom_groupe='$nomGroupe';");
                $candidature=$candidature->fetch();
                
                 //Gestion condition statut_assoc,sacem,producteur
                //on peut le faire aussi sur smarty (dans le tpl)
                if(empty($candidature['statut_assoc'])||$candidature['statut_assoc']==0){
                    $candidature['statut_assoc']="Non";
                }
                else $candidature['statut_assoc']="Oui";

                if(empty($candidature['is_sacem'])||($candidature['is_sacem'])){
                    $candidature['is_sacem']="Non";
                }
                else $candidature['is_sacem']="Oui";

                if(empty($candidature['have_producer'])||$candidature['have_producer']==0){
                    $candidature['have_producer']="Non";
                }
                else $candidature['have_producer']="Oui";
                
                //Gestion membres
                if($candidature['membres']!=null){   //dodo1_nom/dodo1_prenom/violon\dodo2_nom/dodo2_prenom/triangle
                    $i=0;
                    foreach(explode('\\',$candidature['membres']) as $membre){
                        $membres[$i]=explode('/',$membre);
                        $i++;
                    }
                }
                //Récupération noms fichiers
                $files=$db->query("SELECT * FROM fichier WHERE nom_groupe='$nomGroupe'");
                $files=$files->fetchAll();
                $images=$pistes=$pdf=array(null);
                foreach($files as $file)
                {
                    if($file['nom_fichier']=='image1' || $file['nom_fichier']=='image2'){
                        array_push($images,$file);
                    }else if($file['nom_fichier']=='technique' || $file['nom_fichier']=='sacem'){
                        array_push($pdf, $file);
                        array_push($pdf, $file);
                    }else{
                       array_push($pistes,$file); 
                    }
                }
                Flight::render('templates/c_consulter.tpl', array('name'=>$_SESSION['nom'],'candidature'=>$candidature,'images'=>$images,'pistes'=>$pistes,'membres'=>$membres, 'pdf'=>$pdf)); 
            
               }else{ Flight::redirect('/candidature'); }
        }
    }
    else {Flight::redirect('/login');   }
});

/**
 * Name = "candidature_edition"
 */
Flight::route("GET /c_edit", function (){
    $db=Flight::db();
    if(isset($_SESSION['nom'])){ //seulement si connecté
        if($_SESSION['nom']=='admin'){
            if(isset($_SESSION['candidature']))
            {
                $nom_groupe=$_SESSION['candidature'];
                $user_edited=$db->query("SELECT nom_user FROM candidature,utilisateur WHERE nom_groupe='$nom_groupe' AND id_user=id_representant");
                $user_edited=$user_edited->fetch();
                $_SESSION['nom']=$user_edited[0];
                Flight::redirect('/c_edit');
            }
            else Flight::redirect('/liste');
        }else{
            $user=$_SESSION['nom'];
            $candidature_check=$db->query("SELECT have_candidature,nom_groupe FROM utilisateur,candidature WHERE nom_user='$user' AND id_representant=id_user");
            $candidature_check=$candidature_check->fetch();

            if($candidature_check[0]==1) //seulement si candidature faite
            {
                $nomGroupe=$candidature_check['nom_groupe'];
                $candidature=$db->query("SELECT * FROM candidature,style,departement,scene WHERE scene.num_type=candidature.id_scene AND num_dept=id_departement AND style.id_style=candidature.id_style AND nom_groupe='$nomGroupe';");
                $candidature=$candidature->fetch();
                
                $depts=$db->query("SELECT departement,num_dept FROM departement;");
                $depts=$depts->fetchAll(PDO::FETCH_ASSOC);
                $styles=$db->query("SELECT nom_style FROM style;");
                $styles=$styles->fetchAll(PDO::FETCH_COLUMN);
                $scenes=$db->query("SELECT nom_type FROM scene;");
                $scenes=$scenes->fetchAll(PDO::FETCH_COLUMN);

                //GESTION MEMBRES
                $i=0;
                foreach(explode('\\',$candidature['membres']) as $membre){
                    $membres[$i]=explode('/',$membre);
                    $i++;
                }
                Flight::render('templates/c_edit.tpl', array('erreurs'=>null,'candidature'=>$candidature,'depts'=>$depts,'styles'=>$styles,'scenes'=>$scenes,'membres'=>$membres));
            }else {Flight::redirect('/candidature');}
            //sinon : redirection au formulaire de la candidature
        }
    }
    else 
        Flight::redirect('/login');  
     
});

/**
 * Name = "candidature_edition-traitement"
 */
Flight::route("POST /c_edit",function (){
    $db=Flight::db();
    $erreur="";

    if(isset($_SESSION['nom'])){ //seulement si connecté
        if($_SESSION['nom']=='admin'){
            Flight::redirect('/liste');
        }
        else
        {
            $user=$_SESSION['nom'];
            $candidature_check=$db->query("SELECT have_candidature,nom_groupe FROM utilisateur,candidature WHERE nom_user='$user' AND id_representant=id_user");
            $candidature_check=$candidature_check->fetch();

            if($candidature_check[0]==1) //seulement si candidature faite
            {
               
                //Vérification si tous les champs nécessaires sont présents
                
                if((!empty($_POST['nom_groupe']) && !empty($_POST['annee_creation']) && !empty($_POST['presentation']) && !empty($_POST['experience']) && !empty($_POST['site_web']) && isset($_POST['departement']) && isset($_POST['style']) && isset($_POST['scene']) /*&& !empty($_POST['membres'])*/)){
                    
                    //Vérifie le nom du groupe
                    if(strlen($_POST['nom_groupe'] <= 100)){
                        $nomGroupe = htmlspecialchars(trim($_POST['nom_groupe']));
                    }else{ $erreur = "Le nom du groupe est trop long"; }

                    //Vérifie le code postal
                    $codepostal=$_POST['codepostal'][0].$_POST['codepostal'][1];
                    if($codepostal != $_POST['departement'])
                    {
                        $erreur="Code postal incohérent.";
                    }
                    $codepostal=(int)filter_var($_POST['codepostal'],FILTER_SANITIZE_NUMBER_INT);
                    if(strlen($codepostal)!=5)
                    {
                        $erreur="Format de code postal incorrecte (5 chiffres)";
                    }

                    //Vérification téléphone
                    $phone=(string)(int)filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
                    if(strlen($phone)!=9)
                    {
                        $erreur="Numéro de téléphone incorrecte (10 chiffres)";
                    }
                    $phone="0".$phone;


                    //Vérifie l'année de création
                    if(strlen($_POST['annee_creation']) == 4){
                        $anneeCreation = htmlspecialchars($_POST['annee_creation']);
                    }else{ $erreur = "Le format de l'année de création n'est pas valide (ex: 2020)"; }

                    //Vérifie la présentation
                    if(strlen($_POST['annee_creation']) <= 500){
                        $presentation = htmlspecialchars(trim($_POST['presentation']));
                    }else{ $erreur = "La présentation doit faire 500 caractères maximum !"; }

                    //Vérifie l'expérience
                    if(strlen($_POST['experience']) <= 500){
                        $experience = htmlspecialchars(trim($_POST['experience']));
                    }else{ $erreur = "L'expérience doit faire 500 caractères maximum !"; }

                    //Vérifie le site web
                    if(strlen($_POST['site_web']) <= 100){
                        $siteWeb = htmlspecialchars(trim($_POST['site_web']));
                    }else{ $erreur = "L'URL de votre site de communication est trop longue !"; }

                    
                    //Vérifie le statut associatif
                    if(isset($_POST['statut_assoc'])){
                        $statutAssoc = 1;
                    }else{ $statutAssoc = 0; }

                    //Vérifie si inscrit à la SACEM
                    if(isset($_POST['is_sacem'])){
                        $isSacem = 1;
                    }else{ $isSacem = 0;}

                    //Vérifie la présence d'un producteur
                    if(isset($_POST['have_producteur'])){
                        $haveProducer = 1;
                    }else{
                        $haveProducer = 0;
                    }
                    

                    //Vérifie le site youtube si il est renseigné 
                    if(isset($_POST['youtube'])){
                        if(strlen($_POST['youtube']) <= 100){
                            $youtube = htmlspecialchars(trim($_POST['youtube']));
                        }else{ $erreur = "Le lien youtube est trop long";}
                    }else{ $youtube = ""; }
                    //Vérifie le site soundcloud si il est renseigné
                    if(isset($_POST['soundcloud'])){
                        if(strlen($_POST['soundcloud']) <= 100){
                            $soundcloud = htmlspecialchars(trim($_POST['soundcloud']));
                        }else{ $erreur = "Le lien soundcloud est trop long";}
                    }else{ $soundcloud = ""; }
                
                
                    //Vérifie les images
                    //test : si le nom temporaire est nul => pas de fichier selectionné
                    if($_FILES['image1']['tmp_name']!=null)
                        if(!($_FILES['image1']['type'] == "image/jpeg" || $_FILES['image1']['type'] == "image/png"))
                            $erreur = "Le format de l'image 1 n'est pas correct (jpeg ou png)";

                    if($_FILES['image2']['tmp_name']!=null)
                        if(!($_FILES['image2']['type'] == "image/jpeg" || $_FILES['image2']['type'] == "image/png"))
                            $erreur = "Le format de l'image 2 n'est pas correct (jpeg ou png)";
                    
                    if($_FILES['piste1']['tmp_name']!=null)
                        if(!($_FILES['piste1']['type'] == "audio/mpeg" || $_FILES['piste1']['type'] == "audio/mpeg"))
                            $erreur = "Le format de la piste 1 n'est pas correct (mp3)";


                    if($_FILES['piste2']['tmp_name']!=null)
                        if(!($_FILES['piste2']['type'] == "audio/mpeg" || $_FILES['piste2']['type'] == "audio/mpeg"))
                            $erreur = "Le format de la piste 2 n'est pas correct (mp3)";

                    if($_FILES['piste3']['tmp_name']!=null)
                        if(!($_FILES['piste3']['type'] == "audio/mpeg" || $_FILES['piste3']['type'] == "audio/mpeg"))
                            $erreur = "Le format de la piste 3 n'est pas correct (mp3)";   

                    if($_FILES['technique']['tmp_name']!=null)
                        if($_FILES['technique']['type'] != "application/pdf")
                            $erreur = "Le format de la fiche technique n'est pas correct (pdf)";

                    if(isset($_POST['is_sacem'])){
                        if($_FILES ['sacem']['tmp_name'] == null){
                            $erreur = "Vous devez insérer votre document de la SACEM (case cochée) !";
                        }
                            
                        if($_FILES['sacem']['type'] != "application/pdf"){
                            $erreur = "Votre document SACEM doit être au format PDF !";
                        }   
                    }
                
                }else{$erreur = "Tous les champs nécessaires ne sont pas renseignés !";} 

                if($erreur == ""){
                    $user=$_SESSION['nom'];
                    $old_nomGroupe = $db->query("SELECT nom_groupe FROM candidature,utilisateur WHERE nom_user='$user' AND id_representant=id_user");
                    $old_nomGroupe = $old_nomGroupe->fetch();

                    //RECUPERATION CHAMPS // les insérer requete
                    $dept = $_POST['departement'];
                    $scene = $_POST['scene']+1;
                    $style = $_POST['style']+1;
                    $membres = $_POST['membres'];

                    //MODIFICATION CHAMPS DE LA BASE
                    $db->query("SET FOREIGN_KEY_CHECKS=0");
                        $db->query("UPDATE fichier SET nom_groupe='$nomGroupe' WHERE nom_groupe='$old_nomGroupe[0]'");
                        $db->query("UPDATE candidature SET 
                        nom_groupe='$nomGroupe' ,
                        codepostal='$codepostal',
                        phone='$phone',
                        id_departement = $dept,
                        id_scene = $scene,
                        id_style = $style,
                        annee_creation = $anneeCreation,
                        presentation = '$presentation',
                        experience = '$experience',
                        site_web = '$siteWeb',
                        soundcloud = '$soundcloud',
                        youtube = '$youtube',
                        statut_assoc = $statutAssoc,
                        is_sacem = $isSacem,
                        have_producer = $haveProducer,
                        membres = '$membres'
                        WHERE nom_groupe='$old_nomGroupe[0]'");
                    $db->query("SET FOREIGN_KEY_CHECKS=1");


                    //MODIFICATION FICHIERS SUR LE SERVEUR
                    //ATTENTION DETAIL A GERER : 
                     /*
                     * Si le nouveau fichier n'a pas la même extension que l'ancien
                     * ça n'ecrasera pas l'ancien 
                     * faut qu'on gere pour supprimer l'ancien fichier 
                     * donc on recup son extension dans la BDD
                     */
                    rename("data/$old_nomGroupe[0]","data/$nomGroupe");
                    $insertFileName = $db->prepare("INSERT INTO fichier(format,nom_fichier,nom_groupe) VALUES(:format, :nomFichier, :nomGroupe)");
            
                    //test : si le nom temporaire est nul => pas de fichier selectionné
                    if($_FILES['image1']['tmp_name']!=null){
                        $format=$db->query("SELECT format FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='image1'");
                        $format=$format->fetch();
                        if(file_exists("data/$nomGroupe/image1.$format[0]")){
                            unlink("data/$nomGroupe/image1.$format[0]");
                        }
                        $db->query("DELETE FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='image1'");
                        $blocs=explode('/',$_FILES['image1']['type']);
                        $extensions[0]=$blocs[count($blocs)-1];
                        $insertFileName->execute(array(':format'=>$extensions[0], ':nomFichier'=>'image1', ':nomGroupe'=>$nomGroupe));
                        move_uploaded_file($_FILES['image1']['tmp_name'],"data/$nomGroupe/image1.$extensions[0]");
                    }

                    if($_FILES['image2']['tmp_name']!=null){
                        $format=$db->query("SELECT format FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='image2'");
                        $format=$format->fetch();
                        if(file_exists("data/$nomGroupe/image2.$format[0]")){
                            unlink("data/$nomGroupe/image2.$format[0]");
                        }  
                        $db->query("DELETE FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='image2'");
                        $blocs=explode('/',$_FILES['image2']['type']);
                        $extensions[1]=$blocs[count($blocs)-1];
                        $insertFileName->execute(array(':format'=>$extensions[1], ':nomFichier'=>'image2', ':nomGroupe'=>$nomGroupe));
                        move_uploaded_file($_FILES['image2']['tmp_name'],"data/$nomGroupe/image2.$extensions[1]");
                    }
                    
                    if($_FILES['piste1']['tmp_name']!=null){
                        $format=$db->query("SELECT format FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='piste1'");
                        $format=$format->fetch();
                        if(file_exists("data/$nomGroupe/piste1.$format[0]")){
                            unlink("data/$nomGroupe/piste1.$format[0]");
                        }
                        $db->query("DELETE FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='piste1'");
                        $blocs=explode('/',$_FILES['piste1']['type']);
                        $extensions[2]=$blocs[count($blocs)-1];
                        $insertFileName->execute(array(':format'=>$extensions[2], ':nomFichier'=>'piste1', ':nomGroupe'=>$nomGroupe));
                        move_uploaded_file($_FILES['piste1']['tmp_name'],"data/$nomGroupe/piste1.$extensions[2]");
                    }
                    
                    if($_FILES['piste2']['tmp_name']!=null){
                        $format=$db->query("SELECT format FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='piste2'");
                        $format=$format->fetch();
                        if(file_exists("data/$nomGroupe/piste2.$format[0]")) 
                            unlink("data/$nomGroupe/piste2.$format[0]");
                        $db->query("DELETE FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='piste2'");
                        $blocs=explode('/',$_FILES['piste2']['type']);
                        $extensions[3]=$blocs[count($blocs)-1];
                        $insertFileName->execute(array(':format'=>$extensions[3], ':nomFichier'=>'piste2', ':nomGroupe'=>$nomGroupe));
                        move_uploaded_file($_FILES['piste2']['tmp_name'],"data/$nomGroupe/piste2.$extensions[3]");
                    }
                    
                    if($_FILES['piste3']['tmp_name']!=null){
                        if(file_exists("data/$nomGroupe/piste3.$format[0]")) 
                            unlink("data/$nomGroupe/piste3.$format[0]");
                        $db->query("DELETE FROM fichier WHERE nom_groupe='$nomGroupe' AND nom_fichier='piste3'");
                        $blocs=explode('/',$_FILES['piste3']['type']);
                        $extensions[4]=$blocs[count($blocs)-1];
                        $insertFileName->execute(array(':format'=>$extensions[4], ':nomFichier'=>'piste3', ':nomGroupe'=>$nomGroupe));
                        move_uploaded_file($_FILES['piste3']['tmp_name'],"data/$nomGroupe/piste3.$extensions[4]");
                    }
                    if(isset($_SESSION['candidature']))
                    {
                        $_SESSION['nom']='admin';
                    }
                    Flight::render('templates/success.tpl',array(null));
                }else{
                    $nomGroupe=$candidature_check['nom_groupe'];
                    $candidature=$db->query("SELECT * FROM candidature,style,departement,scene WHERE scene.num_type=candidature.id_scene AND num_dept=id_departement AND style.id_style=candidature.id_style AND nom_groupe='$nomGroupe';");
                    $candidature=$candidature->fetch();
                    
                    $depts=$db->query("SELECT departement,num_dept FROM departement;");
                    $depts=$depts->fetchAll(PDO::FETCH_ASSOC);
                    $styles=$db->query("SELECT nom_style FROM style;");
                    $styles=$styles->fetchAll(PDO::FETCH_COLUMN);
                    $scenes=$db->query("SELECT nom_type FROM scene;");
                    $scenes=$scenes->fetchAll(PDO::FETCH_COLUMN);

                    //GESTION MEMBRES
                    $i=0;
                    foreach(explode('\\',$candidature['membres']) as $membre){
                        $membres[$i]=explode('/',$membre);
                        $i++;
                    }

                    //GESTION CHECKBOXES (sinon erreur car déchoché <=> nondéfinie => pas accès)
                    //statut associatif
                    if(isset($_POST['statut_assoc'])){
                        $_POST['statut_assoc'] = 1;
                    }else{ $_POST['statut_assoc'] = 0; }

                    //SACEM
                    if(isset($_POST['is_sacem'])){
                        $_POST['is_sacem'] = 1;
                    }else{ $_POST['is_sacem'] = 0;}

                    //présence d'un producteur
                    if(isset($_POST['have_producer'])){
                        $_POST['have_producer'] = 1;
                    }else{
                        $_POST['have_producer'] = 0;
                    }

                    Flight::render('templates/c_edit.tpl', array('erreurs'=>$erreur,'candidature'=>$_POST,'depts'=>$depts,'styles'=>$styles,'scenes'=>$scenes,'membres'=>$membres));
                }
            }else{
                Flight::redirect('/candidature');
            }
        }
    }else{
        Flight::redirect('/login'); 
    }
          
});

Flight::route("/delete/@nom_groupe/@action",function($nom_groupe,$action){
    $db=Flight::db();

    if(isset($_SESSION['nom']) && $_SESSION['nom']=='admin') //seul l'admin peut accèder
    { 
        if($action=="check")
        {
            $candidature = $db->query("SELECT * FROM candidature,utilisateur,departement,style,scene WHERE candidature.id_style=style.id_style AND candidature.id_scene=num_type AND id_user=id_representant AND id_departement=num_dept AND nom_groupe='$nom_groupe'");
            $candidature = $candidature->fetch();

            if($candidature!=null)
                Flight::render("templates/delete.tpl",array('nom_groupe'=>$nom_groupe,'candidature'=>$candidature));
            else Flight::redirect('liste');    
        }
        else 
        {
            if($action=="drop")
            {
                $db->query("SET FOREIGN_KEY_CHECKS=0");
                $user = $db->query("SELECT nom_user FROM utilisateur,candidature WHERE nom_groupe='$nom_groupe' AND id_user=id_representant");
                $user = $user->fetch();
                $db->query("DELETE FROM candidature WHERE candidature.nom_groupe ='$nom_groupe'");
                
                $db->query("UPDATE utilisateur SET have_candidature=0 WHERE nom_user='$user[0]'");
                $db->query("SET FOREIGN_KEY_CHECKS=1");


                //fichiers
                $formats=$db->query("SELECT format FROM fichier WHERE nom_groupe='$nom_groupe'");
                $formats=$formats->fetchAll();

            
                if($formats!=array())
                {
                    $tmp=$formats[0][0];
                    if(file_exists("data/$nom_groupe/image1.$tmp")) 
                        unlink("data/$nom_groupe/image1.$tmp");
                    
                    $tmp=$formats[1][0];
                    if(file_exists("data/$nom_groupe/image2.$tmp")) 
                        unlink("data/$nom_groupe/image2.$tmp");
        
                    $tmp=$formats[2][0];
                    if(file_exists("data/$nom_groupe/piste1.$tmp")) 
                        unlink("data/$nom_groupe/piste1.$tmp");
        
                    $tmp=$formats[3][0];
                    if(file_exists("data/$nom_groupe/piste2.$tmp")) 
                        unlink("data/$nom_groupe/piste2.$tmp");
        
                    $tmp=$formats[4][0];
                    if(file_exists("data/$nom_groupe/piste3.$tmp")) 
                        unlink("data/$nom_groupe/piste3.$tmp");
                    
                    if(file_exists("data/$nom_groupe/technique.pdf")) 
                        unlink("data/$nom_groupe/technique.pdf");

                    if(file_exists("data/$nom_groupe/sacem.pdf")) 
                        unlink("data/$nom_groupe/sacem.pdf");

                    if(file_exists("data/$nom_groupe")) 
                        rmdir("data/$nom_groupe");
                }

                $db->query("DELETE FROM fichier WHERE nom_groupe='$nom_groupe'");
                Flight::redirect('/liste'); 
            }
        }
    }
    else Flight::redirect('/');
});

Flight::route("/c_edit/@nom_groupe",function($nom_groupe){
    if(isset($_SESSION['nom']))
    {
        if($_SESSION['nom']=="admin")
        {
            $db=Flight::db();
            $_SESSION['candidature']=$nom_groupe;
            Flight::redirect('/c_edit');
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
});

Flight::route("GET /stats",function(){
    if(isset($_SESSION['nom']))
    {
        if($_SESSION['nom']=="admin")
        {
            $db=Flight::db();

            $depts=$db->query("SELECT departement,num_dept FROM departement;");
            $depts=$depts->fetchAll(PDO::FETCH_ASSOC);
        
            $styles=$db->query("SELECT nom_style FROM style;");
            $styles=$styles->fetchAll(PDO::FETCH_COLUMN);
        
            $scenes=$db->query("SELECT nom_type FROM scene;");
            $scenes=$scenes->fetchAll(PDO::FETCH_COLUMN);
            
            Flight::render('templates/stats.tpl', array(
                'depts'=>$depts,
                'styles'=>$styles,
                'scenes'=>$scenes,
            ));
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
    

});

Flight::route("POST /stats",function(){
    if(isset($_SESSION['nom']))
    {
        if($_SESSION['nom']=="admin")
        {
            if(isset($_POST['viewBy']))
            {
                if($_POST['viewBy']=="dept")
                {
                    $dept=$_POST['departement'];
                    if($dept==0){
                        Flight::redirect('stats/candidatures-par-departement');}
                    else Flight::redirect("stats/candidatures-par-departement/$dept");
                }
                if($_POST['viewBy']=="style")
                {
                    $style=$_POST['style'];
                    if($style==0){
                        Flight::redirect('stats/candidatures-par-style');}
                    else Flight::redirect("stats/candidatures-par-style/$style");
                }
                if($_POST['viewBy']=="scene")
                {
                    $scene=$_POST['scene'];
                    if($scene==0){
                        Flight::redirect('stats/candidatures-par-scene');}
                    else Flight::redirect("stats/candidatures-par-scene/$scene");
                }
            }
            else Flight::redirect('stats');
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
    
});

Flight::route("/stats/@param",function($param)
{
    if(isset($_SESSION['nom']))
    {
        if($_SESSION['nom']=="admin")
        {
            $db=Flight::db();
            if($param == "nombre-candidatures"){
                $result = $db->query("SELECT COUNT(*) FROM candidature");
                $result = $result->fetch();
                $array = array('totalCandidatures' => $result[0]);

                echo json_encode($array);
            }else if($param == "candidatures-par-departement"){
                $departements = $db->query("SELECT num_dept FROM departement");
                $departements = $departements->fetchAll(PDO::FETCH_ASSOC);
                $result = array();
                for($index = 0; $index < count($departements); $index++){
                    $candidatureByDept = $db->prepare("SELECT COUNT(*) FROM candidature WHERE id_departement = :id_departement");
                    $candidatureByDept->bindParam(':id_departement', $departements[$index]['num_dept']);
                    $candidatureByDept->execute();
                    $total = $candidatureByDept->fetch();
                    if($total[0] != 0){
                        $result += [ $departements[$index]['num_dept'] => $total[0]];
                    }
                    $candidatureByDept->closeCursor();
                }
                echo json_encode($result);
            }else if($param == "candidatures-par-scene"){
                $scenes = $db->query("SELECT * FROM scene");
                $scenes = $scenes->fetchAll(PDO::FETCH_ASSOC);
                $result = array();
                for($index = 0; $index < count($scenes); $index++){
                    $candidatureByScene = $db->prepare("SELECT COUNT(*) FROM candidature WHERE id_scene = :id_scene");
                    $candidatureByScene->bindParam(':id_scene', $scenes[$index]['num_type']);
                    $candidatureByScene->execute();
                    $total = $candidatureByScene->fetch();
                    if($total[0] != 0){
                        $result += [ $scenes[$index]['nom_type'] => $total[0]];
                    }
                    $candidatureByScene->closeCursor();
                }
                echo json_encode($result);
            }
            else if($param == "candidatures-par-style"){
                $styles = $db->query("SELECT * FROM style");
                $styles = $styles->fetchAll(PDO::FETCH_ASSOC);
                $result = array();
                for($index = 0; $index < count($styles); $index++){
                    $candidatureByStyle = $db->prepare("SELECT COUNT(*) FROM candidature WHERE id_style = :id_style");
                    $candidatureByStyle->bindParam(':id_style', $styles[$index]['id_style']);
                    $candidatureByStyle->execute();
                    $total = $candidatureByStyle->fetch();
                    if($total[0] != 0){
                        $result += [ $styles[$index]['nom_style'] => $total[0]];
                    }
                    $candidatureByStyle->closeCursor();
                }
                echo json_encode($result);
            } 
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
});

Flight::route("/stats/candidatures-par-departement/@dept",function($dept){
    if(isset($_SESSION['nom']))
    {
        $db=Flight::db();
        if($_SESSION['nom']=="admin")
        {
            //vérif validité dept au cas où
            //si url entré en brut
            //pas obligatoire ? => juste : pas de résultat !
                $departements = $db->query("SELECT num_dept FROM departement WHERE num_dept=$dept");
                $departements = $departements->fetchAll(PDO::FETCH_ASSOC);
                $result = array();
                for($index = 0; $index < count($departements); $index++){
                    $candidatureByDept = $db->prepare("SELECT COUNT(*) FROM candidature WHERE id_departement = :id_departement");
                    $candidatureByDept->bindParam(':id_departement', $departements[$index]['num_dept']);
                    $candidatureByDept->execute();
                    $total = $candidatureByDept->fetch();
                    if($total[0] != 0){
                        $result += [ $departements[$index]['num_dept'] => $total[0]];
                    }
                    $candidatureByDept->closeCursor();
                }
                echo json_encode($result);
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
});

Flight::route("/stats/candidatures-par-scene/@scene",function($scene){
    if(isset($_SESSION['nom']))
    {
        $db=Flight::db();
        if($_SESSION['nom']=="admin")
        {
            //même idée de vérif ? à voir
                $scenes = $db->query("SELECT * FROM scene WHERE num_type='$scene'"); //attention NOM et pas NOMBRE
                $scenes = $scenes->fetchAll(PDO::FETCH_ASSOC);
                $result = array();
                for($index = 0; $index < count($scenes); $index++){
                    $candidatureByScene = $db->prepare("SELECT COUNT(*) FROM candidature WHERE id_scene = :id_scene");
                    $candidatureByScene->bindParam(':id_scene', $scenes[$index]['num_type']);
                    $candidatureByScene->execute();
                    $total = $candidatureByScene->fetch();
                    if($total[0] != 0){
                        $result += [ $scenes[$index]['nom_type'] => $total[0]];
                    }
                    $candidatureByScene->closeCursor();
                }
                echo json_encode($result);
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
});

Flight::route("/stats/candidatures-par-style/@style",function($style){
    if(isset($_SESSION['nom']))
    {
        $db=Flight::db();
        if($_SESSION['nom']=="admin")
        {
            //même idée de vérif ? à voir
            $styles = $db->query("SELECT * FROM style WHERE id_style='$style'");
            $styles = $styles->fetchAll(PDO::FETCH_ASSOC);
            $result = array();
            for($index = 0; $index < count($styles); $index++){
                $candidatureByStyle = $db->prepare("SELECT COUNT(*) FROM candidature WHERE id_style = :id_style");
                $candidatureByStyle->bindParam(':id_style', $styles[$index]['id_style']);
                $candidatureByStyle->execute();
                $total = $candidatureByStyle->fetch();
                if($total[0] != 0){
                    $result += [ $styles[$index]['nom_style'] => $total[0]];
                }
                $candidatureByStyle->closeCursor();
            }
            echo json_encode($result);
        }
        else Flight::redirect('/');
    }
    else Flight::redirect('login');
});