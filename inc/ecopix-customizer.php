<?php 




if (class_exists('Kirki')) {


    


    new \Kirki\Section(
        'layout_section',
        [
            'title'       => esc_html__( 'Layout', 'ecopix' ),
            'priority'    => 3,
        ]
    );

    new \Kirki\Field\Slider(
        [
            'settings'    => 'content_spacing',
            'label'       => esc_html__( 'Content Area Spacing', 'ecopix' ),
            'description' => esc_html__('Adjusts the spacing between the main content area and the header and footer.','ecopix'),
            'section'     => 'layout_section',
            'default'     => 10,
            'choices'     => [
                'min'  => 0,
                'max'  => 500,
                'step' => 1,
            ],
        ]
    );

    new \Kirki\Field\Select(
        [
            'settings'    => 'entry_content_layout',
            'label'       => esc_html__( 'Select Entry Content Layout', 'ecopix' ),
            'section'     => 'layout_section',
            'default'     => 'container',
            'placeholder' => esc_html__( 'Choose an option', 'ecopix' ),
            'choices'     => [
                'container' => esc_html__( 'Container', 'ecopix' ),
                'container_fluid' => esc_html__( 'Container Fluid', 'ecopix' )
            ],
        ]
    );


    new \Kirki\Section(
        'header_section',
        [
            'title'       => esc_html__( 'Header', 'ecopix' ),
            'priority'    => 5,
        ]
    );


    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'header_menu_alignment',
            'label'       => esc_html__( 'Menu Alignment', 'ecopix' ),
            'section'     => 'header_section',
            'default'     => 'left',
            'priority'    => 10,
            'choices'     => [
                'left'   => get_template_directory_uri() . '/assets/images/left.png',
                'center' => get_template_directory_uri() . '/assets/images/center.png',
                'right'  => get_template_directory_uri() . '/assets/images/right.png',
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'header_typography_setting', 
            'label'       => esc_html__( 'Header Typography', 'ecopix' ),
            'section'     => 'header_section',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '500',
                'font-style'      => 'normal',
                'color'           => '#343b50',
                'font-size'       => '16px',
                'text-transform'  => 'uppercase',
                'text-decoration' =>'none',
                'letter-spacing'  =>'0px',
            ],
            'output'      => [
                [
                    'element' => '#header-navigation .header-menu .nav-link',
                ],
            ],
        ]
    );

    new \Kirki\Field\Slider(
        [
            'settings'    => 'menu_link_space',
            'label'       => esc_html__( 'Menu items spacing', 'ecopix' ),
            'section'     => 'header_section',
            'default'     => 20,
            'choices'     => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'active_menu_item_color',
            'label'       => __( 'Active menu link color', 'ecopix' ),
            'section'     => 'header_section',
            'default'     => '#0C1465',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'hover_menu_item_color',
            'label'       => __( 'Hover menu link color', 'ecopix' ),
            'section'     => 'header_section',
            'default'     => '#0C1465',
        ]
    );

    new \Kirki\Section(
        'footer_section',
        [
            'title'       => esc_html__( 'Footer', 'ecopix' ),
            'priority'    => 6,
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'footer_background',
            'label'       => __( 'Footer Background', 'ecopix' ),
            'section'     => 'footer_section',
            'default'     => '#343B50',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'footer_text_color',
            'label'       => __( 'Footer Base Text Color', 'ecopix' ),
            'section'     => 'footer_section',
            'default'     => '#fff',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'footer_heading_color',
            'label'       => __( 'Footer Heading Color', 'ecopix' ),
            'section'     => 'footer_section',
            'default'     => '#fff',
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings'    => 'copyright_text',
            'label'       => esc_html__( 'Copyright Text', 'ecopix' ),
            'section'     => 'footer_section',
            'default'     => 'Copyright © 2023 - WordPress Theme by Mahin',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'footer_copyright_separator',
            'label'       => __( 'Copyright text separator color', 'ecopix' ),
            'section'     => 'footer_section',
            'default'     => '#a3a3a3',
        ]
    );


    new \Kirki\Section(
        'sidebar_section',
        [
            'title'       => esc_html__( 'Sidebar', 'ecopix' ),
            'priority'    => 7,
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'sidebar_switch',
            'label'       => esc_html__( 'Sidebar Show & Hide', 'ecopix' ),
            'description' => esc_html__( 'Show or Hide sidebar by using this switch', 'ecopix' ),
            'section'     => 'sidebar_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'ecopix' ),
                'off' => esc_html__( 'Disable', 'ecopix' ),
            ],
        ]
    );

    new \Kirki\Field\Select(
        [
            'settings'    => 'sidebar_position',
            'label'       => esc_html__( 'Select sidebar position', 'ecopix' ),
            'section'     => 'sidebar_section',
            'default'     => 'right',
            'placeholder' => esc_html__( 'Choose an option', 'ecopix' ),
            'choices'     => [
                'right' => esc_html__( 'Right', 'ecopix' ),
                'left' => esc_html__( 'Left', 'ecopix' )
            ],
        ]
    );


    new \Kirki\Field\Slider(
        [
            'settings'    => 'sidebar_widget_vertical_spacing',
            'label'       => esc_html__( 'Widget Vertical Spacing', 'ecopix' ),
            'section'     => 'sidebar_section',
            'default'     => 0,
            'choices'     => [
                'min'  => 0,
                'max'  => 300,
                'step' => 1,
            ],
        ]
    );


    new \Kirki\Field\Radio_Buttonset(
        [
            'settings'    => 'mobile_sidebar_position',
            'label'       => esc_html__( 'Mobile Sidebar Position', 'ecopix' ),
            'section'     => 'sidebar_section',
            'default'     => 'bottom',
            'priority'    => 10,
            'choices'     => [
                'bottom'   => esc_html__( 'Bottom', 'ecopix' ),
                'top' => esc_html__( 'Top', 'ecopix' ),
            ],
        ]
    );



    Kirki::add_section( 'global_color', array(
        'title'          => esc_attr__( 'Global Colors', 'ecopix' ),
        'priority'       => 8,
        'capability'     => 'edit_theme_options',
    ) );


    new \Kirki\Field\Color(
        [
            'settings'    => 'base_text_color',
            'label'       => __( 'Base Text', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#7a6d6d',
        ]
    );
    
 
    new \Kirki\Field\Color(
        [
            'settings'    => 'link_color',
            'label'       => __( 'Links', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#7a6d6d',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'link_hover_color',
            'label'       => __( 'Links Hover', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#484545',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'all_heading_color',
            'label'       => __( 'All Headings [ h1 - h6 ]', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'heading1_color',
            'label'       => __( 'Heading 1 (H1)', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'heading2_color',
            'label'       => __( 'Heading 2 (H2)', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'heading3_color',
            'label'       => __( 'Heading 3 (H3)', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'heading4_color',
            'label'       => __( 'Heading 4 (H4)', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );
    

    new \Kirki\Field\Color(
        [
            'settings'    => 'heading5_color',
            'label'       => __( 'Heading 5 (H5)', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'heading6_color',
            'label'       => __( 'Heading 6 (H6)', 'ecopix' ),
            'section'     => 'global_color',
            'default'     => '#0c1465',
        ]
    );

    new \Kirki\Panel(
        'typography_panel',
        [
            'title'       => esc_html__( 'Typography', 'ecopix' ),
            'priority'    => 9,
        ]
    );

    new \Kirki\Section(
        'base_font_expand',
        [
            'title'       => esc_html__( 'Base Font', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'base_font_typography',
            'section'     => 'base_font_expand',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'font-size'       => '16px',
                'line-height'     => '1.3em',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'body',
                ],
            ],
        ]
    );


    new \Kirki\Section(
        'heading1_font',
        [
            'title'       => esc_html__( 'Heading 1 (H1)', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading1_font_typography',
            'section'     => 'heading1_font',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '700',
                'font-style'      => 'normal',
                'font-size'       => '40px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'h1',
                ],
            ],
        ]
    );


    new \Kirki\Section(
        'heading2_font',
        [
            'title'       => esc_html__( 'Heading 2 (H2)', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading2_font_typography',
            'section'     => 'heading2_font',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '700',
                'font-style'      => 'normal',
                'font-size'       => '36px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'h2',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'heading3_font',
        [
            'title'       => esc_html__( 'Heading 3 (H3)', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading3_font_typography',
            'section'     => 'heading3_font',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '700',
                'font-style'      => 'normal',
                'font-size'       => '30px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'h3',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'heading4_font',
        [
            'title'       => esc_html__( 'Heading 4 (H4)', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading4_font_typography',
            'section'     => 'heading4_font',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '700',
                'font-style'      => 'normal',
                'font-size'       => '25px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'h4',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'heading5_font',
        [
            'title'       => esc_html__( 'Heading 5 (H5)', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading5_font_typography',
            'section'     => 'heading5_font',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '700',
                'font-style'      => 'normal',
                'font-size'       => '20px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'h5',
                ],
            ],
        ]
    );


    new \Kirki\Section(
        'heading6_font',
        [
            'title'       => esc_html__( 'Heading 6 (H6)', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading6_font_typography',
            'section'     => 'heading6_font',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '700',
                'font-style'      => 'normal',
                'font-size'       => '16px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => 'h6',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'button_link',
        [
            'title'       => esc_html__( 'Button', 'ecopix' ),
            'priority'    => 9,
            'panel'      =>'typography_panel',
            'type'         =>'expanded'
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'button_typography',
            'section'     => 'button_link',
            'priority'    => 9,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Jost',
                'variant'         => '500',
                'font-style'      => 'normal',
                'font-size'       => '18px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
            ],
            'output'      => [
                [
                    'element' => '.wp-block-button__link',
                ],
            ],
        ]
    );
    
    
    
}

