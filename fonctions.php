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
    Flight::render('templates/liste.tpl', array(null));
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
    Flight::render('templates/register.tpl', array(null));
});