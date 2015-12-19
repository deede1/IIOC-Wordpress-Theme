        <footer>
            <?php
                global $wp_customize;

                $are_active_sidebras =  is_active_sidebar( 'footer-first' ) ||
                                        is_active_sidebar( 'footer-second' ) ||
                                        is_active_sidebar( 'footer-third' ) ||
                                        is_active_sidebar( 'footer-fourth' );

                $items_class = '';

                /* WP CUSTOMIZE */
                if( isset( $wp_customize ) ){
                    $items = true;
                    $items_class = !($are_active_sidebras || (bool)get_theme_mod( 'mythemes-default-content', true ) ) ? 'hidden' : '';
                }

                /* FRONTEND */
                else{
                    $items = $are_active_sidebras || (bool)get_theme_mod( 'mythemes-default-content', true );
                }
                
                if( $items ){
            ?>
                    <aside class="mythemes-default-content <?php echo esc_attr( $items_class ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <?php get_sidebar( 'footer-first' ); ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <?php get_sidebar( 'footer-second' ); ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <?php get_sidebar( 'footer-third' ); ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <?php get_sidebar( 'footer-fourth' ); ?>
                                </div>
                            </div>
                        </div>
                    </aside>
            <?php
                }
            ?>

            <div class="mythemes-dark-mask">
                <div class="container mythemes-social">
                    <div class="row">
                        <?php
                            $youtube    = esc_url( get_theme_mod( 'mythemes-youtube', 'https://www.youtube.com/channel/UCu6Wv5Z104wOB0SpFcaGNow' ) );
                            $twitter    = esc_url( get_theme_mod( 'mythemes-twitter', 'https://twitter.com/#' ) );
                            $facebook   = esc_url( get_theme_mod( 'mythemes-facebook', 'https://www.facebook.com/#' ) );
                            $instagram  = esc_url( get_theme_mod( 'mythemes-instagram', 'https://www.instagram.com/#' ) );
                            $rss        = esc_url( get_theme_mod( 'mythemes-rss', esc_url( get_bloginfo('rss2_url') ) ) );

                            if( isset( $wp_customize ) ) {
                                
                                $yt_class   = empty( $youtube ) ? 'hidden' : '';

                                $tw_class   = empty( $twitter ) ? 'hidden' : '';
                               
                                $fb_class   = empty( $facebook ) ? 'hidden' : '';
                               
                                $rs_class   = empty( $rss ) ? 'hidden' : '';

                                $inst_class   = empty( $instagram ) ? 'hidden' : '';

                                $twitter    = empty( $twitter ) ? esc_url( home_url() ) : $twitter;
                              
                                $facebook   = empty( $facebook ) ? esc_url( home_url() ) : $facebook;
                              
                                $rss        = empty( $rss ) ? esc_url( home_url() ) : $rss;

                                $instagram  = empty( $instagram ) ? esc_url( home_url() ) : $instagram;

                                $youtube    = empty( $youtube ) ? esc_url( home_url() ) : $youtube;
                            }
                            else{

                                $yt_class    = '';

                                $tw_class   = '';
                              
                                $fk_class   = '';
                               
                                $rs_class   = '';

                                $inst_class  = '';
                            }
                        ?>
                        <div class="col-lg-12">
                            <?php
                               
                                 if( !empty( $youtube ) ){
                                    echo '<a href="' . $youtube . '" class="icon-youtube ' . esc_attr( $yt_class ) . '" target="_blank" title="youtube"></a>';
                                }

                                if( !empty( $twitter ) ){
                                    echo '<a href="' . $twitter . '" class="icon-twitter ' . esc_attr( $tw_class ) . '" target="_blank" title="twitter"></a>';
                                }
                               
                              
                                if( !empty( $facebook ) ){
                                    echo '<a href="' . $facebook . '" class="icon-facebook ' . esc_attr( $fb_class ) . '" target="_blank" title="facebook"></a>';
                                }
                               
                                if( !empty( $instagram ) ){
                                    echo '<a href="' . $instagram . '" class="icon-instagram ' . esc_attr( $inst_class  ) . '" target="_blank" title="instagram"></a>';
                                }
                               
                                if( !empty( $rss ) ){
                                    echo '<a href="' . $rss . '" class="icon-rss ' . esc_attr( $rs_class ) . '" target="_blank" title="rss"></a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="mythemes-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <span class="copyright"><?php echo mythemes_validate_copyright( get_theme_mod( 'mythemes-copyright' , sprintf( __( 'Copyright &copy; %s %s. Powered by %s.' , 'cannyon' ) , date( 'Y' ) , esc_html( get_bloginfo( 'name' ) ) , '<a href="http://wordpress.org/">WordPress</a>' ) ) ); ?></span>
<!--                                     <span><?php echo mythemes_options::get( 'author-link' ); ?></span> -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <?php
            $header_img = esc_url( get_theme_mod( 'mythemes-header-image', get_template_directory_uri() . '/media/_frontend/img/bkg.jpg' ) );

            echo '<div class="mythemes-header-image">';

            if( !empty( $header_img ) ){
                echo '<img src="' . esc_url( $header_img ) . '"/>';
            }

            echo '</div>';

            if( isset( $wp_customize ) && mythemes_core::exists_premium() ) {
                echo '<a href="' . esc_url( mythemes_core::theme( 'premium' ) ) . '" target="_blank" class="mythemes-upgrade"><i class="icon-publish"></i>' . __( 'Upgrade to Premium' , 'cannyon' ) . '</a>';
            }
        ?>

        <?php wp_footer(); ?>

    </body>
</html>