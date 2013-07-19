<?if (isset($users)):foreach($users as $user):?>

<div class="row">
	<div class="span8">
		<h4><strong><a href="<?=BASE_URL?>users/view/<?=$user['user_id']?>"><?=$user['username']?></a></strong></h4>
	</div>
</div>
<?endforeach;endif?>