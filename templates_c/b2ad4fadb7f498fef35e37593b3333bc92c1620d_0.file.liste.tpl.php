<?php
/* Smarty version 3.1.36, created on 2020-11-06 10:39:31
  from 'C:\laragon\www\projet-festival\templates\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa527e3991096_06612831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ad4fadb7f498fef35e37593b3333bc92c1620d' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\liste.tpl',
      1 => 1604659170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa527e3991096_06612831 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Liste</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
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
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html><?php }
}
