<?php get_header(); ?>



		<div class="entry">

			<h2><?php the_title(); ?></h2>


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
        <h6><?php echo __('Post written by:'); ?> <?php the_author_posts_link() ?></h6>

				<?php the_content(__('<p class="serif">Read the rest of this entry &raquo;</p>')); ?>


		</div>



	<small><?php edit_post_link(__('Edit', '<p>', '</p>')); ?></small>

<br />
				<div class="home_bottom"></div>
<br />

<div class="navigation">
<div class="alignleft">

<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
    <h5><?php echo __('Posted:'); ?> <?php the_date('m.d.Y'); ?></h5>
<p><?php echo __('Previous post:'); ?> <?php previous_post_link('%link'); ?></p>
<?php endif; ?>

 </div>
<div class="alignright">

<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
    <p><?php echo __('Next post:'); ?> <?php next_post_link('%link'); ?></p>
<?php endif; ?>

</div>
</div>
		</div>

	<?php endwhile; else: ?>

		<p><?php echo __('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php get_sidebar(); ?>

</div>
	
<?php get_footer(); ?>
