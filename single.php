<?php get_header(); ?>

<div class="page-single-container">
	<div class="container">
	<?php
		if(have_posts()):
			while(have_posts()):
				the_post();
	?>
				<div class="row title">
					<div class="col-xs-12">
						<?php the_title(); ?>
					</div>	
				</div>
				<div class="row date">
					<div class="col-xs-12">
						<?php the_time('F d, Y'); ?>
					</div>	
				</div>
				<div class="row content">
					<div class="col-xs-12">
						<?php the_content(); ?>
					</div>	
				</div>
	<?php
			endwhile;
		endif;
	?>
		<div class="row">
			<div class="col-xs-12 col-md-offset-2 col-md-8 share-block">
				<div class="share-text">
					Liked the blog? Share it.
				</div>
				<div class="share-icon">
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/facebook-icon.png" class="img-responsive">
					</a>
				</div>
				<div class="share-icon">
					<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter-icon.png" class="img-responsive">
					</a>
				</div>
				<div class="share-icon">
					<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/linkedin-icon.png" class="img-responsive">
					</a>
				</div>
				<div class="share-icon">
					<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share on Google+" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/googleplus-icon.png" class="img-responsive">
					</a>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-offset-2 col-md-8 comments-block">
				<?php comments_template(); ?>
			</div>	
		</div>
	</div>
</div>
<?php get_footer(); ?>