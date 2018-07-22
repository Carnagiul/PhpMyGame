<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-23 00:39:02
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b55078615b8c1_77702842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79930c605c643d7afc01327efaf86d4a1c643ef0' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/visitor/register.tpl',
      1 => 1532299136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55078615b8c1_77702842 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Connection au site</h5>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"></h3>
                    <p>Inscrit toi aujourd'hui et rejoind l'expérience.</p>
                    <form role="form" method="post" action="index.php?p=Register">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="Entrer votre email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Pseudo</label>
                            <input type="text" placeholder="Entrer votre pseudo" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Entrer votre mot de passe" name="password" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>S'inscrire</strong></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6"><h4>Déjà inscrit ?</h4>
                    <p>Vous pouvez vous connecter ici :</p>
                    <p class="text-center">
                        <a href="index.php?p=Login"><i class="fa fa-sign-in big-icon"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
