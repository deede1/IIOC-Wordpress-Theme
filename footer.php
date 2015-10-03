        <footer>
        
             <aside class="mythemes-default-content <?php echo esc_attr( $items_class ); ?>">
                     <div class="container">
                            <div class="row footer-row">
                                <div class=" col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                    <h2>About US</h2>
                                    <ul>
                                      <li><a>Mission & Vision</a></li>
                                      <li>
                                        <a>contact Us</a>
                                      </li>
                                      <li>
                                        <a>Directions</a>
                                      </li>
                                      <li>
                                        <a>Committees</a>
                                      </li>
                                      <li>
                                        <a>History</a>
                                      </li>
                                      <li>
                                        <a>Shaykh Mohammed</a>
                                      </li>
                                      <li>
                                        <a>Shaykh Ummar</a>
                                      </li>
                                     
                                    </ul>
                                </div>
                                <div class=" col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                  <h2>IIOC</h2>
                                  <ul>
                                    <li>
                                      <a>Events Calendar</a>
                                    </li>
                                    <li>
                                      <a>Weekly Bulletin</a>
                                    </li>
                                    <li>
                                      <a>Community News</a>
                                    </li>
                                    <li>
                                      <a>Community Appeals</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class=" col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <h2>Media</h2>
                                <ul>
                                  <li>
                                    <a>Video Archives</a>
                                  </li>
                                  <li>
                                    <a>e-Library</a>
                                  </li>
                                  <li>
                                    <a>IIOCTV @ Youtube</a>
                                  </li>
                                  <li>
                                    <a>Photo Gallery</a>
                                  </li>
                                  <li>
                                    <a>Livestream</a>
                                  </li>
                                </ul>
                              </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                  <h2>Youth</h2>
                                  <ul>
                                    <li>
                                      <a>Our Mission</a>
                                    </li>
                                    <li>
                                      <a>Our Events</a>
                                    </li>
                                    <li>
                                      <a>Friday Night YG Registration</a>
                                    </li>
                                    <li>
                                      <a>The youth Committe & Mentors</a>
                                    </li>
                                    <li>
                                      <a>Youth Internship Programs</a>
                                    </li>
                                    <li>
                                      <a>Do The Right Thing Award</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                  <h2>Get Involved</h2>
                                  <ul>
                                    <li>
                                      <a>Bi-annual Blood Drive</a>
                                    </li>
                                    <li>
                                      <a>Opereation:Bown Paper Bag with ICNA</a>
                                    </li>
                                    <li>
                                      <a>Volunteer!</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                  <h2>Outreach</h2>
                                  <ul>
                                    <li>
                                      <a>Take a Tour!</a>
                                    </li>
                                    <li>
                                      <a>Prison Outreach</a>
                                    </li>
                                    <li>
                                      <a>New & Recommitted Muslim Group</a>
                                    </li>
                                    <li>
                                      <a>Newsletters & Volunteer Signups</a>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                    </div>
             </aside>
        
            <div class="mythemes-dark-mask">
                <div class="container mythemes-social">
                    <div class="row">
                        <?php
                            $youtube    = esc_url( get_theme_mod( 'mythemes-youtube', 'http://youtube.com/#' ) );
                            $twitter    = esc_url( get_theme_mod( 'mythemes-twitter', 'http://twitter.com/#' ) );
                            $facebook   = esc_url( get_theme_mod( 'mythemes-facebook', 'http://facebook.com/#' ) );
                            $rss        = esc_url( get_theme_mod( 'mythemes-rss', esc_url( get_bloginfo('rss2_url') ) ) );

                            if( isset( $wp_customize ) ) {
                                
                                $yt_class   = empty( $youtube ) ? 'hidden' : '';

                                $tw_class   = empty( $twitter ) ? 'hidden' : '';
                               
                                $fb_class   = empty( $facebook ) ? 'hidden' : '';
                               
                                $rs_class   = empty( $rss ) ? 'hidden' : '';

                                $twitter    = empty( $twitter ) ? esc_url( home_url() ) : $twitter;
                              
                                $facebook   = empty( $facebook ) ? esc_url( home_url() ) : $facebook;
                              
                                $rss        = empty( $rss ) ? esc_url( home_url() ) : $rss;
                            }
                            else{

                                $yt_class    = '';

                                $tw_class   = '';
                              
                                $fk_class   = '';
                               
                                $rs_class   = '';
                            }
                        ?>
                        <div class="col-lg-12">
                            <?php
                               
                                 if( !empty( $youtube ) ){
                                    echo '<a href="' . $youtube . '" class="icon-youtube ' . esc_attr( $yt_class ) . '" target="_blank"></a>';
                                }

                                if( !empty( $twitter ) ){
                                    echo '<a href="' . $twitter . '" class="icon-twitter ' . esc_attr( $tw_class ) . '" target="_blank"></a>';
                                }
                               
                              
                                if( !empty( $facebook ) ){
                                    echo '<a href="' . $facebook . '" class="icon-facebook ' . esc_attr( $fb_class ) . '" target="_blank"></a>';
                                }
                               
                               
                                if( !empty( $rss ) ){
                                    echo '<a href="' . $rss . '" class="icon-rss ' . esc_attr( $rs_class ) . '" target="_blank"></a>';
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
                                    <span><?php echo mythemes_options::get( 'author-link' ); ?></span>
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