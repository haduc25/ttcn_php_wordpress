<!-- Sorting -->
<?php get_header(); ?>

<div class="container">
    <h4 class="lesson-title">WP Custom - Comparing</h4>
    <ul>
        <?php 
            $args = array(
                'post_type'=> 'post',
                'posts_per_page' => 20,
                // 'meta_key' => 'order',
                // 'orderby' => 'meta_value',
                'order' => 'ASC', 
            );
    
            $query = new WP_Query($args);
            while($query -> have_posts()) : $query -> the_post();
        ?>
            <li><?php the_title(); ?></li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>

    <hr>
    <?php
        $args = array(
            'post_type' => 'post',
            'meta_query' => array(
                array(
                    'key' => 'meta_key_name',
                    'value' => 'meta_value',
                    'compare' => '=',
                ),
            ),
        );

        $query = new WP_Query( $args );
    ?>
    <h3>123456789</h3>
</div>

<?php get_footer(); ?>