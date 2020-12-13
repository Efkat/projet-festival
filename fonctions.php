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
        
        //Gestion membres
        if($candidature['membres']!=null){   //dodo1_nom/dodo1_prenom/violon,dodo2_nom/dodo2_prenom/triangle
            $i=0;
            foreach(explode(',',$candidature['membres']) as $membre){
                $membres[$i]=explode('/',$membre);
                $i++;
            }
        }
        Flight::render('templates/details.tpl', array('candidature'=>$candidature,'membres'=>$membres));
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
    if(isset($_SESSION['nom'])){ //seulement si connecté 
        if($_SESSION['nom']=='admin'){
            Flight::redirect('/liste');
        }
        else{
            $db=Flight::db();
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
    }else{Flight::redirect('/login');}    
});

/**
 * Name = "candidature-traitement"
 */
Flight::route("POST /candidature", function(){  
    $db = Flight::db();
    $erreur = "";
    
    if(!isset($_SESSION['candidature'])) //seulement si candidature pas déjà faite
    {

        //Vérification si tous les champs nécessaires sont présents
        if((!empty($_POST['nom_groupe']) && !empty($_POST['annee_creation']) && !empty($_POST['presentation']) && !empty($_POST['experience']) && !empty($_POST['site_web']) && isset($_POST['departement']) && isset($_POST['style']) && isset($_POST['scene']) && !empty($_POST['membres']))){
            //Vérifie le nom du groupe
            if(strlen($_POST['nom_groupe'])){
                $nomGroupe = htmlspecialchars(trim($_POST['nom_groupe']));
            }else{ $erreur = "Le nom du groupe est trop long"; }

            $group_check=$db->query("SELECT nom_groupe FROM candidature WHERE nom_groupe='$nomGroupe'");
            $group_check=$group_check->fetchAll();
            if($group_check!=array())
            {
                $erreur="Nom de groupe déjà pris.";
            }

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
            }else{ $erreur = "Le format des images n'est pas correct (jpeg ou png)"; }

            if((($_FILES['piste1']['type'] == "audio/mpeg") && ($_FILES['piste2']['type'] == "audio/mpeg") && ($_FILES['piste3']['type'] == "audio/mpeg"))){
                $_FILES['piste3']['name'] = $nomGroupe . "_piste1";
                $_FILES['piste2']['name'] = $nomGroupe . "_piste2";
                $_FILES['piste1']['name'] = $nomGroupe . "_piste3";
            }else{ $erreur = "Le format des pistes audio n'est pas correct (MP3)"; }
        }else{ $erreur = "Tous les champs nécessaires ne sont pas renseignés !"; }
        if($erreur == ""){
            //candidature
            $insertCandidRequest = $db->prepare('INSERT INTO candidature VALUES(:nomGroupe,:idDepartement,:idScene,:idRepresentant,:idStyle,:anneeCreation,:presentation,:experience,:siteWeb,:soundcloud,:youtube,:statutAssoc,:isSacem,:haveProducer,:membres)');
            $insertCandidRequest->execute(array(':nomGroupe' => $nomGroupe,':idDepartement' => (int)$_POST['departement'],':idScene' => (int)$_POST['scene']+1,':idRepresentant' => (int)$_SESSION['id'],':idStyle' => (int)$_POST['style']+1,':anneeCreation' => (int)$anneeCreation,':presentation' => $presentation,':experience' => $experience,':siteWeb' => $siteWeb,':soundcloud' => $soundcloud,':youtube' => $youtube,':statutAssoc' => (int)$statutAssoc,':isSacem' => (int)$isSacem,':haveProducer' => (int)$haveProducer,            ':membres' => $_POST['membres']));
            
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
        
            
            $insertFileName = $db->prepare("INSERT INTO fichier(format,nom_fichier,nom_groupe) VALUES(:format, :nomFichier, :nomGroupe)");
            $insertFileName->execute(array(':format'=>$extensions[0], ':nomFichier'=>'image1', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[1], ':nomFichier'=>'image2', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[2], ':nomFichier'=>'piste1', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[3], ':nomFichier'=>'piste2', ':nomGroupe'=>$nomGroupe));
            $insertFileName->execute(array(':format'=>$extensions[4], ':nomFichier'=>'piste3', ':nomGroupe'=>$nomGroupe));

            mkdir("data/$nomGroupe");
            move_uploaded_file($_FILES['image1']['tmp_name'],"data/$nomGroupe/image1.$extensions[0]");
            move_uploaded_file($_FILES['image2']['tmp_name'],"data/$nomGroupe/image2.$extensions[1]");
            move_uploaded_file($_FILES['piste1']['tmp_name'],"data/$nomGroupe/piste1.$extensions[2]");
            move_uploaded_file($_FILES['piste2']['tmp_name'],"data/$nomGroupe/piste2.$extensions[3]");
            move_uploaded_file($_FILES['piste3']['tmp_name'],"data/$nomGroupe/piste3.$extensions[4]");
            
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
 * Name = "profil_consulter"
 */
Flight::route("/c_consulter", function (){
    if(isset($_SESSION['nom'])) //seulement si connecté
    {
        if($_SESSION['nom']=='admin'){
            Flight::redirect('/liste');
        }else{
            //si la candidature a été faite : on peut consulter
            //sinon : redirection au formulaire de la candidature 
            if(isset($_SESSION['candidature'])){
                $db=Flight::db();
                $candidature=$_SESSION['candidature'];
                $candidature=$db->query("SELECT * FROM candidature,style,departement,scene WHERE scene.num_type=candidature.id_scene AND num_dept=id_departement AND style.id_style=candidature.id_style AND nom_groupe='$candidature';");
                $candidature=$candidature->fetch();

                //Gestion condition statut_assoc,sacem,producteur
                //on peut le faire aussi sur smarty (dans le tpl)
                if($candidature['statut_assoc']==0){
                    $candidature['statut_assoc']="Non";
                }
                else $candidature['statut_assoc']="Oui";

                if($candidature['is_sacem']==0){
                    $candidature['is_sacem']="Non";
                }
                else $candidature['is_sacem']="Oui";

                if($candidature['have_producer']==0){
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

                Flight::render('templates/c_consulter.tpl', array('name'=>$_SESSION['nom'],'candidature'=>$candidature,'images'=>null,'pistes'=>null,'membres'=>$membres)); 
            }else{ Flight::redirect('/candidature'); }
        }
    }
    else {Flight::redirect('/login');   }
});

/**
 * Name = "profil_edit"
 */
Flight::route("/c_edit", function (){
    if(isset($_SESSION['nom'])){ //seulement si connecté
        if($_SESSION['nom']=='admin'){
            Flight::redirect('/liste');
        }else{
            //si la candidature a été faite : on peut consulter
            if(isset($_SESSION['candidature'])){
                $db=Flight::db();
                $nom_depts=$db->query("SELECT departement FROM departement;");
                $nom_depts=$nom_depts->fetchAll(PDO::FETCH_COLUMN);
                $styles=$db->query("SELECT nom_style FROM style;");
                $styles=$styles->fetchAll(PDO::FETCH_COLUMN);
                $scenes=$db->query("SELECT nom_type FROM scene;");
                $scenes=$scenes->fetchAll(PDO::FETCH_COLUMN);
                Flight::render('templates/c_edit.tpl', array('erreurs'=>null,'candidature'=>null,'nom_depts'=>$nom_depts,'styles'=>$styles,'scenes'=>$scenes));
            }else {Flight::redirect('/candidature');}
            //sinon : redirection au formulaire de la candidature
        }
    }
    else 
        Flight::redirect('/login');   
});