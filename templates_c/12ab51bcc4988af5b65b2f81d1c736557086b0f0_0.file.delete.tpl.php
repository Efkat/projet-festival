<?php
/* Smarty version 3.1.36, created on 2021-01-02 10:41:20
  from 'C:\laragon\www\projet-festival\templates\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff04dd097fa85_96815483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12ab51bcc4988af5b65b2f81d1c736557086b0f0' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\delete.tpl',
      1 => 1609584079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff04dd097fa85_96815483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7458537645ff04dd0978140_60161802', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14048484815ff04dd0978d48_21753608', "content");
?>
    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_7458537645ff04dd0978140_60161802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7458537645ff04dd0978140_60161802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Supprimer
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_14048484815ff04dd0978d48_21753608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14048484815ff04dd0978d48_21753608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="../../styles/style.css">
        <main>
            <h1>Supprimer </h1>
            <section>
                <table>
                    <tr class="border-bottom border-primary font-italic">
                        <td class="text-info font-weight-bold"><u>Nom Groupe</u></td>                         <td><u>Département</u></td>
                        <td><u>Scène</u></td>                         <td><u>Style</u></td>                         <td><u>Année Création</u></td> 
                        <td><u>Présentation</u></td>
                        <td><u>Expérience</u></td> 
                    </tr>

                    <tr>
                        <td class="text-info font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
</td>                         <td><?php echo $_smarty_tpl->tpl_vars['candidature']->value['departement'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_type'];?>
</td>                         <td><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_style'];?>
</td>                         <td><?php echo $_smarty_tpl->tpl_vars['candidature']->value['annee_creation'];?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['candidature']->value['presentation'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['candidature']->value['experience'];?>
</td> 
                    </tr>
                </table>

                <div class="container w-75 mx-auto my-5">
                    <h3 class="text-danger text-center">Voulez-vous vraiment supprimer cette candidature?</h3>
                    <div class="container text-center">
                        <a href="./drop" class="btn btn-danger btn-lg">Oui</a>
                        <a href="../../liste" class="btn btn-light btn-lg border border-danger text-danger">Non</a>
                    </div>

                </div>
            </section>
        </main>
<?php
}
}
/* {/block "content"} */
}
