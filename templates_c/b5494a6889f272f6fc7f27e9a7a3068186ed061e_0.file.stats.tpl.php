<?php
/* Smarty version 3.1.36, created on 2021-01-06 14:14:25
  from 'C:\laragon\www\projet-festival\templates\stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff5c5c1ce5ba3_95807016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5494a6889f272f6fc7f27e9a7a3068186ed061e' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\stats.tpl',
      1 => 1609942401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff5c5c1ce5ba3_95807016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14621673275ff5c5c1cd49e2_90341068', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5689422635ff5c5c1cd56b3_12312951', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_14621673275ff5c5c1cd49e2_90341068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14621673275ff5c5c1cd49e2_90341068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Stats
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_5689422635ff5c5c1cd56b3_12312951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5689422635ff5c5c1cd56b3_12312951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>Statistiques</h1>
            <section>
                <form action="./stats" method="POST">
                                        <div class="my-3 mx-5">
                        <legend>Voir par :</legend>
                        <div id="depts">
                            <input type="radio" name="viewBy" value="dept">
                            <label for="dept">Départements</label>
                        </div>
                        <div id="depts_div" class="my-3 mx-5" style="display:none;">
                            <label for="departement-input">Département : </label>
                            <select class="custom-select" name="departement" id="departement-input" required>
                                <option value="*" selected>Tous</option>
                                <option value="hdf">Hauts-de-France</option>
                                <option value="hors-hdf">Hors Hauts-de-France</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['depts']->value, 'dept');
$_smarty_tpl->tpl_vars['dept']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['num_dept'];?>
"><?php echo $_smarty_tpl->tpl_vars['dept']->value['departement'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div id="styles">
                            <input type="radio" name="viewBy" value="style">
                            <label for="style">Styles</label>
                        </div>
                        <div id="styles_div" class="my-3 mx-5" style="display:none;">
                            <label for="style-input">Style du groupe : </label>
                            <select class="custom-select" name="style" id="style-input" required>
                                <option value="*" selected>Tous</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'nom', false, 'num');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div id="scenes">
                            <input type="radio" name="viewBy" value="scene">
                            <label for="scene">Scènes</label>
                        </div>
                        <div id="scenes_div" class="my-3 mx-5" style="display:none;">
                            <label for="scene-input">Scène du groupe : </label>
                            <select class="custom-select" name="scene" id="scene-input" required>
                                <option value="*" selected>Tous</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'nom', false, 'num');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>  
                    </div>
                    <div class="text-center">
                        <input type="submit" id="submit" value="Envoyer" class="btn btn-success btn-lg">
                    </div>
                </form>
            </section>
        </main>
        <?php echo '<script'; ?>
 src="./script/selectDeptSceneStyle_stats.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
