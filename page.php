<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- <?php ?>
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?> -->

          <section id="feature-section" class="wrapper feature-section"><!-- feature section-->
          	<div class="container">
          		<div class="row">
          			<div class="wrapper-feature-content">
          				<div class="sec-title centre">
          					<h2>our feature</h2>
          					<p>WordPress is an award-winning web software</p>
          				</div>
          				<div class="icon-section clearfix">
	          				<div class="col-md-4 col-sm-6 col-xs-12">
	          					<div class="feature-items clearfix">
	          						<i class="fa fa-mobile"></i>
	          						<div class="texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
	          						</div>
	          					</div>
	          				</div><!-- col-md-4 -->
	          				<div class="col-md-4 col-sm-6 col-xs-12">
	          					<div class="feature-items clearfix">
	          						<i class="fa fa-car"></i>
	          						<div class="texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
	          						</div>
	          					</div>
	          				</div><!-- col-md-4 -->
	          				<div class="col-md-4 col-sm-6 col-xs-12">
	          					<div class="feature-items clearfix">
	          						<i class="fa fa-eye"></i>
	          						<div class="texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
	          						</div>
	          					</div>
	          				</div><!-- col-md-4 -->
	          				<div class="col-md-4 col-sm-6 col-xs-12">
	          					<div class="feature-items clearfix">
	          						<i class="fa fa-eye"></i>
	          						<div class="texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
	          						</div>
	          					</div>
	          				</div><!-- col-md-4 -->
	          				<div class="col-md-4 col-sm-6 col-xs-12">
	          					<div class="feature-items clearfix">
	          						<i class="fa fa-cog"></i>
	          						<div class="texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
	          						</div>
	          					</div>
	          				</div><!-- col-md-4 -->
	          				<div class="col-md-4 col-sm-6 col-xs-12">
	          					<div class="feature-items clearfix">
	          						<i class="fa fa-desktop"></i>
	          						<div class="texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
	          						</div>
	          					</div>
	          				</div><!-- col-md-4 -->
	          			</div><!-- icon section -->
          			</div><!-- feature content wrapper -->
          		</div><!-- row -->
          	</div><!-- container -->
          </section><!-- feature section -->

          <section class="meet-us wrapper" id="meet-us"><!-- meet us section -->
          	<div class="container">
          		<div class="row">
          			<div class="wrapper-meet-us">
          				<div class="sec-title centre">
          					<h2>meet us in personal</h2>
          					<p>WordPress is an award-winning web software</p>
          				</div>
          				<div class="icon-section clearfix">
          					<div class="col-md-4 col-sm-4 col-xs-12">
          						<div class="meet-us-content clearfix">  
          							<div class="overflow-hidden">  						
	          							<div class="background-image-div">
	          						    	<div class="image-overlay"></div>
	          						    </div>	<!-- background image -->
          						    </div>	
          							<div class="meet-us-text texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is proud to host this particular WordPress installation and provide users with multiple resources to facilitate the management of their WP</p>
	          						</div><!-- text content -->
          						</div><!--meet-us content -->
          					</div><!-- col md -->
          					<div class="col-md-4 col-sm-4 col-xs-12">
          						<div class="meet-us-content clearfix">        						<div class="overflow-hidden">
	          							<div class="background-image-div diff">
	          						    	<div class="image-overlay"></div>
	          						    </div>	<!-- background image -->
          						    </div>	
          							<div class="meet-us-text texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is proud to host this particular WordPress installation and provide users with multiple resources to facilitate the management of their WP</p>
	          						</div><!-- text content -->
          						</div><!--meet-us content -->
          					</div><!-- col md -->
          					<div class="col-md-4 col-sm-4 col-xs-12">
          						<div class="meet-us-content clearfix">        						<div class="overflow-hidden">
	          							<div class="background-image-div">
	          						    	<div class="image-overlay"></div>
	          						    </div>	<!-- background image -->	
          						    </div>
          							<div class="meet-us-text texts">
	          							<h4>ultra responsive design</h4>
	          							<p>WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is proud to host this particular WordPress installation and provide users with multiple resources to facilitate the management of their WP</p>
	          						</div><!-- text content -->
          						</div><!--meet-us content -->
          					</div><!-- col md -->
          				</div><!-- icon section -->
          			</div>	<!-- wrapper -->
          		</div><!-- row -->
          	</div> <!-- container -->
          </section><!-- section -->

          <section class="call-to-action" id="call-to-action"><!-- call to action section -->
          	<a href="#" class="call-to-action-btn">Im going to buy this</a>
          </section><!-- call to action section -->

          <section class="testimonials-section" id="testimonials-section"><!-- testimonials section -->
         	<div class="testi-overlay">
	          	<div class="container">
	          		<div class="row">
	          			<div class="testimonials-wrapper">
	          				<h3>client testimonials</h3>
	          				<div class="banner-wrapper">
		          				<div class="slide-items">
			          				<p class="col-md-6 col-md-offset-3 testi-text">WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is </p>
								    <p class="col-md-12 name">john doe</p>
							    </div>
							    <div class="slide-items">
			          				<p class="col-md-6 col-md-offset-3 testi-text">WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is </p>
								    <p class="col-md-12 name">john doe</p>
							    </div>
							    <div class="slide-items">
			          				<p class="col-md-6 col-md-offset-3 testi-text">WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is </p>
								    <p class="col-md-12 name">john doe</p>
							    </div>
						    </div>
	          			</div>
	          		</div>
	          	</div>
          	</div>
          </section><!-- testimonials section -->

          <section class="blog-section wrapper" id="blog-section"><!-- blog section -->
          	<div class="container">
          		<div class="row">
      				<div class="sec-title centre">
      					<h2>from our blog</h2>
      					<p>WordPress is an award-winning web software</p>
      				</div>
      				<div class="blog-wrapper">
	  					<div class="col-md-4 col-sm-4 col-xs-12">
	  						<div class="meet-us-content clearfix"> 
	  							<div class="overflow-hidden">   						
		  							<div class="background-image-div">
		  						    	<div class="image-overlay"></div>
		  						    </div>	<!-- background image -->
	  						    </div>	
	  							<div class="blog-content">
		  							<p class="blog-category"><a href="#">Business</a></p>
		      							<h4><a href="#">why choose this theme ?</a></h4>
		      							<p>WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is proud to host this particular WordPress installation and provide users with multiple resources to facilitate the management of their WP</p>
			      					<div class="blog-meta">
		      							<p><a href="#">june-30-2017</a></p>
		      							<a href="#" class="read-more-text">read more</a>
		      						</div>
	      						</div><!-- text content -->	      						
	  						</div><!--meet-us content -->
      					</div><!-- col md -->
      					<div class="col-md-4 col-sm-4 col-xs-12">
	  						<div class="meet-us-content clearfix"> 
	  							<div class="overflow-hidden">   						
		  							<div class="background-image-div">
		  						    	<div class="image-overlay"></div>
		  						    </div>	<!-- background image -->
	  						    </div>	
	  							<div class="blog-content">
		  							<p class="blog-category"><a href="#">Business</a></p>
		      							<h4><a href="#">New business theme in market</a></h4>
		      							<p>WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is proud to host this particular WordPress installation and provide users with multiple resources to facilitate the management of their WP</p>
		      						<div class="blog-meta">
		      							<p><a href="#">june-30-2017</a></p>
		      							<a href="#" class="read-more-text">read more</a>
	      						   </div>
	      						</div><!-- text content -->	      						
	  						</div><!--meet-us content -->
      					</div><!-- col md -->
      					<div class="col-md-4 col-sm-4 col-xs-12">
	  						<div class="meet-us-content clearfix"> 
	  							<div class="overflow-hidden">   						
		  							<div class="background-image-div">
		  						    	<div class="image-overlay"></div>
		  						    </div>	<!-- background image -->
	  						    </div>	
	  							<div class="blog-content">
		  							<p class="blog-category"><a href="#">Business</a></p>
		      							<h4><a href="#">why choose this theme ?</a></h4>
		      							<p>WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog. SiteGround is proud to host this particular WordPress installation and provide users with multiple resources to facilitate the management of their WP</p>
		      						<div class="blog-meta">
		      							<p><a href="#">june-30-2017</a></p>
		      							<a href="#" class="read-more-text">read more</a>
	      						   </div>
	      						</div><!-- text content -->	      						
	  						</div><!--meet-us content -->
      					</div><!-- col md -->
      				</div><!-- blog wrapper -->
          		</div><!-- row -->
          	</div><!-- container -->
          </section><!-- blog section -->

          <section class="our-client wrapper" id="our-client">
          	<div class="container">
          		<div class="row">
          			<div class="sec-title centre">
      					<h2>our happy clients</h2>
      					<p>WordPress is an award-winning web software</p>
      				</div><!-- sec title -->
      				<div class="clients-slider">
	  					<a href="#">
		  					<div class="overflow-hidden">  						
								<div class="clients-background-image-div">
							    	<div class="image-overlay"></div>
							    </div>	<!-- background image -->
		      			    </div>	
	      				</a><!-- clients image link -->
	      				<a href="#">
		  					<div class="overflow-hidden">  						
								<div class="clients-background-image-div">
							    	<div class="image-overlay"></div>
							    </div>	<!-- background image -->
		      			    </div>	
	      				</a><!-- clients image link -->
	      				<a href="#">
		  					<div class="overflow-hidden">  						
								<div class="clients-background-image-div">
							    	<div class="image-overlay"></div>
							    </div>	<!-- background image -->
		      			    </div>	
	      				</a><!-- clients image link -->
	      				<a href="#">
		  					<div class="overflow-hidden">  						
								<div class="clients-background-image-div">
							    	<div class="image-overlay"></div>
							    </div>	<!-- background image -->
		      			    </div>	
	      				</a><!-- clients image link -->
	      				<a href="#">
		  					<div class="overflow-hidden">  						
								<div class="clients-background-image-div">
							    	<div class="image-overlay"></div>
							    </div>	<!-- background image -->
		      			    </div>	
	      				</a><!-- clients image link -->
	      				<a href="#">
		  					<div class="overflow-hidden">  						
								<div class="clients-background-image-div">
							    	<div class="image-overlay"></div>
							    </div>	<!-- background image -->
		      			    </div>	
	      				</a><!-- clients image link -->
      				</div><!-- slider -->
          		</div><!-- row -->
          	</div><!-- container -->
          </section><!-- section -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
