<?php
class posts
{

	function index()
	{
		require 'classes/tag.php';
		global $request;
		$posts = get_all("SELECT *, count(comment_id) as comment_count FROM post NATURAL JOIN user
		LEFT JOIN comment USING (post_id) GROUP BY post.post_id");
		$tags=tag::get_tags();
		require 'views/master_view.php';

	}

	function view()
	{
		global $request;
		require 'classes/comment.php';
		if (isset($request->post['comment_text'])) {
			if (empty($request->post['comment_author'])) {
				$request->post['comment_author'] = 'Anonüümne';
			}
			if (! empty($request->post['comment_text'])) {
				comment::add();
			}

		}
		$id = $request->get[0];
		$post = get_first("SELECT * FROM post WHERE post_id='$id'");
		$comments = get_all(
			"SELECT comment_id, comment_text, comment_author, comment_time
		                     FROM comment
		                     WHERE post_id='$id'"
		);
		require 'views/master_view.php';
	}
	function search(){
		global $request;

		require 'views/master_view.php';

	}


}