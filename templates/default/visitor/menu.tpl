{config_load file="test.conf" section="setup"}
<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<img alt="image" class="rounded-circle" src="templates/{$tpl}/img/profile_small.jpg"/>
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
					<span class="m-r-sm text-muted welcome-message">{$title}</span>
				</li>
				<li>
					<a href="index.php?p=Login">
						<i class="fa fa-sign-out"></i> Connect
					</a>
				</li>
			</ul>
		</nav>
	</div>
