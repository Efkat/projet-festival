<?php
/* Smarty version 3.1.36, created on 2020-11-02 17:18:05
  from 'C:\laragon\www\projet-festival\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa03f4d790eb9_04153526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83000a8e566d7f4ebb8dce9eaa69519da065dec3' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\details.tpl',
      1 => 1604162179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa03f4d790eb9_04153526 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Détails</title>
    </head>
    <main>
        <header>
            
        </header>
        <body>
            <dl>
                                <dt>nom_groupe</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[0];?>
</dd> 

                <dt>id_departement</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
</dd>

                <dt>id_scene</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[2];?>
</dd>

                <dt>id_representant</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[3];?>
</dd>

                <dt>id_style</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[4];?>
</dd>

                <dt>annee_creation</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[5];?>
</dd>

                <dt>presentation</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[6];?>
</dd>

                <dt>experience</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[7];?>
</dd>
                
                <dt>site_web</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[8];?>
</dd>

                <dt>soundcloud</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[9];?>
</dd>
                
                <dt>youtube</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[10];?>
</dd>

                <dt>statut_assoc</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[11];?>
</dd>
                
                <dt>is_sacem</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[12];?>
</dd>

                <dt>have_producteur</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[13];?>
</dd>

                <dt>membres</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['ligne']->value[14];?>
</dd>

            </dl>
            

        </body>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </main>




</html><?php }
}
