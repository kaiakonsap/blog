<table class="table table-bordred">
	<?if (isset($posts)):foreach($posts as $post):?>
	<thead>
	<tr>
		<th>
			<h2>
				<a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a>
			</h2>
	   </th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td> <?=$post['post_text']?></td>
		<td>&nbsp</td>
	</tr>
	</tbody>
	<?endforeach;endif?>
</table>