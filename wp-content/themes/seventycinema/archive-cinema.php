<?php
get_header();

?>
<div class="container">
    <?php
    $terms = get_terms( array(
        'taxonomy' => 'cinema_year',
        'hide_empty' => false, ));
    $output = '';
    foreach ($terms as $term){
        $output .= $term->name . ' | ';
    }
    echo $output."<br>";

    $args = array(
        'post_type' => 'cinema',
        'orderby' => 'meta_year',
        'paged' => get_query_var('paged') ?: 1
    );
    $loop = new WP_QUERY( $args);
    while ($loop->have_posts() ) : $loop->the_post();
        ?>
        <br>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        <?php

        //the_content();
        the_excerpt();

    endwhile;
echo  "<hr>";
    posts_nav_link(); // пагинация - echo тут не надо

    wp_reset_query(); // сброс $wp_query
    echo  "<hr>";
    ?>

</div>
<hr>
<?php
get_sidebar('cinema')
?>


<?php
get_footer()
    ?>
