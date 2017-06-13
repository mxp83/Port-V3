<?php
	function custom_portfolio_cases($atts = null, $content = null, $tag = null) {

	$odd = TRUE;
    $out = '';

    $args = array( 
        'numberposts' => '4', 
        'post_status' => 'publish', 
        'post_type' => 'portfolio_cases',
    );

    $recent = wp_get_recent_posts( $args );

    if ( $recent ) {

    		$out .= '<div id="portfolio-cases" class="row">';


	        foreach ( $recent as $item ) {
	        		
	        	if ( $odd == TRUE ) {
		        	$out .= '<div class="case_img col-sm-12 col-md-6" style="background-image:url(';
		        	$out .= get_field('laptop_image',$item['ID']);
		            //$out .= get_the_post_thumbnail_url( $item['ID'] );
		            $out .= ')"></div><div class="case_text col-sm-12 col-md-6"><h5>';
		            $out .= get_the_title($item['ID']);
		            $out .= '</h5><p><a class="btn btn-secondary understrap-read-more-link" href="'. get_permalink( $item['ID'] ) . '">' . __('VIEW CASE', 'understrap')  . '</a></p>';
		            $out .= '</div>';
		            $odd = FALSE;
	        	} else {
		        	$out .= '<div class="case_img col-sm-12 col-md-6 push-md-6" style="background-image:url(';
		        	$out .= get_field('laptop_image',$item['ID']);
		            //$out .= get_the_post_thumbnail_url( $item['ID'] );
		            $out .= ')"></div><div class="case_text col-sm-12 col-md-6 pull-md-6"><h5>';
		            $out .= get_the_title($item['ID']);
		            $out .= '</h5><p><a class="btn btn-secondary understrap-read-more-link" href="'. get_permalink( $item['ID'] ) . '">' . __('VIEW CASE', 'understrap')  . '</a></p>';
		            $out .= '</div>';
		            $odd = TRUE;
	        	}
	        }

	        $out .= '</div>';
	    }

	    if ( $tag ) {
	        return $out;
	    } else {
	        echo $out;
	    }

	}

	add_shortcode( 'recentposts', 'custom_recent_posts' );
?>