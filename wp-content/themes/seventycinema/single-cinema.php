<?php
get_header();
?>
<div>
    SINGLE PAGE FOR  CINEMA
</div>
<div>

    <h1>
        <?php
        the_title();
        ?>
    </h1>

</div>
<div>
    <?php

    $terms = get_terms( $args );

    foreach( $terms as $term ){
        print_r( $term);
    }

    the_content();
    $posttags = get_the_terms();
    if( $posttags ){
        foreach( $posttags as $tag ){
            echo $tag->name . ' ';
        }
    }
    ?>
</div>


<?php

get_footer();
?>
