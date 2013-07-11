<?php
class posts {
	function index(){
		global $request;
		$posts = get_all("SELECT * FROM post");
		require 'views/master_view.php';
	}
	function view(){
		global $request;
		require 'classes/comment.php';
		if(isset($request->post['comment_text']))
		{
			if(!empty($request->post['comment_author'])){
				$comment->add();
			}
			else{
				echo "Pane autor";
			}
		}
		$id=$request->get[0];
		$post = get_first("SELECT * FROM post WHERE post_id='$id'");
		$comments=get_all("SELECT comment_id, comment_text, comment_author, comment_time
		                     FROM comment
		                     WHERE post_id='$id'");
		require 'views/master_view.php';
	}


}