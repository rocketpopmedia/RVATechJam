<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>

<div id="pg-container" class="container row frontPageContainer">
		<header role="banner" class="row">
			<div id="header-left" class="col span_2">
				<h1 class="logo col span_2"><span class="hide-text">RVA Tech Jam</span><a href="http://rvatechjam.rpmdevserver.com/"><img src="<?php bloginfo('template_directory'); ?>/img/rvatechjamlogo.svg" /></a></h1>	
				<nav id="mobile" class="hide-desktop col span_6">
					<div id="toggle-bar" class="hide-desktop">			        
				        <a class="navicon mtoggle" href="#"></a>
				    </div>
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'menu_id' => 'mobile-menu', 'menu_class' => 'hide', 'depth' => 1));?>	
				</nav>	
			</div>
			
			<div id="header-right" class="col span_2 mainMenu">
				<div id="hamburger" class="hamburger">
				</div>
				<nav id="desktop hamburger" class="hide-mobile">
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'depth' => 1));?>
				</nav>
			</div>
		</header><!-- header -->	
	
		<main role="main" class="row"> 
	
<div class="col span_12 frontPageLogo">
	<img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/battleofthebandslogo.svg"> 
</div>
<div class="pageMarkers">
	<ul>
		<li id="up-arrow" class="upArrow"><img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/arrowup.svg"></li>
		<li class="active"><button class="circle"></button></li>
		<li><button class="circle"></button></li>
		<li><button class="circle"></button></li>
		<li><button class="circle"></button></li>
		<li id="dn-arrow" class="dnArrow"><img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/arrowdown.svg"></li>
	</ul>
</div>

<div class="col span_8 WhatsATechJamPageContainer">
	<article class="whatsaTechJam">
		<h2>So What’s a Tech Jam?</h2>

			<p>RVATechJam was born from a shared concern<br />
			 among tech industry leaders:businesses were<br />
			 going out-of-market for tech services and products<br />
			 that are readily available through local start-ups and<br />
			 emerging businesses. Further concern, is the<br />
			 perception that RVA is not a tech town, making<br />
			 a highly skilled workforce question coming or <br />
			 staying in the region.</p>
	</article>
		<a href="http://rvatechjam.rpmdevserver.com/whats-a-techjam/"><button class="learnMoreButton">learn more</button></a>
</div>
<div class="col span_8 sayHelloContainer">
	<article class="sayHelloArticle">
		<h2>the 2014 411</h2>

<p>RVATechJam<br />
Fri, October 17, 4:00 - 8:00 p.m.</p>

<p>Location:<br />
Power Plant at Haxall Point</p>

<p>Charge:<br />
FREE</p>
	</article>
	<a href="vatechjam.rpmdevserver.com/the-2014-details/"><button class="learnMoreButton2"><p>learn more</p></button></a>
</div>
<div class="col span_8 companiesWeRockContainer">
	<article class="companiesArticle">
		<h2>companies that rock!</h2>

			<p>RVATechJam could never happen if not for the<br />
amazing volunteers, contributors, sponsors, and<br />
killer geek bands. To learn more about all companies<br />
involved, visit the companies that rock page.</p>
	</article> 
	<a href="http://rvatechjam.rpmdevserver.com/companies-that-rock/"><button class="learnMoreButton3"><p>learn more</p></button></a>
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

</article> 

<aside role="complimentary" class="col span_12">

	<?php get_sidebar(); ?>

</aside>-->	

<?php get_footer(); ?>
</div> <!-- end frontPageContainer -->