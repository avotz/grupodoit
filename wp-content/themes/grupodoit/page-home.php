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
                        
                        
                        <h2>Grupo Do It</h2>

                      </div>

                    </div>
                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg')">
                        <div class="banner-slide-title">
                        
                         <h2>Grupo Do It</h2>

                        </div>
                    </div>
                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner3.jpg')">
                        <div class="banner-slide-title">
                        
                        <h2>Grupo Do It</h2>

                        </div>
                    </div>
                    
                           
                  </div>

            </div>


        </div>
        <?php rewind_posts(); ?>
          <?php query_posts('post_type=page&page_id=16'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) :

                  $id = get_post_thumbnail_id($post->ID);
                  $thumb_url = wp_get_attachment_image_src($id, 'item-banner', true);

                ?>
          
                
                <div class="section section-history" id="section-history" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');">
              <?php else: ?>
                   <div class="section section-history" id="section-history">
              <?php endif; ?>
              
                  <div class="info">
                          <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                            <?php the_content(); ?>
                        
                  </div>
              </div>
              <?php endwhile; ?>
              <!-- post navigation -->
              
          <?php endif; ?>
        
        <div class="section section-portfolio" id="section-portfolio">
          <div class="slide" id="portfolio-home" data-anchor="portfolio-home">
                <div class="info-portfolio">
                  <h2>Portfolio</h2>
                  <div class="portfolio-container flex-container-sb">
                      <div class="portfolio-item">
                          <h3><a href="<?php echo esc_url(home_url('/retail-imports')); ?>" data-href="#portfolio/retail-imports">Retail & Import</a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url('/retail-imports')); ?>" data-href="#portfolio/retail-imports"><img src="<?php echo get_template_directory_uri(); ?>/img/retail-import.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item">
                          <h3><a href="<?php echo esc_url(home_url('/real-estate-development')); ?>" data-href="#portfolio/real-estate-development">Real Estate & Development</a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url('/real-estate-development')); ?>" data-href="#portfolio/real-estate-development">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/real-estate.jpg">
                            </a>
                          </div>

                      </div>
                      <div class="portfolio-item">
                          <h3><a href="<?php echo esc_url(home_url('/building-materials')); ?>" data-href="#portfolio/building-materials">Building Materials</a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url('/building-materials')); ?>" data-href="#portfolio/building-materials"><img src="<?php echo get_template_directory_uri(); ?>/img/building-materials.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item">
                          <h3><a href="<?php echo esc_url(home_url('/tourism-page')); ?>" data-href="#portfolio/tourism">Tourism</a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url('/tourism-page')); ?>" data-href="#portfolio/tourism"><img src="<?php echo get_template_directory_uri(); ?>/img/tourism.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item">
                          <h3><a href="<?php echo esc_url(home_url('/gas-stations')); ?>" data-href="#portfolio/gas-station">Gas Stations</a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url('/gas-stations')); ?>" data-href="#portfolio/gas-station"><img src="<?php echo get_template_directory_uri(); ?>/img/gas-station.jpg"></a>
                          </div>
                      </div>
                      <div class="portfolio-item">
                          <h3><a href="<?php echo esc_url(home_url('/non-Profit')); ?>" data-href="#portfolio/non-profit">Non-Profit</a></h3>
                          <div class="portfolio-item-img">
                            <a href="<?php echo esc_url(home_url('/non-Profit')); ?>" data-href="#portfolio/non-profit"><img src="<?php echo get_template_directory_uri(); ?>/img/non-profit.jpg"></a>
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
                    include(locate_template('template-parts/content-slide.php'));
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
                    include(locate_template('template-parts/content-slide.php'));
                     //get_template_part( 'template-parts/content-retail.php'); ?>
                 
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

                      <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                        <?php the_content(); ?>
                    
                  </div>
                </div>
                <?php endwhile; ?>
                <!-- post navigation -->
                
            <?php endif; ?>

          
      </div>

<?php
//get_sidebar();
get_footer();
