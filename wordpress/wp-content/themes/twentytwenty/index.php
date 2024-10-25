<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<main id="site-content">

	<?php if (have_posts()) : ?>
		<div class="post-list">
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-item">
					<div class="post-date">
						<span class="day"><?php echo get_the_date('d'); ?></span>
						<span class="month"><?php echo get_the_date('F'); ?></span>
					</div>
					<div class="post-info">
						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						<p class="post-excerpt">
							<?php
							$excerpt = wp_strip_all_tags(get_the_excerpt());
							echo mb_strimwidth($excerpt, 0, 100, ' [...]');
							?>
						</p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</main>
<style>
	#site-content {
		display: flex;
		justify-content: center;
	}

	.post-list {
		max-width: 500px;
		margin: 0 20%;
	}

	.post-item {
		display: flex;
		align-items: center;
		padding: 16px;
		margin-bottom: 24px;
		background-color: #fff;
		font-family: Arial, sans-serif;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		border-radius: 8px;
	}

	.post-date {
		width: 80px;
		text-align: center;
		align-self: start;
		margin-right: 16px;
		font-family: 'Arial', sans-serif;
		color: #333;
		border-right: 1px solid #ccc;
		padding-right: 16px;
	}

	.post-date .day {
		font-size: 36px;
		font-weight: bold;
	}

	.post-date .month {
		font-size: 12px;
		text-transform: uppercase;
		color: #777;
		margin-top: -8px;
	}

	.post-info {
		flex: 1;
	}

	.post-title {
		font-size: 20px;
		font-weight: bold;
		color: #0056b3;
		margin: 0 0 8px;
	}

	.post-title a {
		text-decoration: none;
		color: #0056b3;
	}

	.post-title a:hover {
		text-decoration: underline;
	}

	.post-excerpt {
		font-size: 14px;
		color: #666;
		margin: 0;
		line-height: 1.6;
	}
</style>
<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
