<?php
/* Smarty version 3.1.36, created on 2020-12-22 13:18:09
  from 'C:\laragon\www\projet-festival\templates\c_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe1f211850f29_23745621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f14db8f539e188e20525ecb72bfbdd060de61ff' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\c_edit.tpl',
      1 => 1608643000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe1f211850f29_23745621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4073493505fe1f21182d943_07423465', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9035630575fe1f21182ed71_73212472', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_4073493505fe1f21182d943_07423465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4073493505fe1f21182d943_07423465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Editer Candidature
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_9035630575fe1f21182ed71_73212472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9035630575fe1f21182ed71_73212472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>Editer Candidature</h1>
            <section>
            
            
                <form action="./c_edit" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="nom_groupe-input">Nom du groupe</label>
                        <input id="nom_groupe-input" name="nom_groupe" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
">
                    </div>
                    <div>
                        <label for="departement-input">Département d'origine</label>
                        <select class="custom-select" name="departement" id="departement-input" required>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['depts']->value, 'dept');
$_smarty_tpl->tpl_vars['dept']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['num_dept'];?>
" <?php if ($_smarty_tpl->tpl_vars['dept']->value['departement'] == $_smarty_tpl->tpl_vars['candidature']->value['departement']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['dept']->value['departement'];?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'style', false, 'num');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                                
                                <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
"
                                <?php if ((isset($_smarty_tpl->tpl_vars['candidature']->value['id_style']))) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['candidature']->value['id_style']) {?> 
                                        selected                                            <?php }?>><?php echo $_smarty_tpl->tpl_vars['style']->value;?>
</option>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['candidature']->value['style']) {?> 
                                        selected                                            <?php }?>><?php echo $_smarty_tpl->tpl_vars['style']->value;?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div>
                        <label for="scene-input">Scène du groupe</label>
                        <select name="scene" id="scene-input">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'scene', false, 'num');
$_smarty_tpl->tpl_vars['scene']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->do_else = false;
?>
                                
                                <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" 
                                <?php if ((isset($_smarty_tpl->tpl_vars['candidature']->value['id_scene']))) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['candidature']->value['id_scene']) {?> 
                                        selected                                            <?php }?>><?php echo $_smarty_tpl->tpl_vars['scene']->value;?>
</option>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['candidature']->value['scene']) {?> 
                                        selected                                            <?php }?>><?php echo $_smarty_tpl->tpl_vars['scene']->value;?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        </select>
                    </div>
                    <div>
                        <label for="image1-input">Nouvelle photo du groupe n°1</label>
                        <input type="file" id="image1-input" name="image1">
                    </div>
                    <div>
                        <label for="image2-input">Nouvelle photo du groupe n°2</label>
                        <input type="file" id="image2-input" name="image2">
                    </div>
                    <div>
                        <label for="piste1-input">Nouvelle piste MP3 n°1</label>
                        <input name="piste1" id="piste1-input" type="file">
                    </div>
                    <div>
                        <label for="piste2-input">Nouvelle piste MP3 n°2</label>
                        <input name="piste2" id="piste2-input" type="file">
                    </div>
                    <div>
                        <label for="piste3-input">Nouvelle piste MP3 n°3</label>
                        <input name="piste3" id="piste3-input" type="file">
                    </div>
                    <div>
                        <label for="annee_creation-input">Année de Création</label>
                        <input id="annee_creation-input" name="annee_creation" type="number" value="<?php echo $_smarty_tpl->tpl_vars['candidature']->value['annee_creation'];?>
" required>
                    </div>
                    <div>
                        <label for="presentation-input">Présentation</label>
                        <textarea id="presentation-input" name="presentation" maxlength="500" required><?php echo $_smarty_tpl->tpl_vars['candidature']->value['presentation'];?>
</textarea>
                    </div>
                    <div>
                        <label for="experience-input">Expérience</label>
                        <textarea id="experience-input" name="experience" maxlength="500" required><?php echo $_smarty_tpl->tpl_vars['candidature']->value['experience'];?>
</textarea>
                    </div>
                    <div>
                        <label for="site_web-input">Site Web</label>
                        <input id="site_web-input" name="site_web" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['candidature']->value['site_web'];?>
">
                    </div>
                    <div>
                        <label for="soundcloud-input">Soundcloud*</label>                         <input id="soundcloud-input" name="soundcloud" type="text" value="<?php echo $_smarty_tpl->tpl_vars['candidature']->value['soundcloud'];?>
">
                    </div>
                    <div>
                        <label for="youtube-input">Youtube*</label>                         <input id="youtube-input" name="youtube" type="text" value="<?php echo $_smarty_tpl->tpl_vars['candidature']->value['youtube'];?>
">
                    </div>
                    <div>
                        <label for="statut_assoc-input">Statut Association</label>
                        <input id="statut_assoc-input" name="statut_assoc" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['candidature']->value['statut_assoc'] == 1) {?>checked<?php }?>>
                    </div>
                    <div>
                        <label for="is_sacem-input">Sacem</label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['candidature']->value['is_sacem'] == 1) {?>checked<?php }?>>
                    </div>
                    <div>
                        <label for="have_producteur-input">Producteur</label>
                        <input id="have_producteur-input" name="have_producer" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['candidature']->value['have_producer'] == 1) {?>checked<?php }?>>
                    </div>
                    <div>                         <div id="container" class="d-flex flex-wrap">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membres']->value, 'membre', false, 'num');
$_smarty_tpl->tpl_vars['membre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['membre']->value) {
$_smarty_tpl->tpl_vars['membre']->do_else = false;
?>
                                <section class="card border-secondary m-2" style="width: 12rem">
                                    <div class="card-header">MEMBRE <?php echo $_smarty_tpl->tpl_vars['num']->value+1;?>
</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control my-1 nom-input" placeholder="Nom" value=<?php echo $_smarty_tpl->tpl_vars['membre']->value[0];?>
>
                                            <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom" value=<?php echo $_smarty_tpl->tpl_vars['membre']->value[1];?>
>
                                            <input type="text" class="form-control my-1 instrument-input"
                                                placeholder="Instrument" value=<?php echo $_smarty_tpl->tpl_vars['membre']->value[2];?>
>
                                        </div>
                                    </div>
                                </section>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <input id="membresVariables" type="text" value="" name="membres" style="display: none">
                    </div>
                                        <div>
                        <label for="technique-input">Fiche technique</label>
                        <input type="file" id="technique-input" name="technique">
                    </div>
                    <div>
                        <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                        <input type="file" id="sacem-input" name="sacem">
                    </div>
                    <input type="submit" id="submit_edit" value="Envoyer">
                </form>
                <a class="cancel" href="./">Annuler</a>
                <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>

            </section>
        </main>
        <?php echo '<script'; ?>
 src="./script/gestionMembres_edit.js"><?php echo '</script'; ?>
> 

<?php
}
}
/* {/block "content"} */
}
