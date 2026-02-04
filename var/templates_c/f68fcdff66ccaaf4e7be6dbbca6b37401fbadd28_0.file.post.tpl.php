<?php
/* Smarty version 4.5.6, created on 2026-02-04 14:26:35
  from '/var/www/html/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6983571beb5c63_87626187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68fcdff66ccaaf4e7be6dbbca6b37401fbadd28' => 
    array (
      0 => '/var/www/html/templates/post.tpl',
      1 => 1770122763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6983571beb5c63_87626187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1283000496983571bea1ad7_42758762', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_1283000496983571bea1ad7_42758762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1283000496983571bea1ad7_42758762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <article>
        <h2><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h2>

        <p><em>Просмотров: <?php echo $_smarty_tpl->tpl_vars['post']->value->views;?>
</em></p>

        <p><?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>
</p>

        <div>
            <?php echo $_smarty_tpl->tpl_vars['post']->value->text;?>

        </div>
    </article>

    <hr>

    <h3>Похожие статьи</h3>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['similarPosts']->value) === 0) {?>
        <p>Нет похожих статей</p>
    <?php } else { ?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['similarPosts']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li>
                    <a href="/post/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }
}
}
/* {/block "content"} */
}
