<?php
class posts
{

	function index()
	{
		require 'classes/tag.php';
		global $request;
		$posts = get_all("SELECT *,LEFT(post_text, 50) AS short_text, count(comment_id) as comment_count FROM post NATURAL JOIN user
		LEFT JOIN comment USING (post_id) WHERE post.deleted=0 GROUP BY post.post_id
		ORDER BY post.post_time DESC;") ;
		$tags=tag::get_tags();
		require 'views/master_view.php';

	}

	function view()
	{
		global $request;
		require 'classes/comment.php';
		require 'classes/tag.php';
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
		$user=$post['user_id'];
		$author=get_one("SELECT username FROM user WHERE user_id='$user'");
		$comments = get_all(
			"SELECT comment_id, comment_text, comment_author, comment_time
		                     FROM comment
		                     WHERE post_id='$id'"
		);
		$tags=tag::get_tags();
		require 'views/master_view.php';
	}
	function search(){
		global $request;

		require 'views/master_view.php';

	}


}