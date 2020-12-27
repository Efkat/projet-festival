<?php
/* Smarty version 3.1.36, created on 2020-12-27 22:30:34
  from 'C:\laragon\www\projet-festival\templates\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe90b0a34b967_32011060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ad4fadb7f498fef35e37593b3333bc92c1620d' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\liste.tpl',
      1 => 1609108233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe90b0a34b967_32011060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2725506335fe90b0a33af56_63190971', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18551600775fe90b0a33c118_76925377', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_2725506335fe90b0a33af56_63190971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2725506335fe90b0a33af56_63190971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Liste
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_18551600775fe90b0a33c118_76925377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18551600775fe90b0a33c118_76925377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>Liste</h1>
            <section>
                <table>
                    <tr class="border-bottom border-primary font-italic">
                        <td></td>
                        <td class="text-info font-weight-bold"><u>Nom Groupe</u></td>                         <td><u>Département</u></td>
                        <td><u>Scène</u></td>                         <td><u>Style</u></td>                         <td><u>Année Création</u></td> 
                        <td><u>Présentation</u></td>
                        <td><u>Expérience</u></td> 
                    </tr>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lignes']->value, 'ligne');
$_smarty_tpl->tpl_vars['ligne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->do_else = false;
?>
                        <tr>
                                                        <td><a href="./details/<?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_groupe'];?>
">Détails</a></td>
                            <td class="text-info font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_groupe'];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['departement'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_type'];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_style'];?>
</td>                             <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['annee_creation'];?>
</td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['presentation'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value['experience'];?>
</td> 
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </section>
        </main>
<?php
}
}
/* {/block "content"} */
}
