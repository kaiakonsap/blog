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
		$tags = get_all("SELECT tag_name,COUNT(post_id) AS mycount FROM tag NATURAL JOIN post_tags GROUP BY tag_name ");
		require 'views/master_view.php';
	}

	function view()
	{
		global $request;
		require 'classes/tag.php';
		$tag_name = $request->get[0];
		$tag_id=get_one("SELECT tag_id FROM tag WHERE tag_name='$tag_name'");
		$posts=get_all("SELECT * FROM post NATURAL JOIN user NATURAL JOIN comment NATURAL JOIN post_tags WHERE tag_id='$tag_id'");
		$tags = tag::get_tags();
		require 'views/master_view.php';
	}

}