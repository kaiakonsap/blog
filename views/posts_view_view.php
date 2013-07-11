
<table class="table table-bordered table-striped">
	<?if (isset($post)):?>
		<thead>
		<tr>
			<th>
				<h2>
					<a href="#"><?=$post['post_subject']?></a>
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
	<?endif?>
</table>
<h2>Kommentaarid</h2>
<table >
	<? foreach ($comments as $comment) : ?>

		<tr class='well'>
			<td><?=$comment["comment_text"]?></td>
		</tr>
		<tr>
			<td><?=$comment["comment_author"]?>
			&nbsp<?=$comment["comment_time"]?></td>
		</tr>

	<? endforeach ?>

</table>

</span>
<form method="POST">
	<input type="text" name="comment_author" id="comment_author"/>
	<textarea name="comment_text" id="comment_text" cols="100" rows="5" style="width: auto"></textarea>
	<button type="submit">Submit</button>
</form>
