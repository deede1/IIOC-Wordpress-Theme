<?php
    global $wp_customize, $mythemes_header_class;

    /* BLOG TITLE & DESCRIPTION  */
    $title_label            = esc_html( get_theme_mod( 'mythemes-header-title-label' , __( 'Cannyon is a clean WordPress theme' , 'cannyon' ) ) );
    $description_label      = esc_html( get_theme_mod( 'mythemes-header-description-label' , __( 'free WordPress theme developed by myThem.es' , 'cannyon' ) ) );

    /* HEADER HEIGHT */
    $header_height          = absint( get_theme_mod( 'mythemes-header-height' , 400 ) );

    /* HEADER MASK */
    $header_mask_color      = esc_attr( get_theme_mod( 'mythemes-header-mask-color', '#000000' ) );
    $header_mask_opacity    = floatval( absint( get_theme_mod( 'mythemes-header-mask-opacity' , 75 ) ) / 100 );

    /* HEADER FIRST BUTTON */
    $first_btn_url          = esc_url( get_theme_mod( 'mythemes-first-btn-url', home_url( '#' ) ) );
    $first_btn_label        = esc_html( get_theme_mod( 'mythemes-first-btn-label', __( 'First Button', 'cannyon' ) ) );
    $first_btn_description  = esc_attr( get_theme_mod( 'mythemes-first-btn-description', __( 'first button link description...', 'cannyon' ) ) );

    /* HEADER SECOND BUTTON */
    $second_btn_url         = esc_url( get_theme_mod( 'mythemes-second-btn-url', home_url( '#' ) ) );
    $second_btn_label       = esc_html( get_theme_mod( 'mythemes-second-btn-label', __( 'Second Button', 'cannyon' ) ) );
    $second_btn_description = esc_attr( get_theme_mod( 'mythemes-second-btn-description', __( 'second button link description...', 'cannyon' ) ) );

    /* HEADER CUSTOMIZER */
    if( isset( $wp_customize ) ) {

        /* HEADER LOGO */
        $header_logo        = true;
        $header_logo_       = esc_url( get_theme_mod( 'mythemes-logo' ) );
        $header_logo_class  = empty( $header_logo_ ) ? 'hidden' : '';

        /* HEADER TITLE */
        $header_title       = true;
        $header_title_class = !(bool)get_theme_mod( 'mythemes-header-title', true ) ? 'hidden' : '';

        /* HEADER DESCRIPTION */
        $header_desc        = true;
        $header_desc_class  = !(bool)get_theme_mod( 'mythemes-header-description', true ) ? 'hidden' : '';

        /* HEADER FIRST BUTTON */
        $first_btn          = true;
        $first_btn_class    = !(bool)get_theme_mod( 'mythemes-first-btn', true ) ? 'hidden' : '';

        /* HEADER SECOND BUTTON */
        $second_btn         = true;
        $second_btn_class   = !(bool)get_theme_mod( 'mythemes-second-btn', true ) ? 'hidden' : '';
    }

    /* HEADER FRONTEND */
    else{

        /* HEADER LOGO */
        $header_logo_       = esc_url( get_theme_mod( 'mythemes-logo' ) );
        $header_logo        = !empty( $header_logo_ );
        $header_logo_class  = '';

        /* HEADER TITLE */
        $header_title       = (bool)get_theme_mod( 'mythemes-header-title', true );
        $header_title_class = '';

        /* HEADER DESCRIPTION */
        $header_desc        = (bool)get_theme_mod( 'mythemes-header-description', true );
        $header_desc_class  = '';

        /* HEADER FIRST BUTTON */
        $first_btn          = (bool)get_theme_mod( 'mythemes-first-btn', true );
        $first_btn_class    = '';

        /* HEADER SECOND BUTTON */
        $second_btn         = (bool)get_theme_mod( 'mythemes-second-btn', true );
        $second_btn_class   = '';
    }
?>

<div class="mythemes-header mythemes-bkg-image overflow-wrapper <?php echo esc_attr( $mythemes_header_class ); ?>" style="height: <?php echo absint( $header_height ); ?>px;">
    <div class="valign-cell-wrapper" style="background: rgba( <?php echo mythemes_tools::hex2rgb( esc_attr( $header_mask_color ) ); ?>, <?php echo floatval( $header_mask_opacity ); ?> );">

        <!-- VERTICAL ALIGN CENTER -->
        <div class="valign-cell">
            
                <div class="row">
                    <div class="col-lg-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img  img-responsive src="http://localhost:8080/wordpress/wp-content/uploads/2015/09/Hydrangeas.jpg" alt="Chania">
                                    <div class="carousel-caption">
                                        <h3>Chania</h3>
                                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                    </div> 
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="http://localhost:8080/wordpress/wp-content/uploads/2015/09/Penguins.jpg" alt="Flower">
                                    <div class="carousel-caption">
                                        <h3>Flowers</h3>
                                        <p>Beatiful flowers in Kolymbari, Crete.</p>
                                    </div>
                                </div>

                               
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>

    <div class="valign-bottom-cell-wrapper header-button-wrapper">
        <div class="valign-cell">
        <?php
            /* HEADER FIRST BUTTON */
            if( $first_btn ){
                echo '<a href="' . esc_url( $first_btn_url ) . '" class="btn first-btn header-button ' . esc_attr( $first_btn_class ) . '" title="' . esc_attr( $first_btn_description ) . '">';
                echo esc_html( $first_btn_label );
                echo '</a>';
            }

            /* HEADER SECOND BUTTON */
            if( $second_btn ){
                echo '<a href="' . esc_url( $second_btn_url ) . '" class="btn second-btn header-button ' . esc_attr( $second_btn_class ) . '" title="' . esc_attr( $second_btn_description ) . '">';
                echo esc_html( $second_btn_label );
                echo '</a>';
            }
        ?>
        </div>
    </div>
</div>