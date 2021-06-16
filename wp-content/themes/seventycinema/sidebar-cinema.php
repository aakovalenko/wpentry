<?php
if (! is_active_sidebar('sidebar-cinema')) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-cinema');?>
</aside>