<?php
/* Smarty version 3.1.36, created on 2020-12-14 20:25:23
  from 'C:\laragon\www\projet-festival\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd7ca33718501_94513604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2202afa16af64e094307ddedb39ec22a579a904' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\candidature.tpl',
      1 => 1607977099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd7ca33718501_94513604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9229260475fd7ca336fa829_98484988', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16630234145fd7ca336fbfc0_42332667', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_9229260475fd7ca336fa829_98484988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9229260475fd7ca336fa829_98484988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Candidature | Saisie
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_16630234145fd7ca336fbfc0_42332667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16630234145fd7ca336fbfc0_42332667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
                <section class="jumbotron w-50 mx-auto my-4">
            <h1 class="display-1 text-center m-0">Candidature</h1>
            <hr class="my-4"/>
            <form action="./candidature" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="my-3">
                        <label for="nom_groupe-input">Nom du groupe : </label>
                        <input type="text" class="form-control" id="nom_groupe-input" placeholder="Entrez le nom du groupe" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom_groupe'];?>
" name="nom_groupe" required>
                    </div>
                    <div class="my-3">
                        <label for="departement-input">Département d'origine : </label>
                        <select class="custom-select" name="departement" id="departement-input" required>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['depts']->value, 'dept');
$_smarty_tpl->tpl_vars['dept']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['num_dept'];?>
" <?php if ($_smarty_tpl->tpl_vars['dept']->value['num_dept'] == $_smarty_tpl->tpl_vars['old_form']->value['departement']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['dept']->value['departement'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="style-input">Style du groupe : </label>
                        <select class="custom-select" name="style" id="style-input" required>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'nom', false, 'num');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['old_form']->value['style']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="scene-input">Scène du groupe : </label>
                        <select class="custom-select" name="scene" id="scene-input" required>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'nom', false, 'num');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['old_form']->value['scene']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="annee_creation-input">Année de Création : </label>
                        <input placeholder="Entrez l'année de création du groupe" id="annee_creation-input" class="form-control" name="annee_creation" type="number" min=1990 max=2020 value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['annee_creation'];?>
" required>
                    </div>
                    <div class="my-3">
                        <label for="presentation-input">Présentation : </label>
                        <textarea placeholder="Présentez votre groupe en 500 caractères maximum..." id="presentation-input" class="form-control" name="presentation" maxlength="500" rows="3" required><?php echo $_smarty_tpl->tpl_vars['old_form']->value['presentation'];?>
</textarea>
                    </div>
                    <div class="my-3">
                        <label for="experience-input">Expérience : </label>
                        <textarea placeholder="Résumez votre expérience" id="experience-input" class="form-control" name="experience" maxlength="500" rows="3" required><?php echo $_smarty_tpl->tpl_vars['old_form']->value['experience'];?>
</textarea>
                    </div>
                    <div class="my-3">
                        <label for="site_web-input">Site web : </label>
                        <input type="text" class="form-control" name="site_web" id="site_web-input" placeholder="Entrez le site de communication du groupe" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['site_web'];?>
" required>
                    </div>
                    <div class="my-3">
                        <label for="soundcloud-input">SoundCloud : *</label>
                        <input type="text" class="form-control" name="soundcloud" id="soundcloud-input" placeholder="Copiez l'URL du SoundCloud de votre groupe" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['soundcloud'];?>
">
                    </div>
                    <div class="my-3">
                        <label for="youtube-input">YouTube : *</label>
                        <input type="text" class="form-control" name="youtube" id="youtube-input" placeholder="Copiez l'URL de la chaine YouTube de votre groupe" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['youtube'];?>
">
                    </div>
                    <div class="my-3">
                        <label for="statut_assoc-input">Statut Associatif : </label>
                        <input id="statut_assoc-input"  name="statut_assoc" type="checkbox">
                    </div>
                    <div class="my-3">
                        <label for="is_sacem-input">Sacem : </label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox">
                    </div>
                    <div class="my-3">
                        <label for="have_producteur-input">Producteur : </label>
                        <input id="have_producteur-input" name="have_producteur" type="checkbox">
                    </div>

                    <hr class="my-4">

                    <div>                         <div>
                            <button id="add" class="btn btn-success" type="button">Ajouter</button>
                            <button id="delete" class="btn btn-danger" type="button">Supprimer</button>
                        </div>
                        <div id="container" class="d-flex flex-wrap">
                            <section class="card border-secondary m-2" style="width: 12rem">
                                <div class="card-header">MEMBRE 1</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control my-1 nom-input" placeholder="Nom">
                                        <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom">
                                        <input type="text" class="form-control my-1 instrument-input"
                                               placeholder="Instrument">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <input id="membresVariables" type="text" value="" name="membres" style="display: none">
                    </div>

                    <hr class="my-4">

                    <div class="my-3">
                        <label for="technique-input">Fiche technique</label>
                        <input type="file" class="form-control-file" name="technique" id="technique-input">
                    </div>
                    <div class="my-3">
                        <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                        <input type="file" name="sacem" id="sacem-input" class="form-control-file">
                    </div>
                    <div class="my-3">
                        <label for="image1-input">Photo du groupe n°1 : </label>
                        <input type="file" class="form-control-file" id="image1-input" name="image1">
                    </div>
                    <div class="my-3">
                        <label for="image2-input">Photo du groupe n°2 : </label>
                        <input type="file" class="form-control-file" id="image2-input" name="image2">
                    </div>
                    <div class="my-3">
                        <label for="piste1-input">Piste MP3 n°1 : </label>
                        <input name="piste1" class="form-control-file" id="piste1-input" type="file">
                    </div>
                    <div class="my-3">
                        <label for="piste2-input">Piste MP3 n°2 : </label>
                        <input name="piste2" class="form-control-file" id="piste2-input" type="file">
                    </div>
                    <div class="my-3">
                        <label for="piste3-input">Piste MP3 n°3 : </label>
                        <input name="piste3" class="form-control-file" id="piste3-input" type="file">
                    </div>
                    <div class="text-center">
                        <input type="submit" id="submit" value="Envoyer" class="btn btn-success btn-lg">
                    </div>

                </div>
            </form>
            <a class="cancel float-right" href="./">Annuler...</a>
            <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>
        </section>
    </main>
    <?php echo '<script'; ?>
 src="./script/gestionMembres.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
