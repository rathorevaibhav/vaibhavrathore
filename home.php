<?php get_header(); ?>

<div class="blogs-container">
	<div class="container">
		<div class="blog-row">
		<?php
			if(have_posts()):
				while(have_posts()):
					the_post();

		?>
				<div class="blog-block ">
					<div class="title"><?php the_title(); ?></div>
					<div class="date"><?php the_time('F d, Y'); ?></div>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</div>

		<?php
				endwhile;
			endif;
		?>
		</div>
	</div>
</div>
<?php get_footer(); ?>