<?php
/* Smarty version 3.1.36, created on 2020-11-02 17:17:26
  from 'C:\laragon\www\projet-festival\templates\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa03f26047885_44226217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ad4fadb7f498fef35e37593b3333bc92c1620d' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\liste.tpl',
      1 => 1604337444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa03f26047885_44226217 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Liste</title>
    </head>
    <main>
        <header>
            

        </header>
        <body>
            <h1>Liste</h1>
            <section>
                <table>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lignes']->value, 'ligne');
$_smarty_tpl->tpl_vars['ligne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->do_else = false;
?>
                        <tr>
                                                        <td><a href="./details/<?php echo $_smarty_tpl->tpl_vars['ligne']->value[0];?>
">Détails</a></td>


                                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[0];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[2];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[3];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[4];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[5];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[6];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[7];?>
</td>                         </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </section>
        </body>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </main>




</html><?php }
}
