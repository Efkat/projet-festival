<?php
/* Smarty version 3.1.36, created on 2020-11-02 19:18:42
  from 'C:\laragon\www\projet-festival\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa05b92b15306_56138554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2202afa16af64e094307ddedb39ec22a579a904' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\candidature.tpl',
      1 => 1604344721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa05b92b15306_56138554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Candidature</title>
    </head>
    <main>
        <header>
            

        </header>
        <body>
            <h1>Candidature</h1>
            <section>

                        
                <form action="./candidature" method="POST">
                    <div>
                        <label for="annee_creation">Année de Création</label>
                        <input name="annee_creation" type="number" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['annee_creation'];?>
"> 
                    </div>
                    <div>
                        <label for="presentation">Présentation</label>
                        <textarea name="presentation"></textarea>
                    </div>
                    <div>
                        <label for="experience">Expérience</label>
                        <textarea name="experience"></textarea>
                    </div>
                    <div>
                        <label for="site_web">Site Web</label>
                        <input name="site_web" type="text">
                    </div>
                    <div>
                        <label for="soundcloud">Soundcloud*</label>
                        <input name="soundcloud" type="text">
                    </div>
                    <div>
                        <label for="youtube">Youtube*</label>
                        <input name="youtube" type="text">
                    </div>
                    <div>
                        <label for="statut_assoc">Statut Association</label>
                        <input name="statut_assoc" type="checkbox">
                    </div>
                    <div>
                        <label for="is_sacem">Sacem</label>
                        <input name="is_sacem" type="checkbox">
                    </div>
                    <div>
                        <label for="have_producteur">Producteur</label>
                        <input name="have_producteur" type="checkbox">
                    </div>
                    <div>                         <label for="membres">Membres</label>
                        <textarea name="membres"></textarea>
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
