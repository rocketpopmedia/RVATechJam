<?php
/*
Template Name: Say Hell0
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
		 <h2>Lorem ipsum dolor</h2>
		 <p> sit amet, sed luctus lobortis, proin lectus nibh velit augue pretium metus. Aliquam porttitor dictum lacinia, nulla justo a justo feugiat. Venenatis est diam wisi ligula dui. Interdum nam convallis, nunc habitasse in nunc lobortis. Luctus at vivamus ut, in lorem augue consequat eleifend mollis, accumsan mauris curabitur duis lorem neque, nulla lacinia integer dolor libero ornare. Vestibulum nulla elit sed nulla feugiat, turpis elit quam lorem sociosqu at neque, arcu enim ligula ullamcorper diam maecenas, nam sapien penatibus ac cursus velit.</p>

<p>Fermentum eaque vulputate, nunc ipsum imperdiet, voluptas suspendisse eu condimentum, neque morbi. Nisl odio aenean, mauris risus. Curabitur pellentesque in felis nec felis ultricies, pulvinar mauris dicta congue tristique malesuada vestibulum. Velit facilisis, nullam vestibulum, auctor praesent massa consectetuer blandit duis risus. Eros dui massa consequat sed diam. Sem scelerisque etiam justo donec sed, in ac conubia dolor a.</p>

<p>Nec vestibulum amet a, amet vivamus orci id per suspendisse, accumsan habitasse sollicitudin pellentesque mattis. Magna turpis cras faucibus dui viverra vel, et leo posuere leo blandit, elit nulla vitae mattis, felis sit eros auctor neque porttitor, quis enim suspendisse mauris elit. Ipsum sed. Varius at imperdiet nibh velit, magnis lacinia eget amet ultricies rutrum. Blandit tortor venenatis, eu dui senectus, earum suscipit pulvinar turpis pulvinar. Velit lectus eget suspendisse, ac rhoncus vitae massa dui. Volutpat at enim. Maecenas vehicula amet eu cras. Tristique vitae sed nibh, velit mauris orci vitae non.</p>

<p>A vel lacinia, diam justo mi laborum, aliquam rutrum fames quam ornare non, pede quis eu, ligula ultricies urna. Donec purus mauris ut magna enim, in ipsum. Feugiat elit porta risus nec nam eget, cras nec eu mi pellentesque, tellus lectus nulla aliquam, varius maecenas non, neque leo. Pharetra justo vestibulum magna eget pede hymenaeos, tellus vestibulum justo, dictum fusce et ipsum diam sagittis volutpat. Ipsum risus neque mauris, fringilla nec purus accumsan posuere, praesent et a, tempus vehicula amet pellentesque, nonummy vestibulum vitae. Nibh porta lacus sollicitudin. Ut nullam, id taciti consequat enim accumsan vitae vivamus, urna risus curabitur, amet ac nisl porta justo libero, posuere a curabitur nulla earum rhoncus.</p>
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