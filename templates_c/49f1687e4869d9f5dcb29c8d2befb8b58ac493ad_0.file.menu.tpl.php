<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-26 19:03:48
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/game/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b59fef4acd9c5_90189806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49f1687e4869d9f5dcb29c8d2befb8b58ac493ad' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/game/menu.tpl',
      1 => 1532622429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b59fef4acd9c5_90189806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/tonpeyre/Documents/tw/PhpMyGame/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
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
                            <span class="block m-t-xs font-bold"><?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
</span>
                            <span class="text-muted text-xs block"> <?php echo $_smarty_tpl->tpl_vars['user']->value->getRank();?>
 <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        PMG
                    </div>
                </li>
                <li>
                    <a href="index.php?p=home"><i class="fa fa-th-large"></i> <span class="nav-label"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['lang']->value["node_name"]);?>
</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.php?p=Buildings">Les Bátiments</a></li>
                        <li><a href="index.php?p=Storage">Les Ressources</a></li>
						<li><a href="index.php?p=Baracks">Caserne</a></li>
						<li><a href="index.php?p=Stable">Ecurie</a></li>
						<li><a href="index.php?p=Workshop">Atelier</a></li>
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
	                <li class="dropdown">
	                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
	                    </a>
	                    <ul class="dropdown-menu dropdown-messages">
	                        <li>
	                            <div class="dropdown-messages-box">
	                                <a class="dropdown-item float-left" href="profile.html">
	                                    <img alt="image" class="rounded-circle" src="../img/a7.jpg">
	                                </a>
	                                <div class="media-body">
	                                    <small class="float-right">46h ago</small>
	                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
	                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="dropdown-divider"></li>
	                        <li>
	                            <div class="dropdown-messages-box">
	                                <a class="dropdown-item float-left" href="profile.html">
	                                    <img alt="image" class="rounded-circle" src="../img/a4.jpg">
	                                </a>
	                                <div class="media-body ">
	                                    <small class="float-right text-navy">5h ago</small>
	                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
	                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="dropdown-divider"></li>
	                        <li>
	                            <div class="dropdown-messages-box">
	                                <a class="dropdown-item float-left" href="profile.html">
	                                    <img alt="image" class="rounded-circle" src="../img/profile.jpg">
	                                </a>
	                                <div class="media-body ">
	                                    <small class="float-right">23h ago</small>
	                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
	                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="dropdown-divider"></li>
	                        <li>
	                            <div class="text-center link-block">
	                                <a href="mailbox.html" class="dropdown-item">
	                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
	                                </a>
	                            </div>
	                        </li>
	                    </ul>
	                </li>
	                <li class="dropdown">
	                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
	                    </a>
	                    <ul class="dropdown-menu dropdown-alerts">
	                        <li>
	                            <a href="mailbox.html" class="dropdown-item">
	                                <div>
	                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
	                                    <span class="float-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="dropdown-divider"></li>
	                        <li>
	                            <a href="profile.html" class="dropdown-item">
	                                <div>
	                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
	                                    <span class="float-right text-muted small">12 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="dropdown-divider"></li>
	                        <li>
	                            <a href="grid_options.html" class="dropdown-item">
	                                <div>
	                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
	                                    <span class="float-right text-muted small">4 minutes ago</span>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="dropdown-divider"></li>
	                        <li>
	                            <div class="text-center link-block">
	                                <a href="notifications.html" class="dropdown-item">
	                                    <strong>See All Alerts</strong>
	                                    <i class="fa fa-angle-right"></i>
	                                </a>
	                            </div>
	                        </li>
	                    </ul>
	                </li>


	                <li>
	                    <a href="index.php?p=Logout">
	                        <i class="fa fa-sign-out"></i> Log out
	                    </a>
	                </li>
	            </ul>
	        </nav>
	    </div>
		<div class="row">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NodeRess']->value, 'ress');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ress']->value) {
?>

			<div class="col-lg-6">
				<div class="widget navy-bg p-lg text-center">
					<div class="m-b-md">
						<h1 class="m-xs"><?php echo $_smarty_tpl->tpl_vars['ress']->value->getName();?>
</h1>
						<h3 class="font-bold no-margins m-xs">
                            <?php echo $_smarty_tpl->tpl_vars['ress']->value->getRessAmount();?>
 / <?php echo $_smarty_tpl->tpl_vars['ress']->value->getRessStorage();?>

						</h3>
						<small><?php echo $_smarty_tpl->tpl_vars['ress']->value->getRessProduction();?>
 / s</small>
					</div>
				</div>
			</div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
<?php }
}
