<?php
/* Smarty version 3.1.36, created on 2021-01-05 13:23:20
  from 'C:\laragon\www\projet-festival\templates\stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff46848360ca3_13343130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5494a6889f272f6fc7f27e9a7a3068186ed061e' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\stats.tpl',
      1 => 1607850760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff46848360ca3_13343130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19677081595ff4684834a729_04230081', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4878248595ff4684834b6e7_02689007', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_19677081595ff4684834a729_04230081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19677081595ff4684834a729_04230081',
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
class Block_4878248595ff4684834b6e7_02689007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4878248595ff4684834b6e7_02689007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>Statistiques</h1>
            <section>
                <dl>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stats']->value, 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                                                   <dd><?php echo $_smarty_tpl->tpl_vars['stat']->value;?>
</dd>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </dl>
            </section>

        </main>
<?php
}
}
/* {/block "content"} */
}
