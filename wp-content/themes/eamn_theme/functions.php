<?php
	add_theme_support( 'post-thumbnails' );
	
	function mine_published_only($views) {
 	  global $current_user;
	  $id = $current_user->id;
	  $views['Mine'] = '<a href="edit.php?post_type=post&author='.$id.'&post_type=post">Mine</a>';
 
	  return $views;
	}
	
	
	add_filter('views_edit-post','mine_published_only');
		