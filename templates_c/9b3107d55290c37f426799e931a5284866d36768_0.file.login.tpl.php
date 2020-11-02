<?php
/* Smarty version 3.1.36, created on 2020-11-02 17:29:09
  from 'C:\laragon\www\projet-festival\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa041e5034753_37973771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3107d55290c37f426799e931a5284866d36768' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\login.tpl',
      1 => 1604338148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa041e5034753_37973771 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Login</title>
    </head>
    <main>
        <header>
            

        </header>
        <body>
            <h1>Se Connecter</h1>
            <section>
                <form action="./login" method="POST">
                    <div>
                        <label for="nom">Nom</label>
                        <input name="nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom'];?>
" required> 
                    </div>
                    <div>
                        <label for="pswd">Mot De Passe:</label>
                        <input name="pswd" type="password">
                    </div>
                        <input type="submit" value="Envoyer">
                </form>
                <a class="cancel" href="./">Annuler</a>
                <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>

            </section>
        </body>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </main>




</html><?php }
}
