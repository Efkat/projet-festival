<?php
/* Smarty version 3.1.36, created on 2021-01-05 13:22:00
  from 'C:\laragon\www\projet-festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff467f8307220_20663354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a054b433839de6d58483ebbb308a70c349d65c' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\index.tpl',
      1 => 1609852919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff467f8307220_20663354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13985415175ff467f82fac60_46723189', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12549054315ff467f8303bb9_54542441', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_13985415175ff467f82fac60_46723189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13985415175ff467f82fac60_46723189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Acceuil <?php if ($_smarty_tpl->tpl_vars['name']->value != null) {?> | <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_12549054315ff467f8303bb9_54542441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12549054315ff467f8303bb9_54542441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <div class="jumbotron w-75 mx-auto rounded m-5">
            <h2 class="text-center m-3 display-3">Bienvenue <?php if ($_smarty_tpl->tpl_vars['name']->value != null) {
echo $_smarty_tpl->tpl_vars['name']->value;
} else { ?>visiteur<?php }?> sur la page d'inscription !</h2>
            <div class="card w-50 p-4" style="margin: 0 auto;">
                <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?>
                                        <a class="btn btn-primary btn-lg mt-2" href="./register">S'enregistrer</a>
                    <a class="btn btn-primary btn-lg mt-2" href="./login">Se Connecter</a>
                <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['candidature']->value == 0 && $_smarty_tpl->tpl_vars['name']->value != 'admin') {?>
                                                <a class="btn btn-primary btn-lg " href="./candidature">Candidature</a>
                    <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'admin') {?>
                            <a class="btn btn-primary btn-lg" href="./liste">Liste Candidatures</a>
                            <a class="btn btn-primary btn-lg mt-3" href="./stats">Statistiques</a>
                        <?php } else { ?>
                                                        <a class="btn btn-primary btn-lg mt-2" href="./c_consulter">Consulter Candidature</a>
                            <a class="btn btn-primary btn-lg mt-2" href="./c_edit">Editer Candidature</a>
                        <?php }?>
                    <?php }?>
                    <hr class="my-2">
                    <p class="lead text-center">
                        <a class="btn btn-primary btn-lg " href="./logout" role="button">Déconnexion</a>
                    </p>
                <?php }?>
            </div>

        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>
    </main>
<?php
}
}
/* {/block "content"} */
}
