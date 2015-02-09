<?php
/*
Template Name: 2014 Details
*/
?>
<?php get_header(); ?>

<div id="pg-container" class="container row WhatsATechJamPageWrapper">
		<header role="banner" class="row">
			<div id="header-left" class="col span_4 yellow">
				<h1 class="logo whatsatechjamtoplogo col span_2"><span class="hide-text">RVA Tech Jam</span><a href="http://rvatechjam.rpmdevserver.com/"><img src="<?php bloginfo('template_directory'); ?>/img/rvatechjamlogo.svg" /></a></h1>		
				<nav id="mobile" class="hide-desktop col span_6">
					<div id="toggle-bar" class="hide-desktop">			        
				        <a class="navicon mtoggle" href="#"></a>
				    </div>
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'menu_id' => 'mobile-menu', 'menu_class' => 'hide', 'depth' => 1));?>	
				</nav>	
			</div>
			<div id="header-right" class="col span_2 mainMenu">
				<div id="mainScreenHamburger" class="hamburger">
				</div>
				<nav id="desktop" class="hide-mobile">
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'depth' => 1));?>
				</nav>
			</div>
		</header><!-- header -->	
	
		<main role="main" class="row"> 
<div class="frontPageContainer-2">
	<!--<div class="col span_2 hamburgerDesktop">
		<ul>
			<li><a href="#"><button class="hamburgerButton"></button></a></li>
			<li><a href="#"><button class="hamburgerButton"></button></a></li>
			<li><a href="#"><button class="hamburgerButton"></button></a></li>
		</ul>
	</div> -->
<div class="col span_10">
	<article class="whatsaTechJamArticle">
		 <h2>OCTOBER 17 3-8PM</h2>
		 	<h3>POWERPLANT@HAXALLPOINT</h3>
		 		<p>RVATechJam promotes our innovative start-ups and celebrates exciting tech-<br />
		 			enabled companies, all while enjoying good beer and music from local geeks!<br /> 
Admission is FREE, but pre-register for chance to win several AWESOME PRIZES.</p>

		<a href="#"><button class="admission">FREE ADMISSION</button></a>
	</article>
	<article>
		<img src="http://rvatechjam.rpmdevserver.com/wp-content/uploads/2014/09/img-1.png" class="jackPhoto" alt="Jack Lauterback">
		<h3>JACK LAUTERBACK OF 103.7 TO M.C. RVATECHJAM</h3>
			<p>Lauterback is co-host of 103.7 Play Mornings with Melissa &<br />
	 		Jack. He's also a long-time columnist for Style Weekly. A <br />
	 		UNC-Wilmington grad and Midlothian native, Jack enjoys <br />
	 		reading, running and bartending in his spare time. <br />
			He's never met a free drink that he didn't enjoy. </p> 

			<a href="#"><button class="admission">GOT A QUESTION ABOUT THE TECHJAM OR HOW TO SPONSOR?</button></a>
	</article>
		
</div>
<div class="col span_12 liteBulbContainer">
	<img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/lite-noBlue-2600.png" alt="lightBulb" style="max-width:100%;height:auto;">
</div>
<div class="col span_12 helloBox">
	<h3>say hello</h3>

</div>
<!--<article class="col span_12">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>                
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</article> --> 

<!-- <aside role="complimentary" class="col span_12">
	<div class="plugImage">
		<!-- <img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/plug.png"> -->
	</div>	<!--<?php get_sidebar(); ?> -->

</aside> -->

<?php get_footer(); ?>
</div> <!-- end frontPageContainer -->