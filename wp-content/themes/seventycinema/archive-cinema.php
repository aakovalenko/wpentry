<?php
get_header();
?>

<div class="container">
    <?php
    get_sidebar('cinema');
    ?>
<br>

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

    echo "<hr>";



    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h3>', '</h3>');
            the_excerpt();
        endwhile;
    endif;



    echo  "<hr>";
    posts_nav_link(); // пагинация - echo тут не надо

    wp_reset_query(); // сброс $wp_query
    echo  "<hr>";
    ?>

</div>


<?php
get_footer()
?>
