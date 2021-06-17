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
        //var_dump($term);
        $link = get_term_link($term->term_id);
        $output .= "<a href=$link>".$term->name.'</a>'. ' | ';
    }

    echo "<a href='$link'>$output</a>";
    echo "<br>";
    $args = array(
        'post_type' => 'cinema',
        'orderby' => 'meta_year',
        'order' => 'DESC',
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
<?php
get_sidebar('cinema');
?>

<?php
get_footer()
?>
