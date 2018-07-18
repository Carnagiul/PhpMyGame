<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-19 00:58:00
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b4fc5f8d91558_72036497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97930c7ce908e74ffcccfacf14da58145bbdc32b' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/menu.tpl',
      1 => 1531954679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4fc5f8d91558_72036497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
?>


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Piquerue</span>
                            <span class="text-muted text-xs block"> Administrator <b class="caret"></b></span>
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
	                <li class="dropdown">
	                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
	                    </a>
	                    <ul class="dropdown-menu dropdown-messages">
	                        <li>
	                            <div class="dropdown-messages-box">
	                                <a class="dropdown-item float-left" href="profile.html">
	                                    <img alt="image" class="rounded-circle" src="img/a7.jpg">
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
	                                    <img alt="image" class="rounded-circle" src="img/a4.jpg">
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
	                                    <img alt="image" class="rounded-circle" src="img/profile.jpg">
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
	                    <a href="login.html">
	                        <i class="fa fa-sign-out"></i> Log out
	                    </a>
	                </li>
	            </ul>
	        </nav>
	    </div>
<?php }
}
