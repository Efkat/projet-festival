<?php
Flight::register('db', 'PDO', array('mysql:host=127.0.0.1;dbname=festival','root','root'),
    function ($db){
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
);

/**
 * Name = "home"
 */
Flight::route('/', function (){
    Flight::render('templates/index.tpl',array(null));
});

/**
 * Name = "liste"
 */
Flight::route('/liste', function (){
    Flight::render('templates/liste.tpl', array('lignes'=>null));
});

/**
 * Name = "profil"
 */
Flight::route("/profil", function (){
    Flight::render('templates/profil.tpl', array(null));
});

/**
 * Name = "register"
 */
Flight::route('GET /register',function(){
    Flight::render('templates/register.tpl',array('erreurs'=>null,'old_form'=>null));
});

/**
 * Name = "register-traitement"
 */
Flight::route('POST /register',function(){
    $db = Flight::db();
    $erreurs="";

    //sécurité
    $nom  = htmlspecialchars(trim($_POST["nom"]));
    $mail = htmlspecialchars(trim($_POST["email"]));;
    $pswd = htmlspecialchars(trim($_POST["pswd"]));
    
    /*SUCCESSION DE IF => PERMET D'AFFICHER CHAQUE ERREUR */

    //validité adresse mail
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
        $erreurs.="<br/>Veuillez saisir une adresse mail correcte.";
    
    //tous les champs remplis
    if(empty($nom) | empty($mail) | empty($pswd))
        $erreurs.="<br/>Veuillez remplir tous les champs.";

    //taille du mot de passe
    if(strlen($pswd)<8)
        $erreurs.="<br/>Mot de passe: 8 caractères minimum requis.";

    //taille de l'email
    if(strlen($email) > 64)
        $erreurs.="<br/>Email trop long";

    //Vérification nom & mail pas dans la base
    $existe_deja=$db->query("SELECT email,nom_user FROM Utilisateur WHERE email='$mail' OR nom_user='$nom';");
    if($existe_deja->fetchAll()!=array())
        $erreurs.="<br/>Compte existe déjà dans la base.";      


    //si pas d'erreurs => succes
    //sinon => affichage erreurs
    if($erreurs=="")
    {
        $pswd=password_hash($pswd,PASSWORD_DEFAULT);
        $requete=$db->prepare("INSERT INTO utilisateur (`id_user`,`nom_user`,`password`,`email`) VALUES (NULL,:nom,:pswd,:mail);");
        $requete->execute(array(
            ':nom'=>$nom,
            ':pswd'=>$pswd,
            ':mail'=>$mail
        ));
        Flight::render("templates/success.tpl",array(null));
    } 
    else Flight::render('templates/register.tpl',array('erreurs'=>$erreurs,'old_form'=>$_POST)); 
 
});

/**
 * Name = "login"
 */
Flight::route("/login", function (){
    Flight::render('templates/login.tpl', array('erreurs'=>null,'old_form'=>null));
});

/**
 * Name = "details"
 */
Flight::route("/details", function (){
    Flight::render('templates/details.tpl', array('ligne'=>null));
});

/**
 * Name = "candidature"
 */
Flight::route("GET /candidature", function (){
    Flight::render('templates/candidature.tpl', array('erreurs'=>null,'old_form'=>null));
});

/**
 * Name = "candidature-traitement"
 */
Flight::route("POST /candidature", function(){
    $db = Flight::db();
    $erreur = "";
    //Vérification si tous les champs nécessaires sont présents
    if(!empty($_POST['nom_groupe']) && !empty($_POST['annee_creation']) && !empty($_POST['presentation']) && !empty($_POST['experience']) && !empty($_POST['site_web']) && !empty($_POST['statut_assoc']) && !empty($_POST['is_sacem']) && !empty($_POST['have_producteur']) && isset($_POST['departement'])&& isset($_POST['style']) && isset($_POST['scene']) && file_exists($_FILES['image1'])&& file_exists($_FILES['image2']) && file_exists($_FILES['piste1']) && file_exists($_FILES['piste2']) && file_exists($_FILES['piste3']) && !empty($_POST['membres'])){
        //Vérifie le nom du groupe
        if(strlen($_POST['nom_groupe'])){
            $nomGroupe = htmlspecialchars(trim($_POST['nom_groupe']));
        }else{
            $erreur = "Le nom du groupe est trop long";
        }

        //Vérifie l'année de création
        if(strlen($_POST['annee_creation']) == 4){
            $anneeCreation = htmlspecialchars($_POST['annee_creation']);
        }else{
            $erreur = "Le format de l'année de création n'est pas valide (ex: 2020)";
        }

        //Vérifie la présentation
        if(strlen($_POST['annee_creation']) <= 500){
            $presentation = htmlspecialchars(trim($_POST['presentation']));
        }else{
            $erreur = "La présentation doit faire 500 caractères maximum !";
        }

        //Vérifie l'expérience
        if(strlen($_POST['experience']) >= 500){
            $experience = htmlspecialchars(trim($_POST['experience']));
        }else{
            $erreur = "L'expérience doit faire 500 caractères maximum !";
        }

        //Vérifie le site web
        if(strlen($_POST['site_web']) >= 100){
            $siteWeb = htmlspecialchars(trim($_POST['site_web']));
        }else{
            $erreur = "L'URL de votre site de communication est trop longue !";
        }

        //Vérifie le statut associatif
        if(isset($_POST['statut_assoc'])){
            $statutAssoc = true;
        }else{
            $erreur = "Vous n'indiquez pas si vous êtes une association !";
        }

        //Vérifie si inscrit à la SACEM
        if(isset($_POST['is_sacem'])){
            $isSacem = true;
        }else{
            $erreur = "Vous n'indiquez pas si vous êtes inscrit à la SACEM !";
        }

        //Vérifie la présence d'un producteur
        if(isset($_POST['have_producteur'])){
            $haveProducer = true;
        }else{
            $erreur = "Vous n'indiquez pas la présence d'un producteur !";
        }

        //Vérifie le site youtube si il est renseigné 
        if(isset($_POST['youtube'])){
            if(strlen($_POST['youtube']) >= 100){
                $youtube = htmlspecialchars(trim($_POST['youtube']));
            }else{
                $erreur = "Le lien youtube est trop long";
            }
        }else{
            $youtube = "";
        }
        //Vérifie le site soundcloud si il est renseigné
        if(isset($_POST['soundcloud'])){
            if(strlen($_POST['soundcloud']) >= 100){
                $youtube = htmlspecialchars(trim($_POST['soundcloud']));
            }else{
                $erreur = "Le lien soundcloud est trop long";
            }
        }else{
            $soundcloud = "";
        }

        //Vérifie les images
        if(($_FILES['image1']['type'] == "image/jpeg") || ($_FILES['image1']['type'] == "image/png")) && (($_FILES['image2']['type'] == "image/jpeg") || ($_FILES['image2']['type'] == "image/png")){
            $nomImage1 = $nomGroupe + "_image1";
            $nomImage2 = $nomGroupe + "_image2";
            $_FILES['image1']['name'] = $nomImage1;
            $_FILES['image2']['name'] = $nomImage2;
        }else{
            $erreur = "Le format des images n'est pas correct (jpeg ou png)";
        }

        //TODO : Vérifie les sons
        if(){
        }
    }else{
        $erreur = "Tout les champs nécessaires ne sont pas renseignées !";
    }
    if($erreur = ""){
        //TODO : faire la requête et insert le candid + fichier
    }else{
        //TODO : rendre login.tpl + erreurs
    }
});

/**
 * Name = "profil_consulter"
 */
Flight::route("/p_consulter", function (){
    Flight::render('templates/p_consulter.tpl', array(null));
});

/**
 * Name = "profil_edit"
 */
Flight::route("/p_edit", function (){
    Flight::render('templates/p_edit.tpl', array(null));
});