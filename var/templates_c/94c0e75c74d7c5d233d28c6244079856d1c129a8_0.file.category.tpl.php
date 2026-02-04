<?php
/* Smarty version 4.5.6, created on 2026-02-03 12:57:16
  from 'C:\Users\Игорь\Desktop\Порно компания\templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6981f0ac9a2133_05839334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c0e75c74d7c5d233d28c6244079856d1c129a8' => 
    array (
      0 => 'C:\\Users\\Игорь\\Desktop\\Порно компания\\templates\\category.tpl',
      1 => 1770123422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6981f0ac9a2133_05839334 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</h2>

<form method="get">
    <select name="sort" onchange="this.form.submit()">
        <option value="date" <?php if ($_smarty_tpl->tpl_vars['sort']->value === 'date') {?>selected<?php }?>>По дате</option>
        <option value="views" <?php if ($_smarty_tpl->tpl_vars['sort']->value === 'views') {?>selected<?php }?>>По просмотрам</option>
    </select>
</form>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <li>
            <a href="/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_assignInScope('pages', ceil($_smarty_tpl->tpl_vars['total']->value/$_smarty_tpl->tpl_vars['limit']->value));?>

<nav>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['i']->value === $_smarty_tpl->tpl_vars['page']->value) {?><strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</strong><?php } else {
echo $_smarty_tpl->tpl_vars['i']->value;
}?>
        </a>
    <?php }
}
?>
</nav>
<?php }
}
