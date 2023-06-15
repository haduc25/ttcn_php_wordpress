<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

// WP_Query
$args = array(
    'post_status' => 'future',
    'meta_query' => array(
        array(
            'key' => '_thumbnail_id',
            'compare' => 'NOT EXISTS',
        ),
    ),
);
$the_query = new WP_Query($args);
?>

<?php if ($the_query->have_posts()): ?>
    <h5>Các bài viết trong tương lai</h5>
    <ul>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li><?php the_title(); ?></li>
        <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
