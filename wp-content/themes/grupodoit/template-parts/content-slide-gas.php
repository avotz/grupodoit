<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grupodoit
 */
$first = false;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content();

		
        ?>
         <?php
        $args = array(
            'post_type' => $postType,
            'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
            'posts_per_page' => 1
            

        );


        $items = new WP_Query($args);

        if ($items->have_posts()) {
            ?>
             <div class="portfolio-container slide-gas flex-container-sa">
              <?php while ($items->have_posts()) {
                    $items->the_post();
                    if(!$first){

                        $firstPostID = $post->ID;
                        $first = true;
                    }
                    ?>
                   

                        <div class="info flex-container-sb">
                            <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                              $thumb_url = wp_get_attachment_image_src($id, 'large', true);

                            ?>
                                    
                                    
                                <div class="info-img animated reveal" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>">
                                        <?php 
                                        $link = rwmb_meta('rw_service_external_link');
                                        $link_name = rwmb_meta('rw_service_external_link_name');
                                        if ($link) : ?>
                                            <a href="<?= $link ?>" title="<?= $link_name ? $link_name : $link ?>" class="external-link-img" target="_blank"></a>
                                        <?php endif; ?>
                                    
                                </div>
                                    
                                    
                            <?php endif; ?>
                        
                                <div class="info-content">
                                        <?php the_title('<h2 class="entry-subtitle">', '</h2>'); ?>
                                        <?php the_content(); ?>
                                        <?php 
                                        $link = rwmb_meta('rw_service_external_link');
                                        $link_name = rwmb_meta('rw_service_external_link_name');
                                        if ($link) : ?>
                                            <a href="<?= $link ?>" title="<?= $link_name ? $link_name : $link ?>" class="external-link" target="_blank"><?= $link_name ? $link_name : $link ?> <i class="fas fa-external-link-alt"></i></a>
                                        <?php 
                                        endif; ?>


                                </div>
                            
                            
                        </div>
               
                   
                    
                                
                                <?php

                            } ?>
                </div>
        
            


                  <?php 
                }


                ?>

            <div id="gas-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
                    <div class="popup-container">
                   
                       
                            <?php
                                $args = array(
                                    'post__not_in' => array($firstPostID),
                                    'post_type' => $postType,
                                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                                    'posts_per_page' => 10


                                );


                                $items = new WP_Query($args);

                                if ($items->have_posts()) {
                                    ?>
                                <div class="portfolio-container flex-container-sa">
                                <?php while ($items->have_posts()) {
                                        $items->the_post();

                                        ?>
                                    <div class="portfolio-item animated revealslide">
                                            <!-- <h3> <?php /*the_title()*/ ?></h3> -->
                                            <div class="portfolio-item-img featured">
                                                <?php if (has_post_thumbnail()) :

                                                    $id = get_post_thumbnail_id($post->ID);
                                                $thumb_url = wp_get_attachment_image_src($id, 'portfolio-thumb', true);

                                                ?>
                                                    
                                                    
                                                    
                                                    <img src="<?php echo esc_url($thumb_url[0]) ?>">
                                                    
                                                <?php endif; ?>
                                            
                                            </div>
                                            <div class="portfolio-item-content">
                                                <?php the_content() ?>
                                            </div>
                                        </div>
                                
                                    
                                        
                                                    
                                                    <?php

                                                } ?>
                                    </div>
                            
                                


                                    <?php 
                                    }


                                    ?>
           
                </div>
    
            </div>
       
       
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
