<?php // custom functions.php template

// Add Custom Menu Support in WP 3.0+
add_theme_support( 'menus' );
register_nav_menus(  
        array(  
            'sidebar_menu'           => 'Sidebar Main Navigation',  
            'also_see_menu'          => 'Also See Links on Archives page.',
			'footer_menu'            => 'Footer Menu.')  
        );  

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

?>