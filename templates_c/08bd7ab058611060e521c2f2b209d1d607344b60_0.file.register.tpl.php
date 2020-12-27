<?php
/* Smarty version 3.1.36, created on 2020-12-27 16:15:42
  from 'C:\laragon\www\projet-festival\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe8b32ea92be8_67669856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08bd7ab058611060e521c2f2b209d1d607344b60' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\register.tpl',
      1 => 1609085741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe8b32ea92be8_67669856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_894366375fe8b32ea8ced7_80113726', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9359453675fe8b32ea8db51_77026614', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_894366375fe8b32ea8ced7_80113726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_894366375fe8b32ea8ced7_80113726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Register
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_9359453675fe8b32ea8db51_77026614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9359453675fe8b32ea8db51_77026614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1 class="text-center">S'enregistrer</h1>
            <div class="card w-25 mx-auto p-3 m-5">
                <p class="h4 text-primary font-weight-bold p-2"><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>
                <form action="./register" method="POST">
                    <div class="form-group row">
                        <label for="nom-input" class="col-sm-2 col-form-label">Nom</label>
                        <input id="nom-input" name="nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom'];?>
" class="col-sm-10" required>
                    </div>
                    <div class="form-group row">
                        <label for="email-input" class="col-sm-2 col-form-label">Email</label>
                        <input id="email-input" name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['email'];?>
" class="col-sm-10" required>
                    </div>
                    <div class="form-group row" >
                        <label for="pswd-input" class="col-sm-4 col-form-label">Mot De Passe</label>
                        <input id="pswd-input" name="pswd" type="password"  class="col-sm-8" required>
                    </div>
                    <div class="lead text-center">
                        <button type="submit" class="btn btn-success">Inscription</button>
                    </div>
                </form>
                <a class="cancel" href="./">Annuler</a>
            </div>
        </main>
<?php
}
}
/* {/block "content"} */
}
