<?php
/*
Template Name: What's a tech Jam
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
		<h2>So What’s a Tech Jam?</h2>

			<p>RVATechJam was born from a shared concern<br />
			 among tech industry leaders:businesses were<br />
			 going out-of-market for tech services and products<br />
			 that are readily available through local start-ups and<br />
			 emerging businesses. Further concern, is the<br />
			 perception that RVA is not a tech town, making<br />
			 a highly skilled workforce question coming or <br />
			 staying in the region.</p>
			 
		 <h2>the resounding opinion? hogwash.</h2>

			<p>RVA has been an innovative, tech-forward town for<br /> 
			years. Richmond developed the first practical<br /> 
			electric trolley system that set the pattern for<br /> 
			systems around the world. Oh and by-the-way, the<br /> 
			hydro-plant that supplied electricity for America's first<br /> 
			electric street cars is the location of RVATechJam...<br />
			the Power Plant at Haxall Point. From local start-up<br /> 
			success stories like Capital One, Carmax, or recently<br /> 
			Health Diagnostic Laboratories, to up and coming<br /> 
			companies like Evatran, Kaleo, and Knoxpayments,<br /> 
			their common denominator is one thing: Tech! And <br />
			RVA has plenty of it.</p>
			
		 <h2>why jam you ask? geeks got beats.</h2>

			<p>That's right. The strong coalition of music and<br /> 
			technology is widely known and RVA's music loving<br /> 
			geeks want to prove it in style...a battle of the geek bands.<br /> 
			Participating bands will be comprised from companies<br /> 
			in Richmond with at least one technology musician.<br /> 
			They'll compete in the Innovation Exhibition Hall<br />
			with a winner proclaimed at the end of the event.</p>
			
		 <h2>will there be rva craft beer? duh.</h2>

			<p>RVATechJam is a collaboration between local tech<br /> 
			companies, leading industry groups, the City of Richmond,<br /> 
			and you. If you're interested in learning more about<br /> 
			RVA's innovation start-up scene, exciting tech-enabled<br /> 
			companies, good beer, music or just want to connect<br /> 
			and collaborate with RVA's innovation ecosystem,<br /> 
			then join us on October 17.</p>
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