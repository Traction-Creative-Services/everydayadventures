<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Everyday Adventures MN</title>
 	
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/resources/js/jquery.colorbox-min.js"></script>
 	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/resources/js/main.js"></script>
 	 <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,100,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/colorbox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#categories-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">HOME</a>
      </div>
      <div class="navbar-collapse collapse" id="categories-navbar">
      	<ul class="nav navbar-nav">
      		<?php
        		$cats = get_categories(array('parent' => 0));
        		foreach($cats as $cat) { ?>
        			<li><a href="<?php echo get_category_link($cat->term_id ); ?>"><?php echo $cat->cat_name; ?></a></li>
      			<?php
        		}
      		?>
      	</ul>
      </div><!--/.navbar-collapse -->
    </div>
  </div>
<div id="all">