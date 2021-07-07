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
?>


 <?php   if ( have_posts() ) : ?>

     <?php    while ( have_posts() ) : the_post();  ?>
         <h2><a href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <?php      the_excerpt();?>

     <?php     endwhile; ?>
 <?php    endif; ?>

<br>
<?php
    echo  "<hr>";
    posts_nav_link(); // пагинация - echo тут не надо

    wp_reset_query(); // сброс $wp_query
    echo  "<hr>";
    ?>
    <br>
    <div>
        <?php
        //get_sidebar('findcinema');
       // do_shortcode('movies');
        ?>
        <hr style="color:tomato">
    </div>
    <hr>
    <br>
</div>
<hr>


<?php
get_footer()
?>
