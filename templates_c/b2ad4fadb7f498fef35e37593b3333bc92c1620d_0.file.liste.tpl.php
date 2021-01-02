<?php
/* Smarty version 3.1.36, created on 2021-01-02 17:02:29
  from 'C:\laragon\www\projet-festival\templates\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff0a725646b46_29501539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ad4fadb7f498fef35e37593b3333bc92c1620d' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\liste.tpl',
      1 => 1609606945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff0a725646b46_29501539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6520307715ff0a7256347f3_56871303', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7344931265ff0a725635b85_66265728', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_6520307715ff0a7256347f3_56871303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6520307715ff0a7256347f3_56871303',
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
class Block_7344931265ff0a725635b85_66265728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7344931265ff0a725635b85_66265728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="./styles/style.css">
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
                            <td>
                            <a style="padding-right:10px;" href="./delete/<?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_groupe'];?>
/check">🗑️</a>
                            <a style="padding-right:10px;" href="./c_edit/<?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_groupe'];?>
">🖊️</a>
                            <a href="./details/<?php echo $_smarty_tpl->tpl_vars['ligne']->value['nom_groupe'];?>
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
