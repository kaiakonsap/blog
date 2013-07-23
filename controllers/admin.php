<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 23.07.13
 * Time: 19:02
 * To change this template use File | Settings | File Templates.
 */

class admin {
	public $requires_auth =TRUE;

	function index(){
		require 'classes/tag.php';
		global $request;
		$posts = get_all("SELECT *, count(comment_id) as comment_count FROM post NATURAL JOIN user
		LEFT JOIN comment USING (post_id) GROUP BY post.post_id");
		$tags=tag::get_tags();
		require 'views/master_view.php';
	}
	function edit_post(){

		global $request;
		$id = $request->get[0];
		if(isset($_POST['change_subject'])&& isset($_POST['change_text'])){
			$subject=$_POST['change_subject'];
			$text=$_POST['change_text'];
			$date=date("Y-d-j H:i:s");
			$user_id=$_SESSION['user_id'];
			update('post',array('post_subject'=>"$subject",'post_text'=>"$text",'post_time'=>"$date",'user_id'=>"$user_id"),
				"post_id=$id");
		}
		$post = get_first("SELECT * FROM post WHERE post_id='$id'");

		require 'views/master_view.php';
	}
	function delete_post(){

	}
}