<?php
require '../vendor/autoload.php';


Flight::register('db', 'PDO', array('mysql:host=127.0.0.1;dbname=festival','root','root'),
function ($db){
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
});

$db=Flight::db();

$db->query("INSERT INTO scene VALUES ('1','Tribute');");
$db->query("INSERT INTO scene VALUES ('2','Acoustique_Folk');");
$db->query("INSERT INTO scene VALUES ('3','Amplifie_Rock');");

$db->query("INSERT INTO style VALUES ('1','Blues');");
$db->query("INSERT INTO style VALUES ('2','Disco');");
$db->query("INSERT INTO style VALUES ('3','Funk');");
$db->query("INSERT INTO style VALUES ('4','Reggae');");
$db->query("INSERT INTO style VALUES ('5','Rap');");
$db->query("INSERT INTO style VALUES ('6','Jazz');");
$db->query("INSERT INTO style VALUES ('7','Rock');");
$db->query("INSERT INTO style VALUES ('8','Soul');");
$db->query("INSERT INTO style VALUES ('9','Techno');");
$db->query("INSERT INTO style VALUES ('10','Salsa');");
$db->query("INSERT INTO style VALUES ('11','Folk');");