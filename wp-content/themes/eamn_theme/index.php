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
			$i = 0;

			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php 
					$cat = get_the_category();$cat = $cat[0];$cat = $cat->name; 
					$imgType = has_post_thumbnail();
					$limit = 300;
					if($imgType) {
						$class = 'hasImage';
						$limit = 150;
					}
					else
						$class = '';
				?>
					<?php if($i==0 ) {
						echo "<div class='row'>";
					} ?>
					<div class="col-md-4 <?php echo $class; ?>">
					<div class="post <?php echo $cat; ?>">
						<?php if($imgType) { ?>
							<div class="image">
								<?php the_post_thumbnail('medium'); ?>
							</div>
						<?php } ?>
						<div class="text">
							<a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<h4>Posted on <?php the_time('F jS, Y') ?></h4>
							<p><?php 
								$body = get_the_content();
								if(strlen($body) > 150)
									echo substr($body,0,strpos($body,' ',$limit)).'...'; 
								else 
									echo $body;
							?></p>
						</div>
						<div class='tag-box'>
							<p>
								<?php
									$tags = wp_get_post_tags(get_the_ID());
									foreach($tags as $tag) {
										?>
										<a href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a> 
										<?php
									}
								?>
							</p>
						</div>
					</div>
					</div>
					<?php if($i==2) {
						echo "</div>";
						$i = 0;
					} else {
						$i++;
					} ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div id="delimiter"></div>
	<?php get_footer(); ?>