<?php
/* Smarty version 3.1.33-dev-5, created on 2018-08-10 12:40:55
  from '/var/www/html/AAA/templates/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b6d87d79a2929_28159365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85225d7b0e8f113ec4f830085b20b1fc29034883' => 
    array (
      0 => '/var/www/html/AAA/templates/default/footer.tpl',
      1 => 1533904308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6d87d79a2929_28159365 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<div class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['debug_datas']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
					<div class="col-lg-4">
						<div class="ibox">
							<div class="ibox-title">
								<span class="label label-primary float-right">line Debug <?php echo $_smarty_tpl->tpl_vars['d']->value["line"];?>
</span>
								<h5><?php echo $_smarty_tpl->tpl_vars['d']->value["file"];?>
</h5>
							</div>
							<div class="ibox-content">
								<h4>Description</h4>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['d']->value["msg"];?>

								</p>
							</div>
						</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/popper.min.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/plugins/metisMenu/jquery.metisMenu.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>

	    <!-- Custom and plugin javascript -->
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/inspinia.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>


	    <?php echo '<script'; ?>
>
	         $(document).ready(function(){

	             var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
	                 lineNumbers: true,
	                 matchBrackets: true,
	                 styleActiveLine: true,
	                 theme:"ambiance"
	             });

	             var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
	                 lineNumbers: true,
	                 matchBrackets: true,
	                 styleActiveLine: true
	             });

	        });
		<?php echo '</script'; ?>
>
		<iframe src="https://discordapp.com/widget?id=469129267654033408&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
	</body>
</html>
<?php }
}
