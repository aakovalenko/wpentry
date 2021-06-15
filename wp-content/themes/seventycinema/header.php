<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title()?></title>
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= home_url() ?>">CINEMA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<!--        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">-->
<!--            <div class="navbar-nav">-->
<!--                <a class="nav-link active" aria-current="page" href="#">Home</a>-->
<!--                <a class="nav-link" href="#">Features</a>-->
<!--                <a class="nav-link" href="#">Pricing</a>-->
<!--                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
<!--            </div>-->
<!--        </div>-->
        <?= wp_nav_menu( [
                'container_class' => 'collapse navbar-collapse',
            'container_id' =>  'navbarNavAltMarkup',
            'theme_location' => 'header_menu',
            'menu_class' => 'navbar-nav',
            'link_class' => 'nav-link'
        ] ); ?>

    </div>
</nav>
