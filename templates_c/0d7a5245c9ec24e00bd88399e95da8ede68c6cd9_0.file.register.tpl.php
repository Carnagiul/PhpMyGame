<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-19 02:46:41
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b4fdf71692da8_18229135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7a5245c9ec24e00bd88399e95da8ede68c6cd9' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/register.tpl',
      1 => 1531961114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4fdf71692da8_18229135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'register'), 0, true);
?>
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value == false) {?>
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Connection au site</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"></h3>
                                <p>Inscrit toi aujourd'hui et rejoind l'expérience.</p>
                                <form role="form" method="post" action="index.php?p=register">
                                    <div class="form-group">
                                    	<label>Email</label>
                                    	<input type="email" placeholder="Entrer votre email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    	<label>Pseudo</label>
                                    	<input type="text" placeholder="Entrer votre pseudo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    	<label>Password</label>
                                    	<input type="password" placeholder="Entrer votre mot de passe" class="form-control">
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>S'inscrire</strong></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6"><h4>Déjà inscrit ?</h4>
                                <p>Vous pouvez vous connecter ici :</p>
                                <p class="text-center">
                                    <a href="index.php?p=connect"><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php } else { ?>
			Vous etes deja connecte au site
		<?php }?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
