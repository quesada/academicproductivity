<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="post" id="post-<?php the_ID(); ?>">
        <small class="caps"><?php the_time('F j, Y') ?></small>
        <?php comments_popup_link('0', '1', '%', 'bubble', 'Off'); ?>
        
        <h1><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h1>
        
        <div class="entry">
            <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
            
            <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
            
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
            
            <div class="navigation">
                <div class="alignleft"><?php previous_image_link() ?></div>
                <div class="alignright"><?php next_image_link() ?></div>
            </div>
        
        </div>
    
    </div>
    
    <?php comments_template(); ?>
    
    <?php endwhile; else: ?>
    
    <p>Sorry, no attachments matched your criteria.</p>
    
    <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
