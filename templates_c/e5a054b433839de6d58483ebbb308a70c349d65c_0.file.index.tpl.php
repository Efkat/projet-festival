<?php
/* Smarty version 3.1.36, created on 2020-12-05 08:55:33
  from 'C:\laragon\www\projet-festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcb4b05865f56_76056210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a054b433839de6d58483ebbb308a70c349d65c' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\index.tpl',
      1 => 1607158530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb4b05865f56_76056210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18560012855fcb4b05835333_80053639', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6075153455fcb4b058596f5_90674226', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_18560012855fcb4b05835333_80053639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18560012855fcb4b05835333_80053639',
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
class Block_6075153455fcb4b058596f5_90674226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6075153455fcb4b058596f5_90674226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "content"} */
}
