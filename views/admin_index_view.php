<script type="text/javascript" src="<?= ASSETS_URL ?>js\vendor\bootstrap.js"></script>
<script type="text/javascript" src="<?= ASSETS_URL ?>js\vendor\bootstrap-prompts-alert.js"></script>
<script type="text/javascript">
	function check(){
		if(!$('#post_text').val() && !$('#post_title').val()){
			alert('Postitus on poolik');
			return false;
		}
	}
</script>
<form method="POST" id="new_post">
	<input type="text" name="post_title" id="title"/>
	<textarea name="post_text" id="post_text" cols="100" rows="5" style="width: auto"></textarea>
	<a href="#" id="tags" onclick="add_tags()">Lisa tage</a><p>Eralda nad komadega</p>
	<button type="submit" onclick="return check()">Submit
	</button>
</form>
<?if (isset($posts)):foreach($posts as $post):?>

	<div class="row" id="post<?=$post['post_id']?>">
		<div class="span8">
			<div class="row">
				<div class="span8">
					<h4><strong><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></strong></h4>
				</div>
			</div>
			<div class="row">
				<div class="span2">
					<a href="#" class="thumbnail">
						<img src="http://placehold.it/260x180" alt="">
					</a>
				</div>
				<div class="span6">
					<p>
						<?=$post['post_text']?>
					</p>
					<ul class="inline">
					<li><a class="btn" href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>">Read more</a></li>
					<li><a class="btn" href="<?=BASE_URL?>admin/edit_post/<?=$post['post_id']?>">Edit post</a></li>
					<li><a class="btn" href="#" onclick="delete_post(<?=$post['post_id']?>)">Delete post</a></li>

					</ul>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p></p>
					<p>
						<i class="icon-user"></i> by <a href="<?=BASE_URL?>users/view/<?=$post['user_id']?>"><?=$post['username']?></a>
						| <i class="icon-calendar"></i> <?=$post['post_time']?>
						| <i class="icon-comment"></i> <a href="#"><?=$post['comment_count']?> Comments</a>
						| <i class="icon-share"></i> <a href="#">39 Shares</a>
						| <i class="icon-tags"></i> Tags :
						<?if( isset($tags[$post['post_id']])):
							foreach($tags[$post['post_id']] as $tag):?>
								<a href="<?=BASE_URL?>tags/view/<?=$tag?>"><span class="label
							label-info"><?=$tag?></span></a>
							<?endforeach;endif?>
					</p>
				</div>
			</div>
		</div>
	</div>

<?endforeach;endif?>
