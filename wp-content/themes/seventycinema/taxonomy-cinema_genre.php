<div class="container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title();
            the_excerpt();
            ?>
            <a href="<?php the_permalink(); ?>">More</a>
        <?php
        endwhile;
    endif;
    ?>
</div>
<?php
get_footer();
?>