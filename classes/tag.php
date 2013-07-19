<?php

class tag {
	static function get_tags(){
		$tags=array();
		$tags_raw=get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach($tags_raw as $tag){
			$tags[$tag['post_id']][] = $tag['tag_name'];
		}
		return $tags;
	}

}
