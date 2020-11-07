<?php
/* Smarty version 3.1.36, created on 2020-11-07 23:18:03
  from 'C:\laragon\www\projet-festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa72b2b0336c4_93115861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a054b433839de6d58483ebbb308a70c349d65c' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\index.tpl',
      1 => 1604791082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa72b2b0336c4_93115861 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Home</title>
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <h1>Home</h1>
            <section>

            <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?> 
                            <p>Bonjour visiteur!</p>
                <a href="./register">S'enregistrer</a>
                <a href="./login">Se Connecter</a>
            <?php } else { ?> 
                            <p>Bonjour <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</p>

                <?php if ($_smarty_tpl->tpl_vars['candidature']->value == null && $_smarty_tpl->tpl_vars['name']->value != 'admin') {?> 
                                    <a href="./candidature">Candidature</a>
                <?php } else { ?>  
                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == 'admin') {?>
                        <a href="./liste">Liste Candidatures</a>
                    <?php } else { ?> 
                                            <a href="./c_consulter">Consulter Candidature</a> 
                        <a href="./c_edit">Editer Candidature</a>
                    <?php }?>
                <?php }?>
                

                <a href="./logout">Déconnexion</a>
            <?php }?>
                

            </section>
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html><?php }
}
