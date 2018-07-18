<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-18 16:10:45
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b4f4a65918724_57427618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd630cb378f68f2762162d68d473e3c6407b03b72' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/index.tpl',
      1 => 1531923044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4f4a65918724_57427618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/tonpeyre/Documents/tw/PhpMyGame/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/Users/tonpeyre/Documents/tw/PhpMyGame/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'home'), 0, true);
?>

<PRE>

    <?php if ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bold')) {?><b><?php }?>
        Title: <?php echo smarty_modifier_capitalize($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'));?>

        <?php if ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bold')) {?></b><?php }?>

    The current date and time is <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>


    The value of global assigned variable $SCRIPT_NAME is <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>


    Example of accessing server environment variable SERVER_NAME: <?php echo $_SERVER['SERVER_NAME'];?>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
