<?php
/* Smarty version 3.1.36, created on 2020-12-03 20:23:29
  from 'C:\laragon\www\projet-festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fc949419c8360_02127647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a054b433839de6d58483ebbb308a70c349d65c' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\index.tpl',
      1 => 1607027008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc949419c8360_02127647 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../styles/style.css">
        <title>Acceuil <?php if ($_smarty_tpl->tpl_vars['name']->value != null) {?> | <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?></title>
    </head>
    <body>
        <header class="container-fluid border-bottom">
            <h1 class="text-center my-4 text-primary">🎸 Good Rockin' Festival 🎸</h1>
        </header>
        <main>
            <div class="jumbotron w-75 mx-auto rounded m-5">
                <h2 class="text-center m-3 display-3">Bienvenue <?php if ($_smarty_tpl->tpl_vars['name']->value != null) {
echo $_smarty_tpl->tpl_vars['name']->value;
} else { ?>visiteur<?php }?> sur la page d'inscription !</h2>
                <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?>
                                        <a href="./register">S'enregistrer</a>
                    <a href="./login">Se Connecter</a>
                <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['candidature']->value == 0 && $_smarty_tpl->tpl_vars['name']->value != 'admin') {?>
                                                <a href="./candidature">Candidature</a>
                    <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'admin') {?>
                            <a href="./liste">Liste Candidatures</a>
                        <?php } else { ?>
                                                        <a href="./c_consulter">Consulter Candidature</a>
                            <a href="./c_edit">Editer Candidature</a>
                        <?php }?>
                    <?php }?>
                    <hr class="my-2">
                    <p class="lead text-center">
                        <a class="btn btn-primary btn-lg " href="/logout" role="button">Déconnexion</a>
                    </p>
                <?php }?>

            </div>
            <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>
        </main>
        <footer class="page-footer font-small blue pt-4 border-top">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <h5 class="text-uppercase">Good Rockin' Festival</h5>
                        <p>Projet du module de Programmation Web Côté Serveur consistant à gérer les inscriptions des groupes à un festival.</p>

                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="https://github.com/Efkat" target="_blank">GitHub Hugo Benabdelhak</a>
                            </li>
                            <li>
                                <a href="https://github.com/NinoLS" target="_blank">GitHub Nino Belic</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 border-top">© 2020 - Hugo Benabdelhak & Nino Belic</div>
        </footer>
    </body>
</html><?php }
}
