<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-22 17:02:59
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b549ca3ce67b3_34727881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec03f70331a59ed67ea88e1069e77ea23f97dc7' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/login.tpl',
      1 => 1532271645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b549ca3ce67b3_34727881 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">

                        <div class="col-lg-6 b-r-lg">
                            <h3 class="m-t-none m-b">Se connecter</h3>
                            <form role="form" method="post" action="index.php?p=Login">
                                <div class="form-group"><label>Username</label> <input type="text" name="name" placeholder="Entrer votre username" class="form-control"></div>
                                <div class="form-group"><label>Password</label> <input type="password" name="password" placeholder="Password" class="form-control"></div>
                                <div>
                                    <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>Se connecter</strong></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h4>Pas encore inscrit?</h4>
                            <p>Cela ce passe ici:</p>
                            <p class="text-center">
                                <a href="index.php?p=Register"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
