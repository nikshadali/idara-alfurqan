<?php
/**
 * Template for displaying a single course (Custom Post Type)
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container single-course-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="course-thumbnail">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
                </div>

                <div class="entry-content course-details">
                    <?php the_content(); ?>
                </div>
            </article>
			<?php
		endwhile; // End of the loop.
		?>
    </div>
</main>

<?php
get_footer();
