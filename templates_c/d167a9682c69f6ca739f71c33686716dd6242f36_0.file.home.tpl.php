<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-21 17:11:56
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b534d3cd97510_85544393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd167a9682c69f6ca739f71c33686716dd6242f36' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/home.tpl',
      1 => 1532185915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b534d3cd97510_85544393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/tonpeyre/Documents/tw/PhpMyGame/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/Users/tonpeyre/Documents/tw/PhpMyGame/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<PRE>
    You need to connect in the game
    <?php if ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bold')) {?><b><?php }?>
        Title: <?php echo smarty_modifier_capitalize($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'));?>

        <?php if ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bold')) {?></b><?php }?>

    The current date and time is <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>


    The value of global assigned variable $SCRIPT_NAME is <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>


    Example of accessing server environment variable SERVER_NAME: <?php echo $_SERVER['SERVER_NAME'];?>

</PRE><?php }
}
