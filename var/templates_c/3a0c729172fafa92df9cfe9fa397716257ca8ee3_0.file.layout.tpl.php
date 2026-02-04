<?php
/* Smarty version 4.5.6, created on 2026-02-04 14:33:31
  from '/var/www/html/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_698358bb93fe35_29858495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0c729172fafa92df9cfe9fa397716257ca8ee3' => 
    array (
      0 => '/var/www/html/templates/layout.tpl',
      1 => 1770215546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_698358bb93fe35_29858495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'Blog' ?? null : $tmp);?>
</title>
</head>
<body>

<header>
    <h1><a href="/">Blog</a></h1>
</header>

<main>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_730845665698358bb93f065_57415445', "content");
?>

</main>


</body>
</html>
<?php }
/* {block "content"} */
class Block_730845665698358bb93f065_57415445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_730845665698358bb93f065_57415445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
