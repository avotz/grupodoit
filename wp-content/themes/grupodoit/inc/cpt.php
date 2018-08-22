<?php

function grupodoit_meta_box($meta_boxes)
{
    $prefix = 'rw_';

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'grupodoit'),
        'post_types' => array('page'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'page_gallery',
                'name' => esc_html__('Gallery', 'grupodoit'),
                'type' => 'image_advanced',
                'image_size' => 'thumbnail'
            ),
            array(
                'id' => $prefix . 'author_name',
                'name' => esc_html__('Author Name', 'occ'),
                'type' => 'text',

            ),
           
        ),
    );
    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'grupodoit'),
        'post_types' => array('retail','tourism','building-material','real-estate','gas-station','no-profit'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'service_gallery',
                'name' => esc_html__('Gallery', 'grupodoit'),
                'type' => 'image_advanced',
                'image_size' => 'thumbnail'
            ),
            array(
                'id' => $prefix . 'service_external_link',
                'name' => esc_html__('Link', 'grupodoit'),
                'type' => 'url',

            ),
            array(
                'id' => $prefix . 'service_external_link_name',
                'name' => esc_html__('Link Name', 'grupodoit'),
                'type' => 'text',

            ),

        ),
    );


    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'grupodoit_meta_box');