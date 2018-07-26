<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-26 13:21:27
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/Buildings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b59aeb7598d66_80683713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ad1a13ab097352d23d35e693e2223b6095d8ec' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/Buildings.tpl',
      1 => 1532604071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b59aeb7598d66_80683713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Buildings'), 0, true);
if ($_smarty_tpl->tpl_vars['is_in_game']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/game/buildings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Buildings'), 0, true);
}
if ($_smarty_tpl->tpl_vars['is_in_game']->value == false) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/visitor/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'home'), 0, true);
}
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Buildings'), 0, true);
}
}
