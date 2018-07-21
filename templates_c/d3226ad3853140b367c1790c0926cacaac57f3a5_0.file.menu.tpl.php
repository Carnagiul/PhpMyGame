<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-21 17:10:15
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b534cd75ad226_48663246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3226ad3853140b367c1790c0926cacaac57f3a5' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/menu.tpl',
      1 => 1532185808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b534cd75ad226_48663246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<img alt="image" class="rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['tpl']->value;?>
/img/profile_small.jpg"/>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="block m-t-xs font-bold">???</span>
						<span class="text-muted text-xs block"> Visitor <b class="caret"></b></span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a class="dropdown-item" href="profile.html">Login</a></li>
						<li><a class="dropdown-item" href="contacts.html">Register</a></li>
						<li><a class="dropdown-item" href="mailbox.html">Contact</a></li>
					</ul>
				</div>
				<div class="logo-element">
					PMG
				</div>
			</li>
			<li>
				<a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="index.html">Dashboard v.1</a></li>
					<li><a href="dashboard_2.html">Dashboard v.2</a></li>
					<li><a href="dashboard_3.html">Dashboard v.3</a></li>
					<li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
					<li><a href="dashboard_5.html">Dashboard v.5 </a></li>
				</ul>
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
					<a href="login.html">
						<i class="fa fa-sign-out"></i> Connect
					</a>
				</li>
			</ul>
		</nav>
	</div>
<?php }
}
