<?php get_header(); ?>

<div class="blogs-page-container">
	<div class="container">
		<div class="row">
		<?php
			if(have_posts()):
				while(have_posts()):
					the_post();
		?>
			<a href="<?php the_permalink(); ?>" class="blog-block ">
				<div class="title"><?php the_title(); ?></div>
				<div class="date"><?php the_time('F d, Y'); ?></div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</a>
		<?php
				endwhile;
			endif;
		?>
		</div>
	</div>
</div>

<?php get_footer(); ?>