<?php
/*
Template Name: AbouttechJam
*/
?>
<?php get_header(); ?>

<div id="pg-container" class="container row aboutTechJamPageContainer">
		<header role="banner" class="row">
			<div id="header-left" class="col span_4">
				<h1 class="logo col span_6"><span class="hide-text">RVA Tech Jam</span><a href="http://rvatechjam.rpmdevserver.com/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a></h1>	
				<nav id="mobile" class="hide-desktop col span_6">
					<div id="toggle-bar" class="hide-desktop">			        
				        <a class="navicon mtoggle" href="#"></a>
				    </div>
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'menu_id' => 'mobile-menu', 'menu_class' => 'hide', 'depth' => 1));?>	
				</nav>	
			</div>
			<div id="header-right" class="col span_2 mainMenu">
				
				<nav id="desktop" class="hide-mobile">
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'depth' => 1));?>
				</nav>
			</div>
		</header><!-- header -->	
	
		<main role="main" class="row"> 
<div class="frontPageContainer-2">
	<div class="col span_2 hamburgerDesktop">
		<ul>
			<li><a href="#"><button class="hamburgerButton"></button></a></li>
			<li><a href="#"><button class="hamburgerButton"></button></a></li>
			<li><a href="#"><button class="hamburgerButton"></button></a></li>
		</ul>
	</div>
<div class="col span_10 frontPageLogo">
	<!-- <article class="whatsaTechJam">
		<h2>So What’s a Tech Jam?</h2>

			<p>RVATechJam was born from a shared concern<br />
among tech industry leaders: businesses were<br />
going out-of-market for tech services and products<br />
that are readily available through local start-ups and<br />
emerging businesses. Further concern, is the<br />
perception that RVA is not a tech town, making<br />
a highly skilled workforce question coming or<br />
 staying in the region.</p>
	</article> -->
		<!-- <a href="#"><button class="learnMoreButton"><p>learn more</p></button></a></li> -->
</div>
<!-- <div class="pageMarkers">
	<ul>
		<li class="active"><button class="circle"></button></li>
		<li><button class="circle"></button></li>
		<li><button class="circle"></button></li>
		<li><button class="circle"></button></li>
	</ul>
</div> -->
<!--<article class="col span_12">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>                
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</article> --> 

<aside role="complimentary" class="col span_12">
	<div class="plugImage">
		<!-- <img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/plug.png"> -->
	</div>	<!--<?php get_sidebar(); ?> -->

</aside>	

<?php get_footer(); ?>
</div> <!-- end frontPageContainer -->