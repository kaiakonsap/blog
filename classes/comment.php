<?php
class comment {
	static function add(){
		global $request;
		$data=array();
		$data['post_id']=$request->get[0];
		if (isset($_SESSION['user_id'])){
			$id=$_SESSION['user_id'];
			$username=get_one("SELECT username FROM user WHERE user_id='$id'" );
		$data['comment_author']=$username;
		}
		else
		{
			$data['comment_author']='anonymous';
		}
		$data['comment_text']=$request->post['comment_text'];
		insert('comment',$data );
	}
}
