<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-20 20:10:24
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/Buildings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b5225901dc703_95862635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ad1a13ab097352d23d35e693e2223b6095d8ec' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/Buildings.tpl',
      1 => 1532109951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5225901dc703_95862635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Buildings'), 0, true);
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
							<button class="btn-success">Construire</button>
						</div>
						<div class="col-lg-4">
							<button class="btn-info">Info</button>
						</div>
						<div class="col-lg-4">
							<button class="btn-warning">Démolire</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Buildings'), 0, true);
}
}
