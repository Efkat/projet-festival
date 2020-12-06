<?php
/* Smarty version 3.1.36, created on 2020-12-06 17:57:20
  from 'C:\laragon\www\projet-festival\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcd1b80b2f7a4_31559079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08bd7ab058611060e521c2f2b209d1d607344b60' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\register.tpl',
      1 => 1607277063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd1b80b2f7a4_31559079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4394547095fcd1b80b295a1_30787460', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12897807285fcd1b80b2a1c6_40475960', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_4394547095fcd1b80b295a1_30787460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4394547095fcd1b80b295a1_30787460',
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
class Block_12897807285fcd1b80b2a1c6_40475960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12897807285fcd1b80b2a1c6_40475960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>S'enregistrer</h1>
            <section>
                <form action="./register" method="POST">
                    <div>
                        <label for="nom">Nom</label>
                        <input name="nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['nom'];?>
"> 
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['old_form']->value['email'];?>
"> 
                    </div>
                    <div>
                        <label for="pswd">Mot De Passe:</label>
                        <input name="pswd" type="password">
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
