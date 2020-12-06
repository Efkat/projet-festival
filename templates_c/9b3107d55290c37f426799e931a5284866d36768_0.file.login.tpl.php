<?php
/* Smarty version 3.1.36, created on 2020-12-06 17:54:41
  from 'C:\laragon\www\projet-festival\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcd1ae11ccfc2_76548293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3107d55290c37f426799e931a5284866d36768' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\login.tpl',
      1 => 1607277274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd1ae11ccfc2_76548293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2533176415fcd1ae11c51e4_94966224', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6945005675fcd1ae11c5dc5_02258419', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_2533176415fcd1ae11c51e4_94966224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2533176415fcd1ae11c51e4_94966224',
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
class Block_6945005675fcd1ae11c5dc5_02258419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6945005675fcd1ae11c5dc5_02258419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>Se Connecter</h1>
            <section>
                <form action="./login" method="POST">
                    <div>
                        <label for="nom-input">Nom</label>
                        <input name="nom" id="nom-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom'];?>
" required>
                    </div>
                    <div>
                        <label for="pswd-input">Mot De Passe:</label>
                        <input name="pswd" id="pswd-input" type="password">
                    </div>
                        <input type="submit" value="Envoyer">
                </form>
                <a class="cancel" href="./">Annuler</a>
                <p><?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>
</p>

            </section>
        </main>
<?php
}
}
/* {/block "content"} */
}
