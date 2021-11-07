<?php

function gutener_education_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Primary Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'site_primary_color',
		'section'      => 'colors',
		'default'      => '#f14d5d',
		'priority'     => '50',
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Header Layouts', 'gutener-education' ),
		'description' => esc_html__( 'Select layout & scroll below to change its options', 'gutener-education' ),
		'type'        => 'radio-image',
		'settings'    => 'header_layout',
		'section'     => 'header_style_options',
		'default'     => 'header_two',
		'choices'  => array(
			'header_one'    => get_template_directory_uri() . '/assets/images/header-layout-1.png',
			'header_two'    => get_template_directory_uri() . '/assets/images/header-layout-2.png',
			'header_three'  => get_template_directory_uri() . '/assets/images/header-layout-3.png',
		)
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Site Title', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'site_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '700',
			'font-size'      => '24px',
			'text-transform' => 'none',
			'line-height'    => '1.2',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.site-header .site-branding .site-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Site Description', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'site_description_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => 'normal',
			'font-size'      => '14px',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => '.site-header .site-branding .site-description',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Main Menu', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'main_menu_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'font-size'      => '17px',
			'text-transform' => 'none',
			'variant'        => '500',
			'line-height'    => '1.5',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => array( '.main-navigation ul.menu li a', '.slicknav_menu .slicknav_nav li a' )
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Main Menu Description', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'main_menu_description_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'font-size'      => '11px',
			'text-transform' => 'none',
			'variant'        => 'normal',
			'line-height'    => '1.3',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => array( '.main-navigation .menu-description, .slicknav_menu .menu-description' ),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Body', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'body_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => 'normal',
			'font-size'      => '15px',
		),
		'transport'   => 'auto',
		'output' => array( 
			array(
				'element' => 'body',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'General Title (H1 - H6)', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'general_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '600',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ),
			),
		),	
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Page & Single Post Title', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'page_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '600',
			'font-size'      => '48px',
			'text-transform' => 'capitalize',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => array( '.page-title' ),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Homepage Section Title', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'section_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'font-size'      => '24px',
			'variant'        => '500',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => 'h2.section-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'main_slider_title_font_control',
		'section'      => 'main_slider_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '700',
			'font-size'      => '50px',
			'text-transform' => 'uppercase',
			'line-height'    => '1.4',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.section-banner .banner-content .entry-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
			array(
				'setting'  => 'hide_slider_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Meta Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'main_slider_meta_font_control',
		'section'      => 'main_slider_options',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => '400',
			'font-size'      => '13px',
			'text-transform' => 'capitalize',
			'line-height'    => '1.6',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.section-banner .banner-content .entry-meta a',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
			array(
				array(
				'setting'  => 'hide_slider_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_slider_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_slider_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'slider_post_category_color',
		'section'      => 'main_slider_options',
		'default'      => '#ebebeb',
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
			array(
				'setting'  => 'skin_select',
				'operator' => 'contains',
				'value'    => array( 'default', 'blackwhite' ),
			),
			array(
				'setting'  => 'hide_slider_category',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Meta Icon Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'slider_post_meta_icon_color',
		'section'      => 'main_slider_options',
		'default'      => '#ebebeb',
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
			array(
				'setting'  => 'skin_select',
				'operator' => 'contains',
				'value'    => array( 'default', 'blackwhite' ),
			),
			array(
				array(
				'setting'  => 'hide_slider_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_slider_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_slider_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Section Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'highlight_posts_section_title_font_control',
		'section'      => 'highlight_posts_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '600',
			'font-size'      => '30px',
			'text-transform' => 'none',
			'line-height'    => '1.2',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.section-highlight-posts-area .section-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_highlight_posts_section_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Post Text Alignment', 'gutener-education' ),
		'type'        => 'select',
		'settings'    => 'highlight_posts_text_alignment',
		'section'     => 'highlight_posts_options',
		'default'     => 'text-left',
		'choices'     => array(
			'text-left'	 	=> esc_html__( 'Left', 'gutener-education' ),
			'text-center'  	=> esc_html__( 'Center', 'gutener-education' ),   
			'text-right'	=> esc_html__( 'Right', 'gutener-education' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'highlight_posts_section_layouts',
				'operator' => '==',
				'value'    => array( 'highlighted_one' ),
			),
		),
	) );


	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Post Content Alignment', 'gutener-education' ),
		'type'        => 'select',
		'settings'    => 'highlight_posts_title_alignment',
		'section'     => 'highlight_posts_options',
		'default'     => 'align-bottom',
		'choices'     => array(
			'align-top'	 	=> esc_html__( 'Top', 'gutener-education' ),
			'align-center'  => esc_html__( 'Center', 'gutener-education' ),   
			'align-bottom'  => esc_html__( 'Bottom', 'gutener-education' ),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'highlight_posts_cat_font_control',
		'section'      => 'highlight_posts_options',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => '400',
			'font-size'      => '13px',
			'text-transform' => 'uppercase',
			'line-height'    => '1',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.post .highlight-posts-content .cat-links a',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'hide_highlight_posts_category',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'highlight_posts_font_control',
		'section'      => 'highlight_posts_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '500',
			'font-size'      => '18px',
			'text-transform' => 'uppercase',
			'line-height'    => '1.4',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.post .highlight-posts-content .highlight-posts-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_highlight_posts_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post View Number', 'gutener-education' ),
		'description'  => esc_html__( 'Number of posts to show.', 'gutener-education' ),
		'type'         => 'number',
		'settings'     => 'highlight_posts_posts_number',
		'section'      => 'highlight_posts_options',
		'default'      => 3,
		'choices' => array(
			'min' => '1',
			'max' => '48',
			'step' => '1',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Meta Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'highlight_posts_meta_font_control',
		'section'      => 'highlight_posts_options',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => '400',
			'font-size'      => '13px',
			'text-transform' => 'capitalize',
			'line-height'    => '1.6',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.post .highlight-posts-content .entry-meta a',
			),
		),
		'active_callback' => array(
			array(
				array(
				'setting'  => 'hide_highlight_posts_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_highlight_posts_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_highlight_posts_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );
 
	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Section Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'latest_posts_section_title_font_control',
		'section'      => 'latest_posts_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '600',
			'font-size'      => '30px',
			'text-transform' => 'none',
			'line-height'    => '1.2',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.section-post-area .section-title-wrap .section-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_latest_posts_section_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'blog_post_category_color',
		'section'      => 'blog_page_style_options',
		'default'      => '#f14d5d',
		'active_callback' => array(
			array(
				'setting'  => 'hide_category',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Meta Icon Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'blog_post_meta_icon_color',
		'section'      => 'blog_page_style_options',
		'default'      => '#f14d5d',
		'active_callback' => array(
			array(
				'setting'  => 'skin_select',
				'operator' => 'contains',
				'value'    => array( 'default', 'blackwhite' ),
			),
			array(
				array(
				'setting'  => 'hide_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Post Layouts', 'gutener-education' ),
		'description' => esc_html__( 'Grid / List / Single', 'gutener-education' ),
		'type'        => 'radio-image',
		'settings'    => 'archive_post_layout',
		'section'     => 'blog_page_style_options',
		'default'     => 'list',
		'choices'  => array(
			'grid'           => get_template_directory_uri() . '/assets/images/grid-layout.png',
			'list'           => get_template_directory_uri() . '/assets/images/list-layout.png',
			'single'         => get_template_directory_uri() . '/assets/images/single-layout.png',
		)
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'blog_page_title_font_control',
		'section'      => 'blog_page_style_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '500',
			'font-size'      => '24px',
			'text-transform' => 'none',
			'line-height'    => '1.4',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '#primary article .entry-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'hide_post_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Meta Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'blog_post_meta_font_control',
		'section'      => 'blog_page_style_options',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => '400',
			'font-size'      => '13px',
			'text-transform' => 'capitalize',
			'line-height'    => '1.6',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '#primary .entry-meta',
			),
		),
		'active_callback' => array(
			array(
				array(
				'setting'  => 'hide_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Section Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'feature_posts_section_title_font_control',
		'section'      => 'feature_posts_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '600',
			'font-size'      => '30px',
			'text-transform' => 'none',
			'line-height'    => '1.2',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.section-feature-post .section-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_feature_posts_section_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
	
	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'feature_posts_cat_font_control',
		'section'      => 'feature_posts_options',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => '400',
			'font-size'      => '13px',
			'text-transform' => 'capitalize',
			'line-height'    => '1',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.feature-post-slider .post-inner .cat-links a',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'hide_feature_posts_category',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'feature_posts_title_font_control',
		'section'      => 'feature_posts_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '500',
			'font-size'      => '18px',
			'text-transform' => 'none',
			'line-height'    => '1.4',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.feature-post-slider .post-content-wrap .entry-content .entry-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'hide_feature_posts_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Meta Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'feature_posts_meta_font_control',
		'section'      => 'feature_posts_options',
		'default'  => array(
			'font-family'    => 'Open Sans',
			'variant'        => '400',
			'font-size'      => '13px',
			'text-transform' => 'capitalize',
			'line-height'    => '1.6',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.feature-post-slider .post-content-wrap .entry-meta a',
			),
		),
		'active_callback' => array(
			array(
				array(
				'setting'  => 'hide_feature_posts_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_feature_posts_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_feature_posts_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Background Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'feature_post_category_bgcolor',
		'section'      => 'feature_posts_options',
		'default'      => '#f14d5d',
		'active_callback' => array(
			array(
				'setting'  => 'skin_select',
				'operator' => 'contains',
				'value'    => array( 'default', 'blackwhite' ),
			),
			array(
				'setting'  => 'hide_feature_posts_category',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Meta Icon Color', 'gutener-education' ),
		'type'         => 'color',
		'settings'     => 'feature_post_meta_icon_color',
		'section'      => 'feature_posts_options',
		'default'      => '#f14d5d',
		'active_callback' => array(
			array(
				'setting'  => 'skin_select',
				'operator' => 'contains',
				'value'    => array( 'default', 'blackwhite' ),
			),
			array(
				array(
				'setting'  => 'hide_feature_posts_date',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_feature_posts_author',
				'operator' => '==',
				'value'    => false,
				),
				array(
				'setting'  => 'hide_feature_posts_comment',
				'operator' => '==',
				'value'    => false,
				),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Bottom Footer Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'footer_style_font_control',
		'section'      => 'footer_style_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '400',
			'font-size'      => '14px',
			'text-transform' => 'none',
			'line-height'    => '1.6',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array( '.site-footer .site-info', '.site-footer .footer-menu ul li a' ),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Footer Layouts', 'gutener-education' ),
		'type'        => 'radio-image',
		'settings'    => 'footer_layout',
		'section'     => 'footer_style_options',
		'default'     => 'footer_two',
		'choices'  => array(
			'footer_one'   => get_template_directory_uri() . '/assets/images/footer-layout-1.png',
			'footer_two'   => get_template_directory_uri() . '/assets/images/footer-layout-2.png',
			'footer_three' => get_template_directory_uri() . '/assets/images/footer-layout-3.png',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Widget Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'sidebar_widget_title_font_control',
		'section'      => 'sidebar_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '500',
			'font-size'      => '16px',
			'text-transform' => 'uppercase',
			'line-height'    => '1.4',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.sidebar .widget .widget-title',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'sidebar_settings',
				'operator' => 'contains',
				'value'    => array( 'right', 'left', 'right-left' ),
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Widget Title Typography', 'gutener-education' ),
		'type'         => 'typography',
		'settings'     => 'footer_widget_title_font_control',
		'section'      => 'footer_widgets_options',
		'default'  => array(
			'font-family'    => 'Roboto',
			'variant'        => '500',
			'font-size'      => '18px',
			'text-transform' => 'none',
			'line-height'    => '1.4',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.site-footer .widget .widget-title',
			),
		),
	) );

}
add_action( 'init', 'gutener_education_kirki_fields', 999, 1 );