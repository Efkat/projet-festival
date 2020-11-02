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
Flight::route("/register", function (){
    Flight::render('templates/register.tpl', array('erreurs'=>null,'old_form'=>null));
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