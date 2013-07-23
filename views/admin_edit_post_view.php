<script type="text/javascript" src="<?= ASSETS_URL ?>js\vendor\bootstrap.js"></script>
<script type="text/javascript" src="<?= ASSETS_URL ?>js\vendor\bootstrap-prompts-alert.js"></script>
<script type="text/javascript">
	function check(){
		if(!$('#comment_text').val()){
			alert('Sa ei kommenteerinud ju!!');
			return false;
		}
	}
</script>
<form method="POST">
	<input type="text" name="change_subject" value="<?= $post['post_subject'] ?>"/>
	 <textarea name="change_text" rows="7" class="span7"><?= $post['post_text'] ?></textarea>
	<button type="submit" class="btn btn-primary">Save changes</button>
<a	href="<?=BASE_URL?>admin/index" ><button type="button" class="btn">Cancel</button></a>
</form>

