<?if (isset($tags)):foreach($tags as $tag):?>

	<div class="row">
		<div class="span8">
			<h4><strong><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><?=$tag['tag_name']?></a></strong></h4>
		</div>
	</div>
<?endforeach;endif?>