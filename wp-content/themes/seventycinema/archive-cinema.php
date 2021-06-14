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
echo $output;

$args = array('post_type' => 'ciname', 'post_per_page' => 10 );
$loop = new WP_QUERY( $args );
while ($loop->have_posts() ) : $loop->the_post();
?>
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
