<!-- Basics -->
<!-- 
    WP_Query
    https://www.billerickson.net/code/wp_query-arguments/
-->
<?php get_header(); ?>

<div class="container">
    <h4 class="lesson-title">WP Custom - Basics</h4>

    <hr>
    <h3>Case 1</h3>
    <hr>

    <ul
        <?php
            if(have_posts()) : while(have_posts()) : the_post(); ?>
                <li> <?=the_title() ?></li>
        <?php endwhile; endif; ?>
    </ul>

    <hr>
    <h3>Case 2</h3>
    <hr>


    <ul>
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'order' => 'ASC'
                );
        
                $query = new WP_Query($args);
        
                while($query->have_posts()) : $query->the_post();
        
            ?>
            <li><?= the_title() ?></li>
        
            <?php endwhile; wp_reset_query(); ?>
    </ul>
</div>



<?php get_footer(); ?>