<?php
/**
 * The template for displaying case study archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

$size=full;
get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $services = get_field('services');
                $client = get_field('client');
                $image_1 = get_field('image_1');
            ?>
            <article class="case-study">
                <aside class="case-study-sidebar">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <p class="case-study-services-archive">
                        <?php echo $services; ?>
                    </p>

                    <p>
                        <!-- this will print out what is in the content area in the new/edit view of the page -->
                        <?php the_excerpt(); ?>
                    </p>
                    <p><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></p>
                </aside>
                <div class="case-study-images">
                    <?php 
                        if($image_1) { 
                            echo wp_get_attachment_image($image_1, $size);
                        }
                    ?>

                </div>
            </article>
            <?php endwhile;  ?>
            <!-- end of the loop. -->

            <!-- #content -->
        </div>
        <!-- #primary -->

        <?php get_footer(); ?>
