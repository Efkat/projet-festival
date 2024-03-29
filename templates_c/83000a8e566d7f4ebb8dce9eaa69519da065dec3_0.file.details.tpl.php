<?php
/* Smarty version 3.1.36, created on 2020-12-27 14:32:50
  from 'C:\laragon\www\projet-festival\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe89b12ee1355_92097803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83000a8e566d7f4ebb8dce9eaa69519da065dec3' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\details.tpl',
      1 => 1609079570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe89b12ee1355_92097803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19961582105fe89b12ec8559_22565711', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19937901285fe89b12ec90c3_82690387', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_19961582105fe89b12ec8559_22565711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19961582105fe89b12ec8559_22565711',
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
class Block_19937901285fe89b12ec90c3_82690387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19937901285fe89b12ec90c3_82690387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="../styles/style.css">
        <main>
        <div class="jumbotron  w-75 mx-auto">
            <h1 class="display-5 text-center">Détails Candidature</h1>
            <p class="lead fs-1 text-center"><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
</p>
            <hr class="my-4">
            <div class="d-flex justify-content-around">
                <img src="../data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['images']->value[1]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['images']->value[1]['format'];?>
" style="width:250px;">
                <img src="../data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['images']->value[2]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['images']->value[2]['format'];?>
" style="width:250px;" alt="pas d'image 2">
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-around">
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 1</p>
                    </div>
                    <div class="row">
                        <audio controls src="../data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['pistes']->value[1]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['pistes']->value[1]['format'];?>
"></audio>
                    </div>
                </div> 
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 2</p>
                    </div>
                    <div class="row">
                    <audio controls src="../data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['pistes']->value[2]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['pistes']->value[2]['format'];?>
"></audio>

                    </div>
                </div>
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 3</p>
                    </div>
                    <div class="row">
                        <audio controls src="../data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['pistes']->value[3]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['pistes']->value[3]['format'];?>
"></audio>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            <dl class="w-75 mx-auto text-center">
                                <dt class="h3 my-2">Département</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['departement'];?>
</dd>

                                <dt class="h3 my-2">Style</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_style'];?>
</dd>

                                <dt class="h3 my-2">Scène</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_type'];?>
</dd>

                                <dt class="h3 my-2">Année de Création</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['annee_creation'];?>
</dd>

                                <dt class="h3 my-2">Présentation</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['presentation'];?>
</dd>

                                <dt class="h3 my-2">Expérience</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['experience'];?>
</dd>

                                <dt class="h3 my-2">Site Web</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['site_web'];?>
</dd>

                                <?php if ($_smarty_tpl->tpl_vars['candidature']->value['soundcloud'] != '') {?>
                                    <dt  class="h3 my-2">Soundcloud</dt>
                                    <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['soundcloud'];?>
</dd>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['candidature']->value['youtube'] != '') {?>
                                    <dt class="h3  my-2">Youtube</dt>
                                    <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['youtube'];?>
</dd> 
                                <?php }?>
                                
                                <dt class="h3 my-2">Statut Association</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['statut_assoc'];?>
</dd>

                                <dt class="h3 my-2">Sacem</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['is_sacem'];?>
</dd>

                                <dt class="h3 my-2">Producteur</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['have_producer'];?>
</dd>

                                <dt class="h3 my-2">Membres</dt>
                                <dd>
                                    <ul class="d-flex flex-wrap">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membres']->value, 'membre');
$_smarty_tpl->tpl_vars['membre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['membre']->value) {
$_smarty_tpl->tpl_vars['membre']->do_else = false;
?>
                                        <li class="card w-25 mx-auto p-2 text-left">
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
        </div>
        </main>   
<?php
}
}
/* {/block "content"} */
}
