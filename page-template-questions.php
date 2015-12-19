<?php


/* Template Name: page-template-questions*/


get_header(); ?>

<?php
    global $wp_customize;
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
                        <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $loop = new WP_Query( 
                                array( 
                                    'post_type' => 'question', 
                                    'posts_per_page' => 8,
                                    'paged' => $paged
                                    )
                            );
                        ?>
                        <section class="<?php echo $mythemes_layout -> classes(); ?> ">
                            <div class="text-right">
                                <?php
                                    // next_posts_link( 'Older Entries', $loop->max_num_pages );
                                    // previous_posts_link( 'Newer Entries', $loop->max_num_pages );
                                    $big = 999999999; // need an unlikely integer
                                    echo '<p><em>' . $loop->found_posts . ' question</em>&nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $loop->max_num_pages
                                    ) ) . '</p>';
                                ?>
                            </div>
                            
                                 <table class="table table-striped table-responsive">
                                     <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Views</th>
                                            <th>Comments</th>
                                            <th>Date</th>
                                            <th>Categories</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <?php                                           
                                            while ( $loop->have_posts() ) : $loop->the_post(); 
                                                $id = get_the_ID();
                                                $args = array(
                                                    'post_id' => $id, // use post_id, not post_ID
                                                    'count' => true //return only the count
                                                );
                                                $comments = get_comments($args);
                                                $topic = get_the_terms($id, 'question-topic')[0];
                                            ?>
                                               <tr>

                                                    <td>
                                                        <a href="<?php echo get_post_permalink($id); ?>">
                                                            <?php echo get_the_title(); ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo pvc_get_post_views( $id ); ?></td>
                                                    <td><?php echo $comments; ?></td>
                                                    <td><?php echo get_the_date(null, $id); ?></td>
                                                    <td><a href="<?php echo get_term_link($topic); ?>"><?php echo $topic->name; ?></a></td>
                                                </tr> 
                                            <?php endwhile; wp_reset_query();
                                          
                                        ?>
                                     </tbody>
                                 </table>
                            
                                
                        </section>
                    </div>
                </div>
            </div>

<?php get_footer(); ?>