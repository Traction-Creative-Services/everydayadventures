<?php
	//add support for featured images
	add_theme_support( 'post-thumbnails' );
	
	//add "Mine" tab on posts page
	function mine_published_only($views) {
 	  global $current_user;
	  $id = $current_user->id;
	  $views['Mine'] = '<a href="edit.php?post_type=post&author='.$id.'&post_type=post">Mine</a>';
 
	  return $views;
	}
	
	add_filter('views_edit-post','mine_published_only');

	//allow contributors to upload files
	if ( current_user_can('contributor') && !current_user_can('upload_files') )
		add_action('admin_init', 'allow_contributor_uploads');
	
	function allow_contributor_uploads() {
		$contributor = get_role('contributor');
		$contributor->add_cap('upload_files');
	}
	
	//edit the login screen
	function my_login_logo() { ?>
	    <style type="text/css">
	        body.login div#login h1 a {
	            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/resources/images/mn.png");
	            background-repeat:repeat;
	            padding-bottom: 30px;
	        }

	        body.login {
	        	background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/resources/images/admin-background.jpg");
	        }
	    </style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );