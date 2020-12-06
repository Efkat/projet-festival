<?php
/* Smarty version 3.1.36, created on 2020-12-06 17:55:13
  from 'C:\laragon\www\projet-festival\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcd1b018221b0_41236797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83000a8e566d7f4ebb8dce9eaa69519da065dec3' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\details.tpl',
      1 => 1607277305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd1b018221b0_41236797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2977888575fcd1b01810306_27288985', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16129213575fcd1b01810f10_36694671', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_2977888575fcd1b01810306_27288985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2977888575fcd1b01810306_27288985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Détails
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_16129213575fcd1b01810f10_36694671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16129213575fcd1b01810f10_36694671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
            <h1>Détails</h1>
            <section>
                    <h3>
                        <section>
                            <dl>
                                <dt>Nom Groupe</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
</dd>

                                <dt>Département</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['departement'];?>
</dd>

                                <dt>Style</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_style'];?>
</dd>

                                <dt>Scène</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_type'];?>
</dd>

                                <dt>Année de Création</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['annee_creation'];?>
</dd>

                                <dt>Présentation</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['presentation'];?>
</dd>

                                <dt>Expérience</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['experience'];?>
</dd>

                                <dt>Site Web</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['site_web'];?>
</dd>

                                <dt>Soundcloud</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['soundcloud'];?>
</dd>

                                <dt>Youtube</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['youtube'];?>
</dd>

                                <dt>Statut Association</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['statut_assoc'];?>
</dd>

                                <dt>Sacem</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['is_sacem'];?>
</dd>

                                <dt>Producteur</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['have_producer'];?>
</dd>

                                <dt>Membres</dt>
                                <dd>
                                    <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membres']->value, 'membre');
$_smarty_tpl->tpl_vars['membre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['membre']->value) {
$_smarty_tpl->tpl_vars['membre']->do_else = false;
?>
                                        <li>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[0];?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[1];?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[2];?>
</p>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                
                                </dd>


                                
                                                            </dl>
                            

                        </section>
                    </h3>
            </section>

            
        </main>   
<?php
}
}
/* {/block "content"} */
}
