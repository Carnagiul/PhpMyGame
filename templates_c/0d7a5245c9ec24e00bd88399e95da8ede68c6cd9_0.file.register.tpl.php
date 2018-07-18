<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-18 23:28:36
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b4fb104170b09_90393268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7a5245c9ec24e00bd88399e95da8ede68c6cd9' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/register.tpl',
      1 => 1531949314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4fb104170b09_90393268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'register'), 0, true);
?>

<form>
	Formulaire Magueule
</form>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
