<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
     <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Exploring Minnesota</h1>
        <p class="lead text-center">From the twin cities metro, to mini-golf in the middle of no where, to the crystal clear boundary waters up north. Come with us.</p>
      </div>
     </div>
     <div class="row" id="jumboBorder">
      	<div id="mn-sphere">
      		<img alt="MN" src="<?php bloginfo('template_directory'); ?>/resources/images/mn.png"/>
      	</div>
      	<div class="col-md-3">
      		<p>RUN</p>
      	</div>
      	<div class="col-md-3">
      		<p>SWIM</p>
      	</div>
      	<div class="col-md-3">
      		<p>LAUGH</p>
      	</div>
      	<div class="col-md-3">
      		<p>LEARN</p>
      	</div>
      </div>
    </div>

	<div id="main" class="container">
		<div id="content">
			<?php 

			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php 
					$cat = get_the_category();$cat = $cat[0];$cat = $cat->name; 
					$imgType = has_post_thumbnail();
					if($imgType) { ?>
						<style>
							.jumbotron {
								background:url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $img[0]; ?>) center center fixed;
								background-repeat:no-repeat;
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;
							}
							.jumbotron h1, .jumbotron .lead {
								opacity:0.0;
							}
						</style>
					<?php } ?>
					<div class="row">

						<div class="<?php echo $cat; ?> col-md-8">
								<h1><?php the_title(); ?></h1>
								<h4>Posted on <?php the_time('F jS, Y') ?></h4>
								<p><?php 
									the_content();
								?></p>
						</div>
						<div class="col-md-4">
							<div class="author-block">
								<h3><?php the_author_link(); ?></h3>
								<div id="author-thumb">
									<?php userphoto_the_author_photo(); ?>
								</div>
								
								<p><?php the_author_meta('user_description',$post_author); ?></p>
								<div id='end-block'></div>
							</div>
						</div>
					</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div id="delimiter"></div>
	<?php get_footer(); ?>