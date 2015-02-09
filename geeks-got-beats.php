<?php
/*
Template Name: geek-got-beats
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
	
<div class="col span_10">
	<article class="geeksGotBeatsTitleBox">
		<h2>BATTLE of the GEEK BANDS!</h2>
		<p>RVATechJam would be impossible without the support of our sponsors and their jammin' geek bands!</p>

		<ul class="geekImages">
			<li><img src="#" alt="#"></li>
			<li><img src="#" alt="#"></li>
			<li><img src="#" alt="#"></li>
			<li><img src="#" alt="#"></li>
		</ul>

	</article>
	
	<article>

		<h2>BECOME A SPONSOR AND BATTLE!</h2>
			<p>That's right. The strong connection between music and technology is widely known and RVA's music<br />
			 loving geeks want to prove it in style…a battle of the geek bands. Participating bands will be comprised<br />
			  from companies in Richmond with at least one technology musician.</p>

	</article>

	<article id="geeksList">
		<p>Company Geek Band Requirements:</p>
			<ul>
				<li>At least one musician must be a technologist employed by sponsoring company</li>
				<li>Each band must be prepared to play a 20 minute set.</li>
				<li>Minimum of three instruments (vocal not included)</li>
				<li>Genre is a band choice, but remember 25% of final vote is people's choice.</li>
				<li>Points will be awarded in categories of creativity, difficulty of music, and overall awesomeness.</li>
			</ul>

		<p>Benefits to Band Sponsorship ($5,000):</p>
			<ul>
				<li>Company Logo on all marketing material including RVATechJam’s Funtech Tee</li>
				<li>Exposure to RVA’s technology and innovation community, both business and workforce</li>
				<li>Media Exposure as a supporter of RVA’s tech community</li>
				<li>Possibility (should you win) of making a $5,000 contribution to the charity of your choice</li>
				<li>Team building opportunity for your technologists</li>
				<li>Name recognition in pre- and post- event media releases</li>
				<li>Logo/name recognition on promotional emails sent to all members</li>
				<li>Logo/name recognition in RichTech electronic newsletter</li>
				<li>Logo/name recognition on website</li>
				<li>Logo/name recognition on event signage and throughout Power Plant</li>
				<li>Complimentary Booth in Innovation Exhibition Hall</li>
			<ul>
	</article>

	<a href="#"><button class="admission">GOT A QUESTION ABOUT THE TECHJAM OR HOW TO SPONSOR?</button></a>

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