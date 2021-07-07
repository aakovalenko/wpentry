<?php
// Silence is golden.

get_header();

?>


<div class="container mx-auto mt-155">

        <?php   if ( have_posts() ) : ?>

            <?php    while ( have_posts() ) : the_post();  ?>
               <h2> <?php      the_title();?></h2>
                <?php      the_content();?>

            <?php     endwhile; ?>
        <?php    endif; ?>
    </div>

<?php
get_footer();
