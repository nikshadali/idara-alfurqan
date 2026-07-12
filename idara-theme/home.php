<?php
/**
 * The template for displaying the blog index (posts page)
 */

get_header();
?>

<!-- PAGE HERO BANNER -->
<section class="page-hero">
	<div class="page-hero-bg" aria-hidden="true"></div>
	<div class="container page-hero-inner">
		<nav class="page-breadcrumb" aria-label="Breadcrumb">
			<a href="<?php echo home_url('/'); ?>">Home</a>
			<span>›</span>
			<span>Blog</span>
		</nav>
		<h1>Our <span class="page-hero-highlight">Blog</span></h1>
		<p class="page-hero-sub">Insights, articles, and updates from Idara Al Furqan Quran Academy.</p>
	</div>
</section>

<main id="primary" class="site-main section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="blog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px;">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card premium-card'); ?> style="border: 1px solid #eee; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease; display: flex; flex-direction: column;">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="blog-card-img" style="display: block; height: 200px; overflow: hidden; flex-shrink: 0;">
								<?php the_post_thumbnail( 'medium_large', ['style' => 'width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;'] ); ?>
							</a>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="blog-card-img" style="display: flex; height: 200px; background: #f8f9fa; align-items: center; justify-content: center; flex-shrink: 0;">
								<span style="font-size: 48px; color: #ccc;">&#128240;</span>
							</a>
						<?php endif; ?>
						
						<div class="blog-card-content" style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
							<div class="blog-card-meta" style="font-size: 14px; color: #666; margin-bottom: 12px; display: flex; gap: 12px;">
								<span>&#128197; <?php echo get_the_date(); ?></span>
								<span>&#128100; <?php the_author(); ?></span>
							</div>
							<h2 class="blog-card-title" style="font-size: 20px; font-weight: 700; margin-top: 0; margin-bottom: 12px; line-height: 1.4;">
								<a href="<?php the_permalink(); ?>" style="color: #1a202c; text-decoration: none;"><?php the_title(); ?></a>
							</h2>
							<div class="blog-card-excerpt" style="color: #4a5568; font-size: 15px; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn btn-outline" style="display: inline-block; padding: 8px 16px; font-size: 14px; border: 2px solid #0056b3; color: #0056b3; text-decoration: none; border-radius: 6px; font-weight: 600; text-align: center;">Read More &rarr;</a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<div class="pagination" style="margin-top: 40px; text-align: center;">
				<?php 
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( 'Back', 'idara-theme' ),
					'next_text' => __( 'Next', 'idara-theme' ),
				) ); 
				?>
			</div>

		<?php else : ?>
			<div class="no-results not-found" style="text-align: center; padding: 60px 20px;">
				<h2 style="font-size: 24px; color: #1a202c; margin-bottom: 16px;">Nothing Found</h2>
				<p style="color: #4a5568;">It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
				<div style="max-width: 400px; margin: 0 auto; margin-top: 24px;">
					<?php get_search_form(); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</main>

<style>
.blog-card:hover { transform: translateY(-5px); }
.blog-card:hover .blog-card-img img { transform: scale(1.05); }
.pagination .nav-links { display: flex; justify-content: center; gap: 8px; flex-wrap: wrap; }
.pagination .page-numbers { display: inline-block; padding: 8px 16px; border-radius: 6px; background: #f8f9fa; color: #1a202c; text-decoration: none; font-weight: 600; border: 1px solid #e2e8f0; transition: all 0.2s; }
.pagination .page-numbers.current { background: #0056b3; color: #fff; border-color: #0056b3; }
.pagination .page-numbers:hover:not(.current) { background: #e2e8f0; }
</style>

<?php
get_footer();
