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
Flight::route("/candidature", function (){
    Flight::render('templates/candidature.tpl', array('erreurs'=>null,'old_form'=>null));
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