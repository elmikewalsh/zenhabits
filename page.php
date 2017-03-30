<?php get_header(); ?>



		<div class="entry">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">

				<?php the_content(__('<p class="serif">Read the rest of this page &raquo;</p>')); ?>

				<?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong> '), 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<small><?php edit_post_link(__('Edit'), '<p>', '</p>'); ?></small>
		</div>

		</div>
				
		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>