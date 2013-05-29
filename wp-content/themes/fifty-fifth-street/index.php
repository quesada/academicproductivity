<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : $counter = 0; ?>
    
    <?php while (have_posts()) : the_post(); $counter++; ?>
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <small class="caps"><?php the_time('F j, Y') ?></small>
        <?php comments_popup_link('0', '1', '%', 'bubble', 'Off'); ?>
        
        <?php if ($counter == 1) { ?><h1><?php } 
        					else { ?><h2><?php } ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        <?php if ($counter == 1) { ?></h1><?php } 
        					else { ?></h2><?php } ?>
        
        <small>By <?php the_author_posts_link(); ?> in <?php the_category(', ') ?></small>
        
        <div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
                                 
            <?php the_tags( '<p><strong>Tags:</strong> ', ', ', '</p>'); ?>
        </div>
    </div>
    
    <?php endwhile; ?>
    
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link('Older Posts') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Posts') ?></div>
    </div>
    
    <?php else : ?>
    
    <h1>Not Found</h1>
    
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>
    
    <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
