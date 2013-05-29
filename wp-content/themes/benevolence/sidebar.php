<div id="sidebar">

<br /><form style="padding: 0px; margin-top: 0px; margin-bottom: 0px;" id="searchform" method="get" action="<?php bloginfo('url'); ?>">

<p style="padding: 0px; margin-top: 0px; margin-bottom: 0px;"><input type="text" class="input" name="s" value="Search" id="search" /></p>
</form>

<br /><br /><br />
	<ul><?php wp_list_pages('list=0&title_li='); ?></ul>

<br /><br /><br /><div class="title">Categories</div>
	<ul><?php wp_list_cats(); ?></ul>

<br /><br /><br /><div class="title"><?php _e('Links'); ?></div>
<ul><?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', TRUE, 
TRUE, -1, TRUE); ?></ul>

<br /><br /><br /><div class="title"><?php _e('Archives'); ?></div>
<ul><?php wp_get_archives('type=monthly'); ?></ul>

<br /><br />
				
</div>

