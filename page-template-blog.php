/*
Template Name:page-template-main

*/
<?php get_header(); ?>



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
                        <section class="<?php echo $mythemes_layout -> classes(); ?>">

                            <div <?php post_class( 'mythemes-page' ); ?>>
                                
                                <!-- CONTENT -->
                                    <article>

                                        <?php // Display blog posts on any page @ http://m0n.co/l
                                        $temp = $wp_query; $wp_query= null;
                                        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
                                        $i=0;
                                        while ($wp_query->have_posts()) : $wp_query->the_post();  
                                            if($i % 2 == 0) { ?> 
                                            <div class="row">
                                          <?php  } ?>
                                                <div class="col-md-6">
                                                        <h2><a class="post-header-link" href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                                                        <span class="author">By <?php the_author() ?></span>
                                                       
                                                        <?php the_excerpt(); ?>
                                                </div>
                                            <?php $i++; ?>
                                        
                                        <?php  if($i % 2 == 0) { ?> 
                                            </div>
                                        <?php }   ?> 
                                        <?php endwhile; ?>
                                        <?php if($i != 0 && $i % 2 != 0) { // close the row if it did not get closed in the loop ?>
                                            </div><!--/.row-->
                                        <?php } ?>
                                       
                                        <?php if ($paged > 1) { ?>

                                        <nav id="nav-posts">
                                            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                                            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                                        </nav>

                                        <?php } else { ?>

                                        <nav id="nav-posts">
                                            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                                        </nav>

                                        <?php } ?>

                                        <?php wp_reset_postdata(); ?>

                                    </article>

                             </div>

                        </div>

                        </section>
                    
                    </div>
                </div>
            </div>


<?php get_footer(); ?>