<?php
/*
Template Name: companiesthatRock
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
				<div id="mainScreenHamburger" class="entire-menu2">
				</div>
				
			</div>  
		</header><!-- header -->	
	
		<main role="main" class="row"> 
	<div class="frontPageContainer-2">
	

		<div class="row col span_2 entire-menu2">
 					 <input type="checkbox" id="change-hamburguer" />
  					<a class="hamburguer" href="#">
   						<span></span>
    					<label for="change-hamburguer"></label>
  					</a>
  					<div class="menu2">
    					<a href="#">Item</a>
    					<a href="#">Item</a>
    					<a href="#">Item</a>
   						<a href="#">Item</a>
    					<a href="#">Item</a>
    					<p><a href="#">Item</a></p>
  					</div>
				</div>
		<div class="col span_10">
			<article class="whatsaTechJamArticle">
						
		 		<h2>REGISTER YOUR ROCKIN' BUSINESS</h2>
		 			<h3>Tech Start-ups -- $50</h3> 
		 				<p>Must provide a tech product or tech-enabled service</p>
		 				<p>Must be less than 2 years operation</p>
		 				<p>Must be Headquartered in the Greater Richmond Region</p>
		 				<p>*Participation Pending Application Approval</P> 

		 			<h3>Established Tech Companies -- $200</h3>
		 				<p>Must provide a tech product or tech-enabled service</p> 
		 				<p>Must have footprint in the Greater Richmond Region</p>
		 				<p>*Participation Pending Application Approval</p>

		 			<h3>Benefits to Start-up Exhibitor:</h3>
		 				<ul class="benefitsStartUp">
		 					<li>Exposure to potential customers or employees</li>
		 					<li>Exposure to investors</li>
		 					<li>Exposure to mentors</li>
		 					<li>Exposure to RVA’s technology and innovation community</li>
		 				</ul>
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
				<!-- <img src="http://rvatechjam.rpmdevserver.com/wp-content/themes/rva-tech-jam/img/plug.png"> 
				</div>
				<?php get_sidebar(); ?>

			</aside> -->

	<?php get_footer(); ?>
</div> <!-- end frontPageContainer -->