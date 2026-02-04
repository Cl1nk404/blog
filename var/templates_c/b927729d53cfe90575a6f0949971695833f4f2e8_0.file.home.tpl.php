<?php
/* Smarty version 4.5.6, created on 2026-02-03 12:42:25
  from 'C:\Users\Игорь\Desktop\Порно компания\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6981ed31c6c458_55804641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b927729d53cfe90575a6f0949971695833f4f2e8' => 
    array (
      0 => 'C:\\Users\\Игорь\\Desktop\\Порно компания\\templates\\home.tpl',
      1 => 1770122535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6981ed31c6c458_55804641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3767544406981ed31c5f923_76943940', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_3767544406981ed31c5f923_76943940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3767544406981ed31c5f923_76943940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Категории</h2>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <section>
            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['category']->name;?>
</h3>

            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <li>
                        <a href="/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>

                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['category']->id;?>
">
                Все статьи →
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
