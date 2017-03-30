<?php get_header(); ?>



		<div class="entry">

<?php the_post(); ?>                    
                        
                                <h1 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'zh-responsive' ), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>" ) ?></h1>
                                <?php $authordesc = $authordata->user_description; if ( !empty($authordesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $authordesc . '</div>' ); ?>

<?php rewind_posts(); ?>
                        
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
 
<?php } ?>                      

<?php while ( have_posts() ) : the_post(); ?>

                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'zh-responsive'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                                        <div class="entry-meta">
                                                <span class="meta-prep meta-prep-author"><?php _e('By ', 'zh-responsive'); ?></span>
                                                <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'zh-responsive' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                                                <span class="meta-sep"> | </span>
                                                <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'zh-responsive'); ?></span>
                                                <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                                                <?php edit_post_link( __( 'Edit', 'zh-responsive' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
                                        </div><!-- .entry-meta -->
                                        
                                        <div class="entry-summary">     
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'zh-responsive' )  ); ?>
                                        </div><!-- .entry-summary -->

  
                                </div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>                      

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-below" class="navigation">
                                        
                                        
                                </div><!-- #nav-below -->
<?php } ?> 


				<div class="home_bottom"></div>
<br />

<div class="navigation">
<div class="alignleft">

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<p><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'zh-responsive' )) ?></p>



 </div>
<div class="alignright">

<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
<p><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'zh-responsive' )) ?></p>
<?php endif; ?>
<?php } ?> 

</div>
</div>



</div>



<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>