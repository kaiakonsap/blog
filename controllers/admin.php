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
		$this->scripts[] = 'delete.js';
		$this->scripts[] = 'add.js';
		global $request;
		if(isset($_POST['post_text']))
		{
			$data['post_text']=$_POST['post_text'];
			$data['post_subject']=$_POST['post_title'];
			$data['user_id']=$_SESSION['user_id'];

			$post_id=insert('post',$data);
			if(isset($_POST['tags'])){
				$tags=strpos($_POST['tags'], ',') !== false && strpos($_POST['tags'], ',') >1?
					explode(',',$_POST['tags']):$_POST['tags'];
				$tag_ids=array();
				foreach ($tags as $tag){
					$new_array['tag_name']=$tag;
					$tag_ids[]=insert('tag',$new_array);
				}
				foreach ($tag_ids as $id){
					$extra_array['tag_id']=$id;
					$extra_array['post_id']=$post_id;

					insert('post_tags',$extra_array);

				}

			}
		}
		$posts = get_all("SELECT *, count(comment_id) as comment_count FROM post NATURAL JOIN user
		LEFT JOIN comment USING (post_id) WHERE post.deleted=0 GROUP BY post.post_id");
		$tags=tag::get_tags();

		require 'views/master_view.php';
	}
	function edit_post(){

		global $request;
		$id = $request->get[0];
		if(isset($_POST['change_subject'])&& isset($_POST['change_text'])){
			$post['post_edit_time']=array('no_escape'=>'NOW()');
			$post['user_id']=$_SESSION['user_id'];
			$post['post_text']=$_POST['change_text'];
			$post['post_subject']=$_POST['change_subject'];
			update('post',$post,"post_id=$id",true);
				$request->redirect('admin');
		}
		$post = get_first("SELECT * FROM post WHERE post_id='$id'");

		require 'views/master_view.php';
	}
	function delete_post(){
		if(isset($_POST['delete_post'])){
			$id=$_POST['delete_post'];
			update('post',array('deleted'=>1),"post_id=$id");
		}
	}
}