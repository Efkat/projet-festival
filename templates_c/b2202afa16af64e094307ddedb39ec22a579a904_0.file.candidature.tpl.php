<?php
/* Smarty version 3.1.36, created on 2020-11-16 22:08:40
  from 'C:\laragon\www\projet-festival\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb2f868887d90_42981681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2202afa16af64e094307ddedb39ec22a579a904' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\candidature.tpl',
      1 => 1605564518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb2f868887d90_42981681 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css" type="text/css">
    <title>Candidature | Saisie</title>
</head>

<body>
    <header>


    </header>
    <main>
                <section class="jumbotron w-50 mx-auto my-4">
            <h1 class="display-1 text-center m-0">Candidature</h1>
            <hr class="my-4"/>
            <form action="./candidature" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div>
                        <label for="nom_groupe-input">Nom du groupe : </label>
                        <input id="nom_groupe-input" name="nom_groupe" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom_groupe'];?>
"
                            required>
                    </div>
                    <div>
                        <label for="departement-input">Département d'origine : </label>
                        <select name="departement" id="departement-input">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['depts']->value, 'nom', false, 'num');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['old_form']->value['departement']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
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
                    <div>
                        <label for="scene-input">Scène du groupe</label>
                        <select name="scene" id="scene-input">
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
                        <input id="annee_creation-input" name="annee_creation" type="number" min=1990 max=2020
                            value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['annee_creation'];?>
" required>
                    </div>
                    <div>
                        <label for="presentation-input">Présentation</label>
                        <textarea id="presentation-input" name="presentation" maxlength="500"
                            required><?php echo $_smarty_tpl->tpl_vars['old_form']->value['presentation'];?>
</textarea>
                    </div>
                    <div>
                        <label for="experience-input">Expérience</label>
                        <textarea id="experience-input" name="experience" maxlength="500"
                            required><?php echo $_smarty_tpl->tpl_vars['old_form']->value['experience'];?>
</textarea>
                    </div>
                    <div>
                        <label for="site_web-input">Site Web</label>
                        <input id="site_web-input" name="site_web" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['site_web'];?>
">
                    </div>
                    <div>
                        <label for="soundcloud-input">Soundcloud*</label>                         <input id="soundcloud-input" name="soundcloud" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['soundcloud'];?>
">
                    </div>
                    <div>
                        <label for="youtube-input">Youtube*</label>                         <input id="youtube-input" name="youtube" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['youtube'];?>
">
                    </div>
                    <div>
                        <label for="statut_assoc-input">Statut Association</label>
                        <input id="statut_assoc-input" name="statut_assoc" type="checkbox">
                    </div>
                    <div>
                        <label for="is_sacem-input">Sacem</label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox">
                    </div>
                    <div>
                        <label for="have_producteur-input">Producteur</label>
                        <input id="have_producteur-input" name="have_producteur" type="checkbox">
                    </div>
                    <div>                         <div>
                            <button id="add" class="btn btn-outline-info">Ajouter</button>
                            <button id="delete" class="btn btn-outline-warning">Supprimer</button>
                        </div>

                        <div id="container" class="d-flex flex-wrap">
                            <section class="card text-white bg-primary m-3" style="max-width: 20rem">
                                <div class="card-header">MEMBRE 1</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control my-1 nom-input" placeholder="Nom">
                                        <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom">
                                        <input type="text" class="form-control my-1 instrument-input"
                                            placeholder="Instrument">
                                    </div>
                                    <button type="button" class="btn btn-info btn-sm">Confirmer membre</button>
                                </div>
                            </section>
                        </div>
                        <input id="membresVariables" type="text" value="" name="membres" style="display: none">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Télécharger</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="technique">
                            <label class="custom-file-label" for="inputGroupFile01">Fiche technique</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon02">Télécharger</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="sacem">
                            <label class="custom-file-label" for="inputGroupFile02">Document SACEM ou tracklist détaillée</label>
                        </div>
                    </div>
                    <div>
                        <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                        <input type="file" id="sacem-input" name="sacem">
                    </div>
                    <input type="submit" value="Envoyer">
                </div>
            </form>
            <a class="cancel" href="./">Annuler</a>
            <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>
        </section>
    </main>
    <footer>
        <p>Nino BELIC & Hugo BENAB DEL K</p>
    </footer>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../script/gestionMembres.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
