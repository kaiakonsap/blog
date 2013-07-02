<?php
class posts {
	function index(){
		global $request;
		$posts = get_all("SELECT * FROM post");
		require 'views/master_view.php';
	}
	function view(){
		global $request;
		$id=$request->params[0];
		$posts = get_all("SELECT * FROM post WHERE post_id='$id'");
		$posts=$posts[0];
		require 'views/master_view.php';
	}


}