<?php
/**
* Loads all the components related to customizer 
*
* @since Gutener Education 1.0.0
*/

function gutener_education_default_styles(){

	// begin style block
	$css = '<style>';
	$site_primary_color = get_theme_mod( 'site_primary_color', '#f14d5d' );
	$css .= '
		/* Primary Background */
		.section-title:before, .button-primary, body.woocommerce span.onsale, body.woocommerce-page span.onsale, body .woocommerce.widget_price_filter .ui-slider .ui-slider-handle, #offcanvas-menu .header-btn-wrap .header-btn .button-primary {
			background-color: '. esc_attr( $site_primary_color ) .';
		}
		/* Primary Border */		
		.post .entry-content .entry-header .cat-links a, .attachment .entry-content .entry-header .cat-links a, .wrap-coming-maintenance-mode .content .button-container .button-primary {
			border-color: '. esc_attr( $site_primary_color ) .';
		}
		/* Primary Color */
	 	blockquote:before, .post .entry-content .entry-header .cat-links a, .attachment .entry-content .entry-header .cat-links a, .post .entry-meta a:before, .attachment .entry-meta a:before, .single .entry-container .cat-links:before, .post .entry-meta .tag-links:before {
			color: '. esc_attr( $site_primary_color ) .';
		}
	';

	# Post Slider
	$slider_post_category_color 	= get_theme_mod( 'slider_post_category_color', '#ebebeb' );
	$slider_post_meta_icon_color 	= get_theme_mod( 'slider_post_meta_icon_color', '#ebebeb' );
	$css .= '
		.banner-content .entry-content .entry-header .cat-links a {
			color: '. esc_attr( $slider_post_category_color) .';
			border-color: '. esc_attr( $slider_post_category_color) .';
		}
		.section-banner .banner-content .entry-meta a:before {
			color: '. esc_attr( $slider_post_meta_icon_color) .';
		}
	';

	# Blog Homepage
	# Highlight Post
	$highlight_post_category_bgcolor = get_theme_mod( 'highlight_post_category_bgcolor', '' );
	$highlight_post_category_bgcolor = $highlight_post_category_bgcolor ? $highlight_post_category_bgcolor : $site_primary_color;
	 $css .= '
		.highlight-posts-layout-one .highlight-posts-content .cat-links a {
			background-color: '. esc_attr( $highlight_post_category_bgcolor ) .';
		}
	';
    #Blog Page
    $blog_post_category_color 	= get_theme_mod( 'blog_post_category_color', '#f14d5d' );
    $blog_post_meta_icon_color 	= get_theme_mod( 'blog_post_meta_icon_color', '#f14d5d' );
    $css .= '
    	#primary article .entry-content .entry-header .cat-links a,
    	#primary article .attachment .entry-content .entry-header .cat-links a {
    		color: '. esc_attr( $blog_post_category_color ) .';
    	}
    	#primary article .entry-content .entry-header .cat-links a {
    		border-color: '. esc_attr( $blog_post_category_color ) .';
    	}
    	#primary article .entry-meta a:before {
    		color: '. esc_attr( $blog_post_meta_icon_color ) .';
    	}
    ';

    #Highlighted Posts Title Alignment
	if( get_theme_mod( 'highlight_posts_title_alignment', 'align-bottom' ) == 'align-bottom' ){
		$css .= '
	    	.highlight-posts-layout-one .highlight-posts-image {
				-webkit-align-items: flex-end;
	    		-moz-align-items: flex-end;
	    		-ms-align-items: flex-end;
	    		-ms-flex-align: flex-end;
	    		align-items: flex-end;
	    	}
	    	.highlight-posts-layout-one .highlight-posts-content {
	    		margin-bottom: 20px;
	    	}
		';
	}elseif( get_theme_mod( 'highlight_posts_title_alignment', 'align-bottom' ) == 'align-top' ) {
		$css .= '
			.highlight-posts-layout-one .highlight-posts-image {
				-webkit-align-items: flex-start;
	    		-moz-align-items: flex-start;
	    		-ms-align-items: flex-start;
	    		-ms-flex-align: flex-start;
	    		align-items: flex-start;
	    	}
	    	.highlight-posts-layout-one .highlight-posts-content {
	    		margin-top: 20px;
	    	}
		';
	}elseif( get_theme_mod( 'highlight_posts_title_alignment', 'align-bottom' ) == 'align-center' ) {
		$css .= '
			.highlight-posts-layout-one .highlight-posts-image {
				-webkit-align-items: center;
	    		-moz-align-items: center;
	    		-ms-align-items: center;
	    		-ms-flex-align: center;
	    		align-items: center;
	    	}
		';
	}
	# Feature Post
	$feature_post_category_bgcolor  = get_theme_mod( 'feature_post_category_bgcolor', '#f14d5d' );
	$feature_post_meta_icon_color 	= get_theme_mod( 'feature_post_meta_icon_color', '#f14d5d' );
    $css .= '
    	.feature-post-slider .post .cat-links a {
    		background-color: '. esc_attr( $feature_post_category_bgcolor ) .';
    	}
    	.feature-post-slider .post .entry-meta a:before {
    		color: '. esc_attr( $feature_post_meta_icon_color ) .';
    	}
    ';

	// end style block
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'gutener_education_default_styles', 99 );