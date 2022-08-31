<?php/** * Footer */bring_back_Kirki::add_panel('footer_panel', array(    'title' => esc_html__('Footer', 'bring-back'),    'description' => esc_html__('Footer General Settings', 'bring-back'),    'priority' => 80,));// Footer Layoutbring_back_Kirki::add_section('footer_layout_section', array(    'title' => esc_html__('General Settings', 'bring-back'),    'panel' => 'footer_panel',    'priority' => 5,));// Footer Columnsbring_back_Kirki::add_field('bring_back', array(    'type' => 'select',    'settings' => 'footer_columns',    'label' => __('Number of widgets columns', 'bring-back'),    'section' => 'footer_layout_section',    'default' => 'four',    'multiple' => 1,    'choices' => array(        'two' => esc_html__('Two', 'bring-back'),        'three' => esc_html__('Three', 'bring-back'),        'four' => esc_html__('Four', 'bring-back'),    ),));// Footer Topbring_back_Kirki::add_section('footer_top_section', array(    'title' => esc_html__('Footer Top', 'bring-back' ),    'description' => esc_html__( 'This section called CTA ( Call To Action )', 'bring-back' ),    'panel' => 'footer_panel',    'priority' => 5));// Enable Footer Topbring_back_Kirki::add_field('bring_back', array(    'type' => 'toggle',    'settings' => 'enable_footer_top',    'label' => __( 'Enable Footer Top?', 'bring-back' ),    'section' => 'footer_top_section',    'default' => '0'));//  TXTbring_back_Kirki::add_field( 'bring_back', array(    'type'     => 'textarea',    'settings' => 'footer_top_text',    'label'    => esc_html__( 'Text', 'bring-back' ),    'section'  => 'footer_top_section',    'default'     => '') );// Button TXT/URLbring_back_Kirki::add_field( 'bring_back', array(    'type'     => 'text',    'settings' => 'footer_top_btn_text',    'label'    => esc_html__( 'Button Text', 'bring-back' ),    'section'  => 'footer_top_section',    'default'     => '') );bring_back_Kirki::add_field( 'bring_back', array(    'type'     => 'link',    'settings' => 'footer_top_btn_url',    'label'    => __( 'Button URL', 'bring-back' ),    'section'  => 'footer_top_section',    'default'     => ''));// Footer Designbring_back_Kirki::add_section('footer_design', array(    'title' => esc_html__('Footer Design', 'bring-back'),    'panel' => 'footer_panel',    'priority' => 15,));// Footer Top Paddingbring_back_Kirki::add_field('bring_back', array(    'type' => 'slider',    'settings' => 'footer_padding',    'label' => esc_html__('Footer Padding Top', 'bring-back'),    'section' => 'footer_design',    'default' => '155',    'choices' => array(        'min' => '12',        'max' => '200',        'step' => '1',    ),    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer',            'property' => 'padding-top',            'units' => 'px',        ),    ),));// Footer Top Marginbring_back_Kirki::add_field('bring_back', array(    'type' => 'slider',    'settings' => 'footer_margin',    'label' => esc_html__('Footer Margin Top', 'bring-back'),    'section' => 'footer_design',    'default' => '40',    'choices' => array(        'min' => '0',        'max' => '60',        'step' => '1',    ),    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer',            'property' => 'margin-top',            'units' => 'px',        ),    ),));// Footer BG Shapebring_back_Kirki::add_field('bring_back', array(    'type' => 'image',    'settings' => 'footer_bg_shape',    'label' => __('Footer BG Shape', 'bring-back'),    'section' => 'footer_design',    'description' => esc_html__( 'This shape/image append left ( You can use Full width BG image )', 'bring-back' ),    'transport' => 'auto',    'default' => get_template_directory_uri() . '/images/shape/shape-2.jpg',    'output' => array(        array(            'element' => '.footer',            'property' => 'background-image',        ),    ),));// Footer Background Colorbring_back_Kirki::add_field('bring_back', array(    'type' => 'color',    'settings' => 'footer_bg',    'label' => __('Footer Background Color', 'bring-back'),    'section' => 'footer_design',    'default' => '',    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer',            'property' => 'background-color',        ),    ),));// Footer Title Colorbring_back_Kirki::add_field('bring_back', array(    'type' => 'color',    'settings' => 'footer_title_color',    'label' => __('Footer Title Color', 'bring-back'),    'section' => 'footer_design',    'default' => '#232323',    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer-widget-title',            'property' => 'color',        ),    ),));// Footer Text Colorbring_back_Kirki::add_field('bring_back', array(    'type' => 'color',    'settings' => 'footer_text_color',    'label' => __('Footer Text Color', 'bring-back'),    'section' => 'footer_design',    'default' => '#78787c',    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer,.footer a,.footer p,.widget_nav_menu .menu a',            'property' => 'color',        ),    ),));// Footer Title Font Sizebring_back_Kirki::add_field('bring_back', array(    'type' => 'slider',    'settings' => 'footer_title_font_size',    'label' => esc_html__('Footer Heading Size', 'bring-back'),    'section' => 'footer_design',    'default' => '15',    'choices' => array(        'min' => '12',        'max' => '30',        'step' => '1',    ),    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer-widget-title,.footer h4',            'property' => 'font-size',            'units' => 'px',        ),    ),));// Footer Text Font Sizebring_back_Kirki::add_field('bring_back', array(    'type' => 'slider',    'settings' => 'footer_text_font_size',    'label' => esc_html__('Footer Text Size', 'bring-back'),    'section' => 'footer_design',    'default' => '17',    'choices' => array(        'min' => '8',        'max' => '50',        'step' => '1',    ),    'transport' => 'auto',    'output' => array(        array(            'element' => '.footer,.footer a,.footer p,.widget_nav_menu .menu a',            'property' => 'font-size',            'units' => 'px',        ),    ),));// Footer Copyrightbring_back_Kirki::add_section('footer_copyright_section', array(    'title' => esc_html__('Footer Copy Right', 'bring-back'),    'panel' => 'footer_panel',    'priority' => 20,));bring_back_Kirki::add_field('bring_back', array(    'type' => 'text',    'settings' => 'footer_copyright',    'label' => esc_html__('Copy Right Text', 'bring-back'),    'section' => 'footer_copyright_section',    'default' => 'Bring Back Powered By Themetim',    'transport' => 'auto',    'priority' => 10));