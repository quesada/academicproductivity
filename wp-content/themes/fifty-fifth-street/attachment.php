<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
    <?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>
    
    <div class="post" id="post-<?php the_ID(); ?>">
    
        <small class="caps"><?php the_time('F j, Y') ?></small>
        <?php comments_popup_link('0', '1', '%', 'bubble', 'Off'); ?>
        
        <h1><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        
        <div class="entry">
            <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>
            
            <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
            
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>
    </div>
    
    <?php comments_template(); ?>
    
    <?php endwhile; else: ?>
    
    <p>Sorry, no attachments matched your criteria.</p>
    
    <?php endif; ?>

</div>

<?php get_footer(); ?>
