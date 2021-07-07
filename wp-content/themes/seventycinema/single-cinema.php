<?php
get_header();
?>

<div class="container">
<hr>
    <?php
     //the_tags();
    $post_id = get_the_ID();

    $term_year = wp_get_post_terms( $post_id, 'cinema_year', array('fields' => 'all') );

    $term_genre = wp_get_post_terms( $post_id, 'cinema_genre', array('fields' => 'all') );


    if( $term_year ){
        foreach( $term_year as $tag ){
            $link = get_tag_link($tag->term_id);
            echo "<a href=$link>".$tag->name.'</a>';
        }
    }

    if( $term_genre ){
    foreach( $term_genre as $tag ){
    $link = get_tag_link($tag->term_id);
    echo " | "."<a href=$link>".$tag->name.'</a>';
    }
    }
    ?>
    <hr>
    <h1>
        <?php
        the_title();
        ?>
    </h1>


<div>
    <?php

        the_content();
    ?>
</div>


</div>
<?php

get_footer();
?>
