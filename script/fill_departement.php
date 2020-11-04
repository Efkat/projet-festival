<?php
require '../vendor/autoload.php';


Flight::register('db', 'PDO', array('mysql:host=127.0.0.1;dbname=festival','root','root'),
function ($db){
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
});

$db=Flight::db();
$lignes=(file("departement.csv"));

foreach($lignes as $ligne)
{
    $data=explode('","',$ligne);
    $pos=strpos($data[2],'\'');

    if($pos!==FALSE)
    {   
        $chn=explode('\'',$data[2]);
        $db->query("INSERT INTO departement VALUES ('$data[1]','$chn[0]`$chn[1]');");
    }
    else
        $db->query("INSERT INTO departement VALUES ('$data[1]','$data[2]');");
}   