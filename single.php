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
	</div>
</div>
<?php get_footer(); ?>