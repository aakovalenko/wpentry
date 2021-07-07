<?php
/*
 * Plugin Name: Cinema Api
 * Description: cinema api
 * Version: 1.0
 */

add_action( 'init', 'register_shortcode_movies_api' );

function register_shortcode_movies_api() {
    add_shortcode('movies', 'show_movies');
}



function show_movies( $atts ) {
    $movies = get_movies_from_api();

    ob_start();
    ?>

        <div class="container">
            <hr>
            <form action="" class=" mb-50">

                <label for="movie_search">Enter movie:</label>
                <input type="text" name="movie_search">


                <label for="type">Choose a movie type:</label>
                <select name="type" id="type">
                    <option value="movie">Movie</option>
                    <option value="series">Series</option>
                    <option value="episode">Episode</option>
                </select>
                    <button type="submit">Search</button>
            </form>
            <hr>
        </div>


    <?php
    if ($_GET['movie_search'] && $_GET['type']) :
    $name = $_GET['movie_search'];
    $type = $_GET['type'];
    $page = $_GET['page'];
    $movies = get_movies_from_api($name, $type, $page);
    //var_dump($movies);
        $url =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        //$url = $_SERVER['QUERY_STRING'];
       // echo $url;
    //dd($movies->totalResults);
    ?>
        <ul>
            <div class="container">
                <div class="row">
                    <?php if( $movies->Search != 'False'): ?>
            <?php foreach ($movies->Search as $movie) : ?>
                    <div class="col-4">
            <li>
                <p><?php echo $movie->Title; ?></p>
                <p><?php echo $movie->Year; ?></p>
                <p><?php echo $movie->Type; ?></p>
                <p>
                    <img src="<?php echo $movie->Poster; ?>" alt="<?php echo $movie->Title; ?>"  width='300px;' height='450px'>
                    </p>
                <hr>
            </li>
                    </div>
            <?php endforeach;?>
                        <hr>
<!-- ************* -->
                        <div class="container">
                        <hr>
                        <form action="" method="get" class="mb-50">
                        <label for="page">Select page #: </label>
                        <select name="page" id="page">
                        <?php

                        $tcountPage = ceil($movies->totalResults / 10);

                        echo "Total page found : {$tcountPage}";
                        if($tcountPage > 1)
                        for ($fp = 1; $fp <= $tcountPage; $fp++) : ?>
                            <!--<span class="col-12"  id="page-numb"><a href="<?=$url.'&page='.$fp; ?>" onclick="dell(e);" class="nolink"><?php echo $fp." | "; ?></a></span> -->

                                        <option value="<?= $fp ?>"><?= $fp ?></option>
                            <?php endfor; ?>

                        </select>
                            <button>Go</button>
                        </form>
                            <hr>
                        </div>
                            <?php var_dump($_GET['page']); ?>
                        <hr>
    <?php else : ?>
    <div class="col-4">
        <li>NO RESULT</li>
    </div>
    <?php endif;?>
                </div>
            </div>
        </ul>

    <?php
    elseif ($_GET['movie_search'] === null):

    echo "Empty result!";
    endif;

    return ob_get_clean();
}



function get_movies_from_api($name = '', $type = 'movie', $page = 1)
{
    $key = '4e62a930';
    $c = get_transient('cinema_api' . "_$name");
    //$c = false;


    if (!$c) {
        $c = wp_remote_get('http://www.omdbapi.com/?apikey=' . $key . '&s=' . $name . '&type=' . $type.'&page='.$page);
       // var_dump(json_decode($c['body'])->totalResults);

        $responseResult = json_decode($c['body'])->Response;
        //var_dump($responseResult);
        if ($responseResult != 'False') {
            set_transient('cinema_api'. "_$name", $c, 60);
            //return json_decode($c['body'])->Search;
            return json_decode($c['body']);
        } else {
            return $responseResult;
        }

    } else {
        //return json_decode($c['body'])->Search;
        return json_decode($c['body']);
    }

}

//add_action('wp_ajax_hello', 'sayHello');
//add_action('wp_ajax_nopriv_hello', 'sayHello');
//
//function sayHello() {
//    if( empty ($_POST['name'])) {
//        $name = 'user';
//    } else {
//        $name = esc_attr($_POST['name']);
//    }
//    echo "Hello, $name!";
//    wp_die();
//}
//
////add_action( 'admin_print_footer_scripts', 'my_action_javascript', 99 );
//
//add_action( 'wp_enqueue_scripts', 'my_assets', 9999 );
//function my_assets() {
//    wp_enqueue_script('custom',plugins_url('custom.js',__FILE__),array('jquery'));
//    wp_localize_script('custom','myPlugin', array(
//            'ajaxurl' => admin_url('admin-ajax.php'),
//            'name' => wp_get_current_user()-> display_name
//    ));
//}

?>

