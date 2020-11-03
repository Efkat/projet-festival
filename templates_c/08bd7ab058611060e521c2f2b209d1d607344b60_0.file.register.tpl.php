<?php
/* Smarty version 3.1.36, created on 2020-11-03 08:46:50
  from 'C:\laragon\www\projet-festival\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa118fa773599_35885361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08bd7ab058611060e521c2f2b209d1d607344b60' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\register.tpl',
      1 => 1604393063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa118fa773599_35885361 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Register</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
            <h1>S'enregistrer</h1>
            <section>
                <form action="./register" method="POST">
                    <div>
                        <label for="nom">Nom</label>
                        <input name="nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom'];?>
"> 
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['email'];?>
"> 
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
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html><?php }
}
