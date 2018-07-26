
			<div class="row">
				{foreach from=$debug_datas item=d}
					<div class="col-lg-4">
						<div class="ibox">
							<div class="ibox-title">
								<span class="label label-primary float-right">line Debug {$d["line"]}</span>
								<h5>{$d["file"]}</h5>
							</div>
							<div class="ibox-content">
								<h4>Description</h4>
								<p>
									{$d["msg"]}
								</p>
							</div>
						</div>
					</div>
				{/foreach}
			</div>
		</div>
	    <script src="{$base_dir}js/jquery-3.1.1.min.js"></script>
	    <script src="{$base_dir}js/popper.min.js"></script>
	    <script src="{$base_dir}js/bootstrap.js"></script>
	    <script src="{$base_dir}js/plugins/metisMenu/jquery.metisMenu.js"></script>
	    <script src="{$base_dir}js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	    <!-- Custom and plugin javascript -->
	    <script src="{$base_dir}js/inspinia.js"></script>
	    <script src="{$base_dir}js/plugins/pace/pace.min.js"></script>


	    <script>
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
		</script>
		<iframe src="https://discordapp.com/widget?id=469129267654033408&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
	</body>
</html>
