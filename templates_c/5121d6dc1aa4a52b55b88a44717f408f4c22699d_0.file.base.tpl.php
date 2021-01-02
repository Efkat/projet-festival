<?php
/* Smarty version 3.1.36, created on 2021-01-02 09:25:12
  from 'C:\laragon\www\projet-festival\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff03bf8ea7504_51549371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5121d6dc1aa4a52b55b88a44717f408f4c22699d' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\base.tpl',
      1 => 1609579481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff03bf8ea7504_51549371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./styles/style.css">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17409385795ff03bf8ea4421_62142802', "title");
?>
</title>
</head>
<body>
    <header class="container-fluid border-bottom">
        <h1 class="text-center my-4 text-primary">🎸 Good Rockin' Festival 🎸</h1>
    </header>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8816328315ff03bf8ea6dd1_30663599', "content");
?>

    <footer class="footer-page font-small blue pt-4 border-top">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Good Rockin' Festival</h5>
                    <p>Projet du module de Programmation Web Côté Serveur consistant à gérer les inscriptions des groupes à un festival.</p>

                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="https://github.com/Efkat" target="_blank">GitHub Hugo Benabdelhak</a>
                        </li>
                        <li>
                            <a href="https://github.com/NinoLS" target="_blank">GitHub Nino Belic</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3 border-top">© 2020 - Hugo Benabdelhak & Nino Belic</div>
    </footer>
</body>
</html><?php }
/* {block "title"} */
class Block_17409385795ff03bf8ea4421_62142802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17409385795ff03bf8ea4421_62142802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_8816328315ff03bf8ea6dd1_30663599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8816328315ff03bf8ea6dd1_30663599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        Default content
    <?php
}
}
/* {/block "content"} */
}
