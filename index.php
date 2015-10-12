<?php get_header(); ?>

	<?php

		global $wp_query,$wp_customize;

	    if( isset( $wp_customize ) ) {
	        $breadcrumbs = true;
	        $classes = !(bool)get_theme_mod( 'mythemes-breadcrumbs', true ) ? 'hidden' : '';
	    }
	    else{
	        $breadcrumbs = (bool)get_theme_mod( 'mythemes-breadcrumbs', true );
	        $classes = '';
	    }

	   
	?>
	       
	
        
    <div class="content">
        <div class="container">
            <div class="row">
                <?php get_template_part( 'templates/loop' ); ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>