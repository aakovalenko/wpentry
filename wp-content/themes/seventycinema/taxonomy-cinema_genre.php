<?php
get_header();
?>
<div class="container">
    <?php
    if ( have_posts() ) :  ?>
        <?php  while ( have_posts() ) : the_post();  ?>
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
            <br>
            <?php     the_excerpt();  ?>

            <br>
        <?php
        endwhile;
    endif;
    ?>
</div>
<?php
get_footer();
?>