<?php /* Template Name: About */
/**
 * The template for displaying the about page
 *
 * NOTE: The above comment on the first line is REQUIRED for WP to
 * recognize this file as a template page file.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
$size=full;

get_header(); ?>

<div id="primary" class="about-main">
    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $section_1_title = get_field('section_1_title');
            $section_2_title = get_field('section_2_title');
            $section_3_title = get_field('section_3_title');
            $section_4_title = get_field('section_4_title');
            $section_1_image = get_field('section_1_image');
            $section_2_image = get_field('section_2_image');
            $section_3_image = get_field('section_3_image');
            $section_4_image = get_field('section_4_image');
            $section_1_description = get_field('section_1_description');
            $section_2_description = get_field('section_2_description');
            $section_3_description = get_field('section_3_description');
            $section_4_description = get_field('section_4_description');
        ?>
        <div class='about-content'>
            <?php the_content(); ?>
        </div>
        <!--<div class='about-items'> -->
        <article class="about-itemized">
            <h4 class="itemized-header">Our Services</h4>
            <p class="itemized-text">
                We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.
            </p>
        </article>
        <article class="about-itemized">
            <aside class="about-left-sidebar">
                <img src="<?php echo $section_1_image; ?>" class="about-left-image" />
                <?php /* this isn't working -- fix it later
                        if($section_1_image) { 
                            echo wp_get_attachment_image($section_1_image, $size);
                        }
            */    ?>
            </aside>
            <div class="about-right-side">
                <h4 class="about-right-title">
                    <?php echo $section_1_title; ?>
                </h4>
                <p class="about-right-description">
                    <?php echo $section_1_description; ?>
                </p>
            </div>
            <aside class="about-left-sidebar">
                <h4 class="about-itemized-title">
                    <?php echo $section_2_title; ?>
                </h4>
                <p class="about-itemized-description">
                    <?php echo $section_2_description; ?>
                </p>
            </aside>
            <div class="about-right-side">
                <img src="<?php echo $section_2_image; ?>" class="about-left-image" />
                <?php /*
                        if($section_1_image) { 
                            echo wp_get_attachment_image($section_1_image, $size);
                        }
            */    ?>
            </div>
            <aside class="about-left-sidebar">
                <img src="<?php echo $section_3_image; ?>" class="about-left-image" />
                <?php /*
                        if($section_1_image) { 
                            echo wp_get_attachment_image($section_1_image, $size);
                        }
            */    ?>
            </aside>
            <div class="about-right-side">
                <h4 class="about-itemized-title">
                    <?php echo $section_3_title; ?>
                </h4>
                <p class="about-itemized-description">
                    <?php echo $section_3_description; ?>
                </p>
            </div>
            <aside class="about-left-sidebar">
                <h4 class="about-itemized-title">
                    <?php echo $section_4_title; ?>
                </h4>
                <p class="about-itemized-description">
                    <?php echo $section_4_description; ?>
                </p>
            </aside>
            <div class="about-right-side">
                <img src="<?php echo $section_4_image; ?>" class="about-left-image" />
                <?php /*
                        if($section_4_image) { 
                            echo wp_get_attachment_image($section_4_image, $size);
                        }
            */    ?>
            </div>
        </article>
        <!--</div> -->
    </div>
    <!-- content -->
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
