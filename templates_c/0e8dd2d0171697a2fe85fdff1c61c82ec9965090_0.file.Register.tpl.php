<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-23 00:34:03
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b55065b3ccaf6_53547348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8dd2d0171697a2fe85fdff1c61c82ec9965090' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/Register.tpl',
      1 => 1532298741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55065b3ccaf6_53547348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Register'), 0, true);
if ($_smarty_tpl->tpl_vars['is_in_game']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/game/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'home'), 0, true);
}
if ($_smarty_tpl->tpl_vars['is_in_game']->value == false) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/visitor/register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'home'), 0, true);
}
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
