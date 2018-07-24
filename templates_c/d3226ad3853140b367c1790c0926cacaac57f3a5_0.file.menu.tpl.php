<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-23 01:00:23
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b550c87aa4981_10612724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3226ad3853140b367c1790c0926cacaac57f3a5' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/menu.tpl',
      1 => 1532300420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b550c87aa4981_10612724 (Smarty_Internal_Template $_smarty_tpl) {
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
