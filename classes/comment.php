<?php
class comment {
	function add(){
		global $request;
		$data=array();
		$data['post_id']=$request->get[0];
		$data['comment_author']=$request->post['comment_author'];
		$data['comment_text']=$request->post['comment_text'];
		insert('comment',$data );
	}
}
$comment=new comment;