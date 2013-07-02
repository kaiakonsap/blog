<table class="table table-bordered table-striped">
	<?if (isset($posts)):?>
		<thead>
		<tr>
			<th>
				<h2>
					<a href="#"><?=$posts['post_subject']?></a>
				</h2>
			</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td> <?=$posts['post_text']?></td>
			<td>&nbsp</td>
		</tr>
		</tbody>
	<?endif?>
</table>