<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <header class="page-header">
                <h1 class="page-title">
                    <?php _e( 'Whoops, Took a Wrong Turn', 'accelerate' ); ?>
                </h1>
            </header>

            <div class="page-content">
                <!-- use get_stylesheet_direcotry_uri as it returns the child theme path, otherwise, the parent theme path was being returned -->
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/snowmonster.jpeg" alt="snowmonster" />
                <!-- This doesn't work <img src="img/snowmonster.jpeg" alt="snowmonster" /> -->
                <p>
                    <?php _e( 'Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.', 'accelerate' ); ?>
                </p>
                <p>
                    <?php _e( 'Feel free to take a look around our 
                    <a class="oops-link" href="blog">blog </a> or some of our <a class="oops-link" href="case_studies">featured work</a>.', 'accelerate' ); ?>
                </p>

                <?php get_search_form(); ?>
            </div>
            <!-- .page-content -->

        </div>
        <!-- #content -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
