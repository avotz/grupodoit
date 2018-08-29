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
 * Template Name: Page Home
 * @package grupodoit
 */

get_header();
?>

	<div id="fullpage">
        <div class="section section-home" id="section-home">
            
            <div class="banner">
                 
                  <div class="banner-slider">
               
                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.jpg')">
                       <div class="banner-slide-title">
                        
                        <?php if(get_locale() == 'es_ES'): ?>
                        <h2>Somos Grupo Do It</h2>
                        <?php else: ?>
                        <h2>We are Grupo Do It</h2>
                        <?php endif; ?>
                      </div>

                    </div>
                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner-do-2it.jpg')">
                        <!-- <div class="banner-slide-title">
                          <?php if (get_locale() == 'es_ES') : ?>
                        <h2>Te ayudamos a construir tu futuro</h2>
                        <?php else : ?>
                        <h2>We help you build the future</h2>
                        <?php endif; ?>
                         

                        </div> -->
                    </div>
                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg')">
                        <div class="banner-slide-title">
                        <?php if (get_locale() == 'es_ES') : ?>
                        <h2>Somos Grupo Do It</h2>
                        <?php else : ?>
                        <h2>We are Grupo Do It</h2>
                        <?php endif; ?>
                         

                        </div>
                    </div>
                    
                    
                           
                  </div>

            </div>
            <a href="#history" class="portfolio-link">
                   <!-- <span>   <?php /*if (get_locale() == 'es_ES') : ?>
                        Haz scroll para conocer nuestro servicios
                        <?php else : ?>
                        Scroll to meet the services
                        <?php endif; */?></span> -->
             		<span class="icon">
             			<i class="fas fa-angle-down"></i>
             			
             		</span>
             	</a>


        </div>
        <?php rewind_posts(); ?>
          <?php query_posts('post_type=page&page_id=16'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) :

                  $id = get_post_thumbnail_id($post->ID);
                  $thumb_url = wp_get_attachment_image_src($id, 'item-banner', true);

                ?>
          
                
                <div class="section section-history" id="section-history" >
              <?php else: ?>
                   <div class="section section-history" id="section-history">
              <?php endif; ?>
                
                  <div class="info flex-container-sb">
                      <div class="info-img animated reveal">
                    
                        <?php $images = rwmb_meta('rw_page_gallery', 'type=image&size=history-thumb');

                        if ($images) : ?>
					
                            <div class="history-gallery flex-container-sb">
                                 
                        
                                <?php foreach ($images as $image) {
                                   
                                    ?>

                                    
                                    <a href="<?php echo esc_url($image['full_url']) ?>" class="history-gallery-item image-link">
                                        <img src="<?php echo esc_url($image['url']) ?>" alt="Foto">
                                    </a>
                                <?php 
                                 } ?>
                                
                            </div>
                        <?php endif; ?>  
                      </div>
                      <div class="info-content">
                            <?php /*the_title('<h2 class="entry-subtitle">', '</h2>');*/ ?>
                            <?php the_content(); ?>
                      </div>
                         
                        
                  </div>
              </div>
              <?php endwhile; ?>
              <!-- post navigation -->
              
          <?php endif; ?>
        
        <div class="section section-portfolio" id="section-portfolio">
            <!-- <a href="#portfolio/" class="custom-fp-prev"></a> -->
          <div class="slide" id="portfolio-home" data-anchor="portfolio-home">
                <div class="info-portfolio">
                  <h2><?php pll_e('Portfolio'); ?></h2>
                  <div class="portfolio-container flex-container-sb">
                      <div class="portfolio-item animated revealslide">
                          <h3><a href="<?php echo esc_url(home_url(pll__('retail-imports'))); ?>" data-href="#portfolio/retail-imports"><?php pll_e('Retail & Import'); ?></a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url(pll__('retail-imports'))); ?>" data-href="#portfolio/retail-imports"><img src="<?php echo get_template_directory_uri(); ?>/img/retail-import.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item animated revealslide">
                          <h3><a href="<?php echo esc_url(home_url(pll__('real-estate-development'))); ?>" data-href="#portfolio/real-estate-development"><?php pll_e('Real Estate & Development'); ?></a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url(pll__('real-estate-development'))); ?>" data-href="#portfolio/real-estate-development">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/real-estate.jpg">
                            </a>
                          </div>

                      </div>
                      <div class="portfolio-item animated revealslide">
                          <h3><a href="<?php echo esc_url(home_url(pll__('building-materials'))); ?>" data-href="#portfolio/building-materials"><?php pll_e('Building Materials'); ?></a></h3>
                          <div class="portfolio-item-img ">
                            <a href="<?php echo esc_url(home_url(pll__('building-materials'))); ?>" data-href="#portfolio/building-materials"><img src="<?php echo get_template_directory_uri(); ?>/img/building-materials.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item animated revealslide">
                          <h3><a href="<?php echo esc_url(home_url(pll__('tourism-page'))); ?>" data-href="#portfolio/tourism"><?php pll_e('Tourism'); ?></a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url(pll__('tourism-page'))); ?>" data-href="#portfolio/tourism"><img src="<?php echo get_template_directory_uri(); ?>/img/tourism.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item animated revealslide">
                          <h3><a href="<?php echo esc_url(home_url(pll__('gas-stations'))); ?>" data-href="#portfolio/gas-station"><?php pll_e('Gas Stations'); ?></a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url(pll__('gas-stations'))); ?>" data-href="#portfolio/gas-station"><img src="<?php echo get_template_directory_uri(); ?>/img/gas-station.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item animated revealslide">
                          <h3><a href="<?php echo esc_url(home_url(pll__('non-Profit'))); ?>" data-href="#portfolio/non-profit"><?php pll_e('Non-Profit'); ?></a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url(pll__('non-Profit'))); ?>" data-href="#portfolio/non-profit"><img src="<?php echo get_template_directory_uri(); ?>/img/non-profit.jpg"></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="slide" id="retail-imports" data-anchor="retail-imports">
               <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=14'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                      $postType = 'retail';
                      include(locate_template('template-parts/content-slide.php'));
                     //get_template_part( 'template-parts/content-retail.php'); ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
              
          </div>
          <div class="slide" id="real-estate-development" data-anchor="real-estate-development">
              <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=29'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                    $postType = 'real-estate';
                    include(locate_template('template-parts/content-slide.php'));
                     //get_template_part( 'template-parts/content-retail.php'); ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
          </div>
          <div class="slide" id="building-materials" data-anchor="building-materials">
               <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=45'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                    $postType = 'building-material';
                    include(locate_template('template-parts/content-slide.php'));
                     //get_template_part( 'template-parts/content-retail.php'); ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
          </div>
          <div class="slide" id="tourism" data-anchor="tourism">
                <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=47'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                    $postType = 'tourism';
                    include(locate_template('template-parts/content-slide-tourism.php'));
                     //get_template_part( 'template-parts/content-retail.php'); ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
          </div>
          <div class="slide" id="gas-station" data-anchor="gas-station">
                <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=53'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                    $postType = 'gas-station';
                    include(locate_template('template-parts/content-slide-gas.php'));
                    //include(locate_template('template-parts/content-slide-gas.php'));
                   ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
          </div>
          <div class="slide" id="non-profit" data-anchor="non-profit">
               <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=63'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                    $postType = 'non-profit';
                    include(locate_template('template-parts/content-slide.php'));
                     //get_template_part( 'template-parts/content-retail.php'); ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
          </div>
            

        </div>
       
            <?php rewind_posts(); ?>
            <?php query_posts('post_type=page&page_id=10'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) :

                        $id = get_post_thumbnail_id($post->ID);
                      $thumb_url = wp_get_attachment_image_src($id, 'item-banner', true);

                      ?>
        
              
              <div class="section section-contact" id="section-contact" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');">
            <?php else : ?>
                <div class="section section-contact" id="section-contact" style="background-color: #DA3A3F">
            <?php endif; ?>
                <div class="info">
                      
                      <div class="info-content">
                           <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                           <div class="social">
                                <a href="#"><span class="icon"><i class="fas fa-mobile-alt"></i></span>2667-0912</a>
                                 <a href="#"><span class="icon"><i class="fas fa-mobile-alt"></i></span>2667-0906</a>
                                 <a href="#"><span class="icon"><i class="fas fa-mobile-alt"></i></span>2667-0907</a>
                                <a href="https://www.google.com/maps/place/El+Lagar+Do+It+Center/@10.5572044,-85.5950125,17z/data=!4m12!1m6!3m5!1s0x8f9fd53076a47e0f:0xf1f9ae736cb9eb35!2sEl+Lagar+Do+It+Center!8m2!3d10.5571991!4d-85.5928238!3m4!1s0x8f9fd53076a47e0f:0xf1f9ae736cb9eb35!8m2!3d10.5571991!4d-85.5928238" target="_blank"><span class="icon"><i class="fas fa-map-marker-alt"></i></span> Comunidad, Guanacaste </a>
                                <a href="#"><span class="icon"><i class="fas fa-envelope"></i></span> info@grupodoit.com </a>
                            </div>
                            <?php the_content(); ?>

                            
                      </div>
                         
                        
                  </div>
                 
                </div>
                <?php endwhile; ?>
                <!-- post navigation -->
                
            <?php endif; ?>

          
      </div>

<?php
//get_sidebar();
get_footer();
