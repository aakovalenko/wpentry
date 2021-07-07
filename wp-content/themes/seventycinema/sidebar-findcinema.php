<?php
if (! is_active_sidebar('sidebar-findcinema')) {
    return;
}
?>
<nav id="sidebar2">
    <aside id="secondary" class="widget-area">

        <form method="get" id="find-cinema-form">
                <div>
                    <input type="text" size="40" id="findFilm">
                    <label for="findFilm">Find film</label>

                </div>

            <button type="submit">Find</button>
            <button type="reset">Reset</button>
        </form>
    </aside>
</nav>
