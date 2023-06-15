<?php 
    // header
    get_header();

    // body
    if(have_posts()):
        while(have_posts()):the_post(); ?>
            <h2>
                <a href='<?php the_permalink() ?>'>
                    <?php 
                        the_title(); 
                        the_content(); 
                        // language_attributes();
                        // bloginfo();
                        // body_class();
                    ?> 
                </a>
            </h2>
        <?php endwhile; 

    else:
        echo '<p>There are no posts!</p>';
    endif;

    // footer
    get_footer();
?>
<h2 class="box">Meow</h2>
<h2 >Custom themes</h2>