<?php
/* Smarty version 3.1.36, created on 2020-12-14 20:57:48
  from 'C:\laragon\www\projet-festival\templates\c_consulter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd7d1cc7424f7_31558428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b00a547971617c753e13ccd3b775defe4595d69' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\c_consulter.tpl',
      1 => 1607979467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd7d1cc7424f7_31558428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5401562385fd7d1cc725795_26653348', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8920092305fd7d1cc7268b0_26554376', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_5401562385fd7d1cc725795_26653348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5401562385fd7d1cc725795_26653348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Consulter Candidature
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_8920092305fd7d1cc7268b0_26554376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8920092305fd7d1cc7268b0_26554376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main>
        <div class="jumbotron  w-75 mx-auto">
            <h1 class="display-5 text-center">Consultation de la candidature</h1>
            <p class="lead fs-1 text-center"><?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
</p>
            <hr class="my-4">
            <div class="d-flex justify-content-around">
                <img src="./data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['images']->value[1]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['images']->value[1]['format'];?>
" style="width:250px;">
                <img src="./data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
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
                        <audio controls src="./data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
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
                    <audio controls src="./data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
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
                        <audio controls src="./data/<?php echo $_smarty_tpl->tpl_vars['candidature']->value['nom_groupe'];?>
/<?php echo $_smarty_tpl->tpl_vars['pistes']->value[3]['nom_fichier'];?>
.<?php echo $_smarty_tpl->tpl_vars['pistes']->value[3]['format'];?>
"></audio>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            <dl class="w-75 mx-auto text-center">
                                <dt class="">Département</dt>
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
                                        <li class="card w-25">
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[0];?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[1];?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[2];?>
</p>
                                        </li>
                                        <li>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[0];?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[1];?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['membre']->value[2];?>
</p>
                                        </li>
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
        </div>
            <h1 class="text-center"></h1>
            <section>

                <h3>
                    <section>
                        
                            

                    </section>
                 </h3>
                 

            </section>

            
        </main>   
<?php
}
}
/* {/block "content"} */
}
