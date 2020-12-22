<?php
/* Smarty version 3.1.36, created on 2020-12-22 17:02:49
  from 'C:\laragon\www\projet-festival\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe226b9473051_47513311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83000a8e566d7f4ebb8dce9eaa69519da065dec3' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\details.tpl',
      1 => 1608656568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe226b9473051_47513311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1604890815fe226b9456703_07299455', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14524085875fe226b9457611_68178781', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "title"} */
class Block_1604890815fe226b9456703_07299455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1604890815fe226b9456703_07299455',
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
class Block_14524085875fe226b9457611_68178781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14524085875fe226b9457611_68178781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                                    <ul class="card w-25 mx-auto mt-3 text-left">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membres']->value, 'membre');
$_smarty_tpl->tpl_vars['membre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['membre']->value) {
$_smarty_tpl->tpl_vars['membre']->do_else = false;
?>
                                        <li >
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
