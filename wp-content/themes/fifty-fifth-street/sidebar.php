<div id="sidebar">
    <ul>
    <?php 	/* Widgetized sidebar, if you have the plugin installed. */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    
    <?php if ( is_page() ) { ?>
    
    <?php
    if($post->post_parent)
    $children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); else
    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
    if ($children) { ?>
    
    <li>
        <h4><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></h4>
        <ul><?php echo $children; ?></ul>
    </li>
    
    <?php } } ?>
    
    
    <?php wp_list_categories('show_count=1&title_li=<h4>Categories</h4>'); ?>
    
    <li>
        <h4>Archives</h4>
        <ul><?php wp_get_archives('show_post_count=1&type=monthly'); ?></ul>
    </li>
    
    <?php wp_list_bookmarks('title_before=<h4>&title_after=</h4>'); ?>
    
    <li><h4>Meta</h4>
        <ul>
			<?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <li><a href="http://www.tammyhartdesigns.com">Custom WordPress Design</a></li>
            <li><a href="http://wordpress.org/">WordPress</a></li>
            <?php wp_meta(); ?>
        </ul>
    </li>
    
    <?php endif; ?>
    </ul>
</div>

