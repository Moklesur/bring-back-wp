<?php

/**
 * Single Blog template
 */

bring_back_Kirki::add_section('single_blog_section', array(
    'title' => esc_html__('Single Blog', 'bring-back'),
    'priority' => 61,
));


// sidebar template

bring_back_Kirki::add_field('bring_back', array(
    'type' => 'select',
    'settings' => 'sidebar_type',
    'label' => __('Choose sidebar template', 'bring-back'),
    'section' => 'single_blog_section',
    'default' => 'left',
    'multiple' => 1,
    'choices' => array(
        'left' => esc_html__('Left Sidebar', 'bring-back'),
        'right' => esc_html__('Right sidebar', 'bring-back')
    ),
));
