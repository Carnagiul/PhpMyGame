<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-26 19:03:48
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b59fef4a529d5_41721527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97930c7ce908e74ffcccfacf14da58145bbdc32b' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/menu.tpl',
      1 => 1532463626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b59fef4a529d5_41721527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
if ($_smarty_tpl->tpl_vars['is_in_game']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/game/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
}
if ($_smarty_tpl->tpl_vars['is_in_game']->value == false) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/visitor/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
}
}
}
