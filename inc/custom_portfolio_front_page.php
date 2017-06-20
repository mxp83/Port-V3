<?php
	function custom_portfolio_cases($atts = null, $content = null, $tag = null) {

	$odd = TRUE;
    $out = '';

    $args = array( 
        'numberposts' => '-1', 
        'post_status' => 'publish', 
        'post_type' => 'portfolio_cases',
    );

    $recent = wp_get_recent_posts( $args );

    if ( $recent ) {

    		$out .= '<div id="portfolio-cases" class="row">';


	        foreach ( $recent as $item ) {
	        		
	        	if ( $odd == TRUE ) {
		        	$out .= '<div class="case_img col-sm-12 col-md-6"><img class="img-fluid" src="';
		        	$out .= get_field('laptop_image',$item['ID']);
		            $out .= '" /></div><div class="case_text col-sm-12 col-md-6"><h5>';
		            $out .= get_the_title($item['ID']);
		            $out .= '</h5>';
		            $out .= '<p class="project_text">';
		            $out .= get_field('project_text',$item['ID']);
		            $out .= '</p>';
		            if(get_field('external_url',$item['ID'])){
		            $out .= '<div class="text-center"><a target="_blank" class="btn btn-front text-center" href="'. get_field('external_url',$item['ID']) . '">VIEW WEBSITE</a></div></p>';
		            } else {
		            $out .= '<div class="text-center"><a class="btn btn-front text-center" href="'. get_permalink( $item['ID'] ) . '">VIEW PROJECT</a></div></p>';
		        	}
		            $out .= '</div>';
		            $odd = FALSE;
	        	} else {
		        	$out .= '<div class="case_img col-sm-12 col-md-6 push-md-6"><img class="img-fluid" src="';
		        	$out .= get_field('laptop_image',$item['ID']);
		            $out .= '" /></div><div class="case_text col-sm-12 col-md-6 pull-md-6"><h5>';
		            $out .= get_the_title($item['ID']);
		            $out .= '</h5>';
		            $out .= '<p class="project_text">';
		            $out .= get_field('project_text',$item['ID']);
		            $out .= '</p>';
		            if(get_field('external_url',$item['ID'])){
		            $out .= '<div class="text-center"><a target="_blank" class="btn btn-front text-center" href="'. get_field('external_url',$item['ID']) . '">VIEW WEBSITE</a></div></p>';
		            } else {
		            $out .= '<div class="text-center"><a class="btn btn-front text-center" href="'. get_permalink( $item['ID'] ) . '">VIEW PROJECT</a></div></p>';
		        	}
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

	add_shortcode( 'portfoliocases', 'custom_portfolio_cases' );
?>