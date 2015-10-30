/*
Template Name:page-template-main

*/
<?php get_header(); ?>

<?php
    global $wp_customize;

    if( have_posts() ){
        while( have_posts() ){
            the_post();

            if( isset( $wp_customize ) ) {
                $breadcrumbs = true;
                $classes = !(bool)get_theme_mod( 'mythemes-breadcrumbs', true ) ? 'hidden' : '';
            }
            else{
                $breadcrumbs = (bool)get_theme_mod( 'mythemes-breadcrumbs', true );
                $classes = '';
            }

            if( $breadcrumbs ){
        ?>
               
        <?php
            }
        ?>
            <div class="content page-content" id="iioc-content">
                <div class="container">
                    <div class="row">
                    <?php
                        global $mythemes_layout;

                        $settings = 'page';

                        if( get_theme_mod( 'mythemes-special-page' , 2 ) == $post -> ID )
                        {
                            $settings = 'special-page';                            
                        }

                        /* GET LAYOUT DETAILS */
                        $mythemes_layout = new mythemes_layout( $settings );
                    ?>
                        <!-- CONTENT -->
                            <section class="<?php echo $mythemes_layout -> classes(); ?> ">

                                <div <?php post_class( 'mythemes-page' ); ?>>
                                    <div class="padded">
                                        <!-- CONTENT -->
                                        <?php the_content(); ?>
                                    </div>
                                 </div>

                       

                            </section>
                    </div>
                </div>
            </div>
<?php
        } /* END PAGE */
    }
?>

<?php get_footer(); ?>