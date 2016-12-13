<?php
/**
 * The main template file.
 *
 * @package WPpractice
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">
  				
  				<section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
 
 		<?php 
 			$service_query = new WP_Query(array(
 				'post_type' => 'service',
 				'posts_per_page' => 6,
 			));
 			while($service_query->have_posts()): $service_query->the_post();
 			$service_icon = get_post_meta(get_the_id(), 'service-icon', true);

 		?>

          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-<?php echo $service_icon; ?> fa-5x"></i>
            </div>
            <div class="service-info">
              <h3><?php the_title();?></h3>
              <?php the_content();?>
            </div>
          </div>
      <?php endwhile;?>

          
          
      </div>
    </div>
  </section><!--/#services-->  				


  				<section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
 
 		<?php 
 			$service_query = new WP_Query(array(
 				'post_type' => 'service',
 				'posts_per_page' => 6,
 				'service_categories'=> 'cat2'
 			));
 			while($service_query->have_posts()): $service_query->the_post();
 			$service_icon = get_post_meta(get_the_id(), 'service-icon', true);

 		?>

          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-<?php echo $service_icon; ?> fa-5x"></i>
            </div>
            <div class="service-info">
              <h3><?php the_title();?></h3>
              <?php the_content();?>
            </div>
          </div>
      <?php endwhile;?>

          
          
      </div>
    </div>
  </section><!--/#services-->




		 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
