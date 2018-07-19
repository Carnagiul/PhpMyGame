<?php
/* Smarty version 3.1.33-dev-5, created on 2018-07-19 02:46:41
  from '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5b4fdf716f2fc5_34553026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41de87becf10db5fd4de6056851652068425af3' => 
    array (
      0 => '/Users/tonpeyre/Documents/tw/PhpMyGame/templates/default/footer.tpl',
      1 => 1531961196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4fdf716f2fc5_34553026 (Smarty_Internal_Template $_smarty_tpl) {
?>		</div>
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
