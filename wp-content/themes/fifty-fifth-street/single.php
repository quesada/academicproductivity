<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <small class="caps"><?php the_time('F j, Y') ?></small>
        <?php comments_popup_link('0', '1', '%', 'bubble', 'Off'); ?>
        
        <h1><?php the_title(); ?></h1>
        
        <small>By <?php the_author_posts_link(); ?> in <?php the_category(', ') ?></small>
        
        <div class="entry">
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
            
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            
            <?php the_tags( '<p><strong>Tags:</strong> ', ', ', '</p>'); ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        </div>
        
        <div class="navigation">
            <div class="alignleft"><?php previous_post_link('%link') ?></div>
            <div class="alignright"><?php next_post_link('%link') ?></div>
        </div>
    </div>
    
    <?php comments_template(); ?>
    
    <?php endwhile; else: ?>
    
    <p>Sorry, no posts matched your criteria.</p>
    
    <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
