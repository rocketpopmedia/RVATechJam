<?php get_header(); ?>
<div id="pg-container" class="container row">
		<header role="banner" class="row">
			<div id="header-left" class="col span_4">
				<h1 class="logo col span_6"><span class="hide-text">RVA Tech Jam</span><a href="http://rvatechjamdev2.rpmdevserver.com/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a></h1>	
				<nav id="mobile" class="hide-desktop col span_6">
					<div id="toggle-bar" class="hide-desktop">			        
				        <a class="navicon mtoggle" href="#"></a>
				    </div>
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'menu_id' => 'mobile-menu', 'menu_class' => 'hide', 'depth' => 1));?>	
				</nav>	
			</div>
			<div id="header-right" class="col span_8">
				
				<nav id="desktop" class="hide-mobile">
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'depth' => 1));?>
				</nav>
			</div>
		</header><!-- header -->	
	
		<main role="main" class="row"> 

<article class="col span_12">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>                
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</article>

<aside role="complimentary" class="col span_4">

	<?php get_sidebar(); ?>

</aside>

<?php get_footer(); ?>