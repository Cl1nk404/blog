<?php
/* Smarty version 4.5.6, created on 2026-02-02 17:55:12
  from 'C:\Users\Игорь\Desktop\Порно компания\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6980e5006192a1_39083171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3a7c3dca1ba8381780d433ca3135a22efbcae4' => 
    array (
      0 => 'C:\\Users\\Игорь\\Desktop\\Порно компания\\templates\\layout.tpl',
      1 => 1770054855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6980e5006192a1_39083171 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1><a href="/">My Blog</a></h1>
</header>

<main>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6139312156980e500618a71_83624605', "content");
?>

</main>

<footer>
    <hr>
    <p>© Blog</p>
</footer>

</body>
</html>
<?php }
/* {block "content"} */
class Block_6139312156980e500618a71_83624605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6139312156980e500618a71_83624605',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
