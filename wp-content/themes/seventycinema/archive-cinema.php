<?php
get_header();

?>

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
    'post_per_page' => 10,
//    'tax_query' => array(
//            array(
//                'taxonomy' => 'cinema_year',
//    'field'    => 'slug',
//                'hide_empty' => false,
//            )
//    )
);
$loop = new WP_QUERY( $args);
while ($loop->have_posts() ) : $loop->the_post();
?>
    <br>
<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
<?php
echo '<div class="container">';
the_content();
echo '</div>';
endwhile;
?>

<?php
get_footer()
    ?>
