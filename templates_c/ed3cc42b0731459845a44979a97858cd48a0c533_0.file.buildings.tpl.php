<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-26 19:03:48
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/game/buildings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b59fef4b0bcc9_51443153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed3cc42b0731459845a44979a97858cd48a0c533' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/game/buildings.tpl',
      1 => 1532604880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b59fef4b0bcc9_51443153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buildings']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-title">
                    <span class="label label-primary float-right"><?php echo $_smarty_tpl->tpl_vars['b']->value->getActualLevel();?>
</span>
                    <h5><?php echo $_smarty_tpl->tpl_vars['b']->value->getName();?>
</h5>
                </div>
                <div class="ibox-content">
                    <h4>Description</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['b']->value->getDescr();?>

                    </p>
                    <div>
                        <span>Evolution du Batiment:</span>
                        <div class="stat-percent"><?php echo ($_smarty_tpl->tpl_vars['b']->value->getActualLevel()/$_smarty_tpl->tpl_vars['b']->value->getMaxLevel())*100;?>
%</div>
                        <div class="progress progress-mini">
                            <div style="width: <?php echo ($_smarty_tpl->tpl_vars['b']->value->getActualLevel()/$_smarty_tpl->tpl_vars['b']->value->getMaxLevel())*100;?>
%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="row  m-t-sm">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b']->value->getCalcRess(), 'ress');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ress']->value) {
?>
                            <div class="col-sm-4">
                                <div class="font-bold"><?php echo $_smarty_tpl->tpl_vars['ress']->value->getName();?>
</div>
                                <?php echo $_smarty_tpl->tpl_vars['ress']->value->getRessAmount();?>

                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="ibox-footer">
                    <div class="row">
                        <div class="col-lg-4">
                            <a class="btn btn-success" href="index.php?p=BuildingsUpgrade&ajax=on&id=<?php echo $_smarty_tpl->tpl_vars['b']->value->getId();?>
">Construire</a>
                        </div>
                        <div class="col-lg-4">
                            <a class="btn btn-info" href="index.php?p=BuildingsInfo&ajax=on&id=<?php echo $_smarty_tpl->tpl_vars['b']->value->getId();?>
">Info</a>
                        </div>
                        <div class="col-lg-4">
                            <a class="btn btn-warning" href="index.php?p=BuildingsDowngrade&ajax=on&id=<?php echo $_smarty_tpl->tpl_vars['b']->value->getId();?>
">Démolire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
