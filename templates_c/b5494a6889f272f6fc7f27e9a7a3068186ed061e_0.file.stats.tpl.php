<?php
/* Smarty version 3.1.36, created on 2021-01-05 23:04:32
  from 'C:\laragon\www\projet-festival\templates\stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff4f0801ffba8_84549985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5494a6889f272f6fc7f27e9a7a3068186ed061e' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\stats.tpl',
      1 => 1609887870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff4f0801ffba8_84549985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4630377865ff4f0801fe953_42353703', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1451216015ff4f0801ff4b3_27161562', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_4630377865ff4f0801fe953_42353703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4630377865ff4f0801fe953_42353703',
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
class Block_1451216015ff4f0801ff4b3_27161562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1451216015ff4f0801ff4b3_27161562',
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
                        <div>
                            <input type="checkbox" name="viewBy" value="dept">
                            <label for="dept">Départements</label>
                        </div>
                        <div>
                            <input type="checkbox" name="viewBy" value="style">
                            <label for="style">Styles</label>
                        </div>
                        <div>
                            <input type="checkbox" name="viewBy" value="scene">
                            <label for="scene">Scènes</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" id="submit" value="Envoyer" class="btn btn-success btn-lg">
                    </div>
                </form>
            </section>

        </main>
<?php
}
}
/* {/block "content"} */
}
