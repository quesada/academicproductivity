<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?>
    
    <h1 class="pagetitle">Search Results</h1>
    
    <?php while (have_posts()) : the_post(); ?>
    
    <div <?php post_class() ?>>
        <small class="caps"><?php the_time('F j, Y') ?></small>
        <?php comments_popup_link('0', '1', '%', 'bubble', 'Off'); ?>
        
        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <small>By <?php the_author_posts_link(); ?> in <?php the_category(', ') ?></small>
        
        <div class="entry">
			<?php the_excerpt() ?>
            <?php the_tags( '<p><strong>Tags:</strong> ', ', ', '</p>'); ?>
        </div>
    
    </div>
    
    <?php endwhile; ?>
    
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
    </div>
    
    <?php else : ?>
    
    <small class="caps">&nbsp;</small>
    
    <h1>No posts found.</h1>
    
    <p>Try a different search?</p>
    <?php get_search_form(); ?>
    
    <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
