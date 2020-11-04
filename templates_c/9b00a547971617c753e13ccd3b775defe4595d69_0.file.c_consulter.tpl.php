<?php
/* Smarty version 3.1.36, created on 2020-11-04 20:58:27
  from 'C:\laragon\www\projet-festival\templates\c_consulter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa315f3ceada0_11492490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b00a547971617c753e13ccd3b775defe4595d69' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\c_consulter.tpl',
      1 => 1604519653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa315f3ceada0_11492490 (Smarty_Internal_Template $_smarty_tpl) {
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

                                <?php if ($_smarty_tpl->tpl_vars['name']->value != null) {?>
                    <h3>
                        <section>
                            <dl>
                                <dt>Nom Groupe</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[0];?>
</dd>

                                <dt>Département</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
</dd>

                                <dt>Style</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[2];?>
</dd>

                                <dt>Scène</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[3];?>
</dd>

                                <dt>Année de Création</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[4];?>
</dd>

                                <dt>Présentation</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[5];?>
</dd>

                                <dt>Expérience</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[6];?>
</dd>

                                <dt>Site Web</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[7];?>
</dd>

                                <dt>Soundcloud</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[8];?>
</dd>

                                <dt>Youtube</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[9];?>
</dd>

                                <dt>Statut Association</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[10];?>
</dd>

                                <dt>Sacem</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[11];?>
</dd>

                                <dt>Producteur</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[12];?>
</dd>

                                <dt>Membres</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[13];?>
</dd>

                                <dt>Fiche Technique</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[14];?>
</dd>

                                <dt>Sacem</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[15];?>
</dd>



                                
                                <dt>Image</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[16];?>
</dd>

                                <dt>Piste 1</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[17];?>
</dd>

                                <dt>Piste 2</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[18];?>
</dd>

                                <dt>Piste 3</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[19];?>
</dd>

                            </dl>
                            

                        </section>
                    </h3>
                    
                    
                    
                <?php }?>


            </section>

            
        </main>   
        <footer>

            
        </footer>

    </body>

</html><?php }
}
