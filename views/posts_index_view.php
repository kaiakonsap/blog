<table style="" class="table table-striped">
	<?if (isset($posts)):foreach($posts as $post):?>
	<thead>
	<tr>
		<th style="padding-top: 3%">
			<h3 >
				<a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a>
			</h3>
	   </th>
		<th>

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