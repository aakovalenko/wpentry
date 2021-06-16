<nav class="navbar fixed-bottom navbar-dark bg-dark">
    <div class="container-fluid">
    <span class="navbar-text">
      All right reserved <?= date('Y')?>
        <?php wp_nav_menu([
                'menu' => 'footerMain',
            'theme_location' => 'footer-menu'
        ]); ?>
    </span>
    </div>
</nav>
</body>
</html>