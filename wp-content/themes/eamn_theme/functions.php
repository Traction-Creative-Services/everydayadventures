<?php
	add_theme_support( 'post-thumbnails' );
	
	function mine_published_only($views) {
 	  global $current_user;
	  $id = $current_user->id;
	  $views['Mine'] = '<a href="edit.php?post_type=post&author='.$id.'&post_type=post">Mine</a>';
 
	  return $views;
	}
	
	if ( current_user_can('contributor') && !current_user_can('upload_files') )
		add_action('admin_init', 'allow_contributor_uploads');
	
	function allow_contributor_uploads() {
		$contributor = get_role('contributor');
		$contributor->add_cap('upload_files');
	}
	
	
	add_filter('views_edit-post','mine_published_only');
		
