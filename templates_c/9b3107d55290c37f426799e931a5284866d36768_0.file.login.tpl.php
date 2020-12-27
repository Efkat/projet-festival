<?php
/* Smarty version 3.1.36, created on 2020-12-27 16:13:53
  from 'C:\laragon\www\projet-festival\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe8b2c1cf9263_19989647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3107d55290c37f426799e931a5284866d36768' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\login.tpl',
      1 => 1609085632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe8b2c1cf9263_19989647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2365208135fe8b2c1cf3d77_49137291', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4000405935fe8b2c1cf48e2_04434245', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_2365208135fe8b2c1cf3d77_49137291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2365208135fe8b2c1cf3d77_49137291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Login
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_4000405935fe8b2c1cf48e2_04434245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4000405935fe8b2c1cf48e2_04434245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1 class="text-center">Se Connecter</h1>
            <div class="card w-25 mx-auto p-3 m-5">
            <p class="h4 text-primary font-weight-bold m-3 p-2"><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>
                <form action="./login" method="POST">
                    <div class="form-group row">
                        <label for="nom-input" class="col-sm-2 col-form-label">Nom</label>
                        <input name="nom" id="nom-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom'];?>
" class="col-sm-10" required>
                    </div>
                    <div class="form-group row">
                        <label for="pswd-input" class="col-sm-4 col-form-label">Mot De Passe</label>
                        <input name="pswd" id="pswd-input" type="password" class="col-sm-8">
                    </div>
                    <div class="lead text-center">
                        <button type="submit" class="btn btn-success">Connexion</button>
                    </div>
                </form>
                    <a class="cancel " href="./">Annuler...</a>
            </div>
        </main>
<?php
}
}
/* {/block "content"} */
}
