<!-- Sorting -->
<?php get_header(); ?>

<div class="container">
    <h4 class="lesson-title">WP Custom - Ordering</h4>
    <?php 
        $arg = array(
            'post_type'=> 'post',
            'posts_per_page' => 20, //limited posts

            // Start: order, orderby
            'orderby' => 'rand', // 'title', 'id', 'rand', 'comment_count', 'date'...
            // 'order'=> 'ASC', // ASC, DESC
        );

        $query = new WP_Query($arg);
        while($query -> have_posts()) : $query -> the_post();
    ?>
        <!-- Add stuff here -->
        <h5><?php 
        // the_title();
        ?></h5>

        <ul>
            <li><?php the_title(); ?></li>
        </ul>
    <?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>