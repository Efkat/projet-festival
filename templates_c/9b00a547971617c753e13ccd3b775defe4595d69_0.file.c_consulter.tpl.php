<?php
/* Smarty version 3.1.36, created on 2020-11-13 13:57:40
  from 'C:\laragon\www\projet-festival\templates\c_consulter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fae90d49d5431_24680421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b00a547971617c753e13ccd3b775defe4595d69' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\c_consulter.tpl',
      1 => 1605275659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fae90d49d5431_24680421 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <meta charset="UTF-8">
        <title>Candidature_Consulter</title>

    </head>
    <body>
        <header>

        
        </header> 
        <main>
            <h1>Consulter Candidature</h1>
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
        <footer>

            
        </footer>

    </body>

</html><?php }
}
