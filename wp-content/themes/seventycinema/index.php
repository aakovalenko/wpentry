<?php
// Silence is golden.

get_header();

?>


<div class="container mx-auto mt-1">
    <?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

</div>


<?php
get_footer();
