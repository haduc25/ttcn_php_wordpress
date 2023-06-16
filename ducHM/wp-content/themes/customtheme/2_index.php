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
                <li><?= the_title() ?></li>

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
                    'order' => 'ASC',
                );
        
                $query = new WP_Query($args);
        
                while($query->have_posts()) : $query->the_post();
        
            ?>
            <li><?= the_title() ?></li>
        
            <?php endwhile; wp_reset_query(); ?>
    </ul>

    <hr>
    <h3>Case 3</h3>
    <hr>

    <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'order' => 'ASC'
        );

        $query = new WP_Query($args);

        while($query->have_posts()) : $query->the_post();
        $notShowing = $post->ID;


    ?>
    <div class="featured">
        <h5><?= the_title() ?></h5>
    </div>

    <?php endwhile; wp_reset_query(); ?>
    <?= 'The posts not showing is: ', $notShowing ?>

    <hr>
    <h3>Case 4</h3>
    <hr>

    <h3>List the posts not showing</h3>
    <?php 
        $args = array(
            'post_type' => 'post',
            'order' => 'ASC',
            'post__not_in' => array($notShowing)
        );

        $query = new WP_Query($args);

        while($query->have_posts()) : $query->the_post();
    ?>
    <div class="featured">
        <h5><?= the_title() ?></h5>
    </div>

    <?php endwhile; wp_reset_query(); ?>
</div>



<?php get_footer(); ?>