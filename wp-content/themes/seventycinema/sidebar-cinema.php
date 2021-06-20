<?php
if (! is_active_sidebar('sidebar-cinema')) {
    return;
}
?>
<nav id="sidebar">
<aside id="secondary" class="widget-area">
    <!--<?php //dynamic_sidebar('sidebar-cinema');?>-->
    <form method="get" id="filter-genre-form">
        <?php
        $cinemaGenre = get_terms([
            'taxonomy' => 'cinema_genre',
        ]);

        foreach ($cinemaGenre as $genre) : ?>
            <div>
                <input type="checkbox" name="filter[genre][]" id="genre_<?php echo $genre->term_id; ?>" value="<?php echo $genre->term_id;?>"/>
                <label for="genre_<?php echo $genre->term_id; ?>"><?php echo $genre->name?></label>

            </div>

        <?php endforeach;?>
        <button type="submit">FIlter</button>
        <button type="reset">Reset</button>
    </form>
</aside>
</nav>