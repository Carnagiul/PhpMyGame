<?php
/* Smarty version 3.1.33-dev-5, created on 2018-08-10 12:40:55
  from '/var/www/html/AAA/templates/default/visitor/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b6d87d7954425_33306324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c510757bdf1c8f14814c89ca67c56d1baf541ae5' => 
    array (
      0 => '/var/www/html/AAA/templates/default/visitor/menu.tpl',
      1 => 1533904309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6d87d7954425_33306324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<img alt="image" class="rounded-circle" src="templates/<?php echo $_smarty_tpl->tpl_vars['tpl']->value;?>
/img/profile_small.jpg"/>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="block m-t-xs font-bold">???</span>
						<span class="text-muted text-xs block"> Visitor <b class="caret"></b></span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a class="dropdown-item" href="index.php?p=Login">Login</a></li>
						<li><a class="dropdown-item" href="index.php?p=Register">Register</a></li>
						<li><a class="dropdown-item" href="index.php">Home</a></li>
					</ul>
				</div>
				<div class="logo-element">
					PMG
				</div>
			</li>
			<li>
				<a href="index.php?p=Register"><i class="fa fa-th-large"></i> S'inscrire <span class="nav-label"></span></a>
				<a href="index.php?p=Login"><i class="fa fa-th-large"></i> Se connecter <span class="nav-label"></span></a>
				<a href="index.php?p=Home"><i class="fa fa-th-large"></i> Home <span class="nav-label"></span></a>
			</li>
		</ul>
	</div>
</nav>
<div id="page-wrapper" class="gray-bg">
	<div class="row border-bottom">
		<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
			</div>
			<ul class="nav navbar-top-links navbar-right">
				<li>
					<span class="m-r-sm text-muted welcome-message"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
				</li>
				<li>
					<a href="index.php?p=Login">
						<i class="fa fa-sign-out"></i> Connect
					</a>
				</li>
			</ul>
		</nav>
	</div>
<?php }
}
