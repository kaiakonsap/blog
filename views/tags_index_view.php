<table class="table table-bordered">

	<?if (isset($tags)):foreach($tags as $tag):?>
		<tr class='well'>
			<td><h4><strong><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><?=$tag['tag_name']?></a></strong></h4></td>
		<td><?=$tag['mycount']?></td>
		</tr>
	<?endforeach;endif?>
</table>