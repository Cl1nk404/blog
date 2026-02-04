<?php
/* Smarty version 4.5.6, created on 2026-02-04 15:23:23
  from '/var/www/html/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6983646be87663_69091981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a9a57fd920a50a8eaa8b6ed058c1db99dee6dc' => 
    array (
      0 => '/var/www/html/templates/home.tpl',
      1 => 1770218575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6983646be87663_69091981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10653678966983646be24182_03443175', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_10653678966983646be24182_03443175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10653678966983646be24182_03443175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Categories</h2>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <section>
            <h3><?php echo htmlspecialchars((string) (htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value['category']->name, ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8');?>
</h3>

            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <li>
                        <a href="/post/<?php echo htmlspecialchars((string) (htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->id, ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) (htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <a href="/category/<?php echo htmlspecialchars((string) (htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value['category']->id, ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8');?>
">
                All articles 
            </a>

            <hr>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "content"} */
}
