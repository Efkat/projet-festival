<?php
/* Smarty version 3.1.36, created on 2020-12-06 17:57:28
  from 'C:\laragon\www\projet-festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcd1b886ff070_78707941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0e3c2a952ef01f302b1c5b98b416197788d6159' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\success.tpl',
      1 => 1607277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd1b886ff070_78707941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20534646295fcd1b886fd965_39006504', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14744290735fcd1b886fe6c6_08046328', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_20534646295fcd1b886fd965_39006504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20534646295fcd1b886fd965_39006504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Success
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_14744290735fcd1b886fe6c6_08046328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14744290735fcd1b886fe6c6_08046328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h3>Enregistré!</h3>
            <p>Données transférées à la base!</p>
            <a href="./">Accueil</a>
        </main>   
<?php
}
}
/* {/block "content"} */
}
