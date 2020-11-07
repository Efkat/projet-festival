<?php
/* Smarty version 3.1.36, created on 2020-11-07 23:19:41
  from 'C:\laragon\www\projet-festival\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa72b8d996ae9_25520803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83000a8e566d7f4ebb8dce9eaa69519da065dec3' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\details.tpl',
      1 => 1604791161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa72b8d996ae9_25520803 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <meta charset="UTF-8">
        <title>Details</title>

    </head>
    <body>
        <header>

        
        </header> 
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
                                <dd><?php echo $_smarty_tpl->tpl_vars['candidature']->value['membres'];?>
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
