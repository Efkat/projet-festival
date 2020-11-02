<?php
session_start();
require 'vendor/autoload.php';

include 'fonctions.php';

Flight::register('view', 'Smarty', array(), function ($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir='./templates_c/';
    $smarty->config_dir='./config/';
    $smarty->cache_dir='./cache/';
});

Flight::map('render', function(string $template, array $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

Flight::start();