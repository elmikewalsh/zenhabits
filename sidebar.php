<section id="sidebar"> 

	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
	<p id="tagline"><a href="/"><?php bloginfo('description'); ?></a></p> 

	<subscribe>
		<ul> 
			<li><small>Subscribe: <a href="http://feeds.feedburner.com/zenhabits">rss</a> | <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=673235&loc=en_US">email</a> | <a href="http://twitter.com/zen_habits">twitter</a> | <a href="https://plus.google.com/109926473783208635050/posts?hl=en">+</a></small></li> 
			<li><small>Join 225,000 sexy readers</small></li> 
		</ul> 
	</subscribe>

<nav>
<?php wp_nav_menu( array('theme_location'  => 'sidebar_menu' ,'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
</nav>



</section> 
