<?php
/* Smarty version 3.1.36, created on 2020-11-05 17:51:44
  from 'C:\laragon\www\projet-festival\templates\c_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa43bb03fa865_39945618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f14db8f539e188e20525ecb72bfbdd060de61ff' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\c_edit.tpl',
      1 => 1604598702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa43bb03fa865_39945618 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Candidature_Edit</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
            <h1>Editer Candidature</h1>
            <section>
            
                <form action="./c_edit" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="nom_groupe-input">Nom du groupe</label>
                        <input id="nom_groupe-input" name="nom_groupe" type="text" required>
                    </div>
                    <div>
                        <label for="departement-input">Département d'origine</label>
                        <select name="departement" id="departement-input">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nom_depts']->value, 'nom_dept');
$_smarty_tpl->tpl_vars['nom_dept']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nom_dept']->value) {
$_smarty_tpl->tpl_vars['nom_dept']->do_else = false;
?>
                                
                                <option value="<?php echo $_smarty_tpl->tpl_vars['nom_dept']->value;?>
" 
                                <?php if ($_smarty_tpl->tpl_vars['nom_dept']->value == $_smarty_tpl->tpl_vars['old_form']->value['departement']) {?> 
                                    selected                                        <?php }?>><?php echo $_smarty_tpl->tpl_vars['nom_dept']->value;?>
</option>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div>
                        <label for="style-input">Style du groupe</label>
                        <select name="style" id="style-input">
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'style');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                                
                                <option value="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" 
                                <?php if ($_smarty_tpl->tpl_vars['style']->value == $_smarty_tpl->tpl_vars['old_form']->value['style']) {?> 
                                    selected                                        <?php }?>><?php echo $_smarty_tpl->tpl_vars['style']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div>
                        <label for="scene-input">Scène du groupe</label>
                        <select name="scene" id="scene-input">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'scene');
$_smarty_tpl->tpl_vars['scene']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->do_else = false;
?>
                                
                                <option value="<?php echo $_smarty_tpl->tpl_vars['scene']->value;?>
" 
                                <?php if ($_smarty_tpl->tpl_vars['scene']->value == $_smarty_tpl->tpl_vars['old_form']->value['scene']) {?> 
                                    selected                                        <?php }?>><?php echo $_smarty_tpl->tpl_vars['scene']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        </select>
                    </div>
                    <div>
                        <label for="image1-input">Photo du groupe n°1</label>
                        <input type="file" id="image1-input" name="image1">
                    </div>
                    <div>
                        <label for="image2-input">Photo du groupe n°2</label>
                        <input type="file" id="image2-input" name="image2">
                    </div>
                    <div>
                        <label for="piste1-input">Piste MP3 n°1</label>
                        <input name="piste1" id="piste1-input" type="file">
                    </div>
                    <div>
                        <label for="piste2-input">Piste MP3 n°2</label>
                        <input name="piste2" id="piste2-input" type="file">
                    </div>
                    <div>
                        <label for="piste3-input">Piste MP3 n°3</label>
                        <input name="piste3" id="piste3-input" type="file">
                    </div>
                    <div>
                        <label for="annee_creation-input">Année de Création</label>
                        <input id="annee_creation-input" name="annee_creation" type="number" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['annee_creation'];?>
" required>
                    </div>
                    <div>
                        <label for="presentation-input">Présentation</label>
                        <textarea id="presentation-input" name="presentation" maxlength="500" required>test</textarea>
                    </div>
                    <div>
                        <label for="experience-input">Expérience</label>
                        <textarea id="experience-input" name="experience" maxlength="500" required></textarea>
                    </div>
                    <div>
                        <label for="site_web-input">Site Web</label>
                        <input id="site_web-input" name="site_web" type="text" required>
                    </div>
                    <div>
                        <label for="soundcloud-input">Soundcloud*</label>                         <input id="soundcloud-input" name="soundcloud" type="text">
                    </div>
                    <div>
                        <label for="youtube-input">Youtube*</label>                         <input id="youtube-input" name="youtube" type="text">
                    </div>
                    <div>
                        <label for="statut_assoc-input">Statut Association</label>
                        <input id="statut_assoc-input" name="statut_assoc" type="checkbox" required>
                    </div>
                    <div>
                        <label for="is_sacem-input">Sacem</label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox" required>
                    </div>
                    <div>
                        <label for="have_producteur-input">Producteur</label>
                        <input id="have_producteur-input" name="have_producteur" type="checkbox" required>
                    </div>
                    <div>                         <label for="membres-input">Membres</label>
                        <textarea id="membres-input" name="membres" maxlength="500"></textarea>
                    </div>
                    <div>
                        <label for="technique-input">Fiche technique</label>
                        <input type="file" id="technique-input" name="technique">
                    </div>
                    <div>
                        <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                        <input type="file" id="sacem-input" name="sacem">
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