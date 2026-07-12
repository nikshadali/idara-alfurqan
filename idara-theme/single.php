<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<!-- PAGE HERO BANNER -->
	<section class="page-hero">
		<div class="page-hero-bg" aria-hidden="true"></div>
		<div class="container page-hero-inner">
			<nav class="page-breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo home_url('/'); ?>">Home</a>
				<span>›</span>
				<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Blog</a>
				<span>›</span>
				<span><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></span>
			</nav>
			<h1><?php the_title(); ?></h1>
			<div class="post-meta" style="margin-top: 16px; font-size: 16px; color: rgba(255,255,255,0.9); display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
				<span>&#128197; <?php echo get_the_date(); ?></span>
				<span>&#128100; <?php the_author(); ?></span>
				<?php if ( has_category() ) : ?>
					<span>&#128193; <?php the_category(', '); ?></span>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<main id="primary" class="site-main section">
		<div class="container">
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-article'); ?> style="max-width: 100%; margin: 0 auto; background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail" style="margin-bottom: 40px; border-radius: 12px; overflow: hidden;">
						<?php the_post_thumbnail( 'large', ['style' => 'width: 100%; height: auto; display: block;'] ); ?>
					</div>
				<?php endif; ?>

				<div class="post-content" style="font-size: 17px; line-height: 1.8; color: #2d3748;">
					<?php
					the_content();
					
					wp_link_pages( array(
						'before' => '<div class="page-links" style="margin-top: 30px; font-weight: bold;">' . esc_html__( 'Pages:', 'idara-theme' ),
						'after'  => '</div>',
					) );
					?>
				</div>

				<footer class="post-footer" style="margin-top: 40px; padding-top: 30px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
					<div class="post-tags">
						<?php
						$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'idara-theme' ) );
						if ( $tags_list ) {
							printf( '<span class="tags-links" style="font-size: 14px; color: #4a5568;">&#127991; %1$s</span>', $tags_list );
						}
						?>
					</div>
					
					<div class="post-share">
						<span style="font-weight: 600; margin-right: 10px; color: #1a202c;">Share:</span>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" style="display: inline-block; width: 32px; height: 32px; line-height: 32px; text-align: center; background: #1877F2; color: #fff; border-radius: 50%; margin-right: 8px; text-decoration: none;">F</a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" style="display: inline-block; width: 32px; height: 32px; line-height: 32px; text-align: center; background: #1DA1F2; color: #fff; border-radius: 50%; margin-right: 8px; text-decoration: none;">X</a>
						<a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" style="display: inline-block; width: 32px; height: 32px; line-height: 32px; text-align: center; background: #25D366; color: #fff; border-radius: 50%; text-decoration: none;">W</a>
					</div>
				</footer>
			</article>
			
			<div class="post-navigation" style="max-width: 100%; margin: 40px auto 0; display: flex; justify-content: space-between; gap: 20px;">
				<div class="nav-previous" style="flex: 1;">
					<?php previous_post_link( '<div style="font-size: 14px; color: #666; margin-bottom: 4px;">Previous Post</div><div style="font-weight: 600; font-size: 16px;">&larr; %link</div>' ); ?>
				</div>
				<div class="nav-next" style="flex: 1; text-align: right;">
					<?php next_post_link( '<div style="font-size: 14px; color: #666; margin-bottom: 4px;">Next Post</div><div style="font-weight: 600; font-size: 16px;">%link &rarr;</div>' ); ?>
				</div>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				echo '<div class="comments-area-wrapper" style="max-width: 100%; margin: 40px auto 0; background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">';
				comments_template();
				echo '</div>';
			endif;
			?>
		</div>
	</main>
<?php endwhile; ?>

<style>
.post-content h1, .post-content h2, .post-content h3, .post-content h4, .post-content h5, .post-content h6 { margin-top: 30px; margin-bottom: 15px; color: #1a202c; font-weight: 700; line-height: 1.3; }
.post-content h2 { font-size: 28px; }
.post-content h3 { font-size: 24px; }
.post-content p { margin-bottom: 20px; }
.post-content ul, .post-content ol { margin-bottom: 20px; padding-left: 20px; }
.post-content li { margin-bottom: 8px; }
.post-content a { color: #0056b3; text-decoration: underline; }
.post-content a:hover { color: #003d82; }
.post-content blockquote { border-left: 4px solid #0056b3; padding-left: 20px; margin-left: 0; font-style: italic; color: #4a5568; background: #f8f9fa; padding: 20px; border-radius: 0 8px 8px 0; }
.post-content img { max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 20px; }
.post-tags a { color: #0056b3; text-decoration: none; margin-right: 8px; background: #ebf4ff; padding: 4px 10px; border-radius: 4px; transition: background 0.2s; display: inline-block; margin-bottom: 8px; }
.post-tags a:hover { background: #dbeafe; }
.post-navigation a { color: #0056b3; text-decoration: none; }
.post-navigation a:hover { text-decoration: underline; }
@media (max-width: 768px) {
	.single-post-article { padding: 20px; }
	.comments-area-wrapper { padding: 20px; }
}
</style>

<?php
get_footer();
