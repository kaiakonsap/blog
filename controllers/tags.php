<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 18.07.13
 * Time: 21:42
 * To change this template use File | Settings | File Templates.
 */

class tags
{

	function index()
	{
		global $request;
		$tags = get_all("SELECT *FROM tag");
		require 'views/master_view.php';
	}

	function view()
	{
		global $request;
		require 'classes/tag.php';
		$tag_name = $request->get[0];
		$posts=get_all("SELECT * FROM post
			LEFT JOIN user ON user.user_id=post.user_id
			 LEFT JOIN post_tags ON post.post_id=post_tags.post_id
			  LEFT JOIN tag ON tag.tag_id=post_tags.tag_id
			  LEFT JOIN comment ON post.post_id=comment.post_id
			  WHERE tag.tag_name='$tag_name'");

		$tags = tag::get_tags();
		require 'views/master_view.php';
	}

}