<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <input type="image" id="searchsubmit" src="<?php bloginfo('template_url'); ?>/images/search.gif" />
</form>
