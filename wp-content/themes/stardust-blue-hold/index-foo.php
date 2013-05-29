<?php get_header(); ?>

        <div id="menu1">
        <ul>
        <li class="page_item current_page_item"><?php wp_loginout()?></li>
        </ul>
        </div>
    </div><!-- end header -->


<hr />

<div id="wrapper">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">

	 <h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<div class="meta"><span class="tags"><?php _e("Tag:"); ?> <?php the_category(',') ?></span> &#8212; <span class="user"><?php the_author() ?> @ <?php the_time() ?></span> <?php edit_post_link(__('Edit This')); ?></div>

	<div class="storycontent">
		<?php the_content("Continue reading " . the_title('"', '"', false)); ?>
	 <?php
	if ( !empty( $comment->comment_author_email ) ) {
		$md5 = md5( $comment->comment_author_email );
		$default = urlencode( 'http://use.perl.org/images/pix.gif' );
		echo "<img style='float: right; margin-left: 10px;' src='http://www.gravatar.com/avatar.php?gravatar_id=$md5&amp;size=60&amp;default=$default' alt='' />";
	}
	?>
	</div>
	<div class="feedback">
		<?php wp_link_pages(); ?>
		<p><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></p>
	</div>

</div>
<hr />
<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>

<?php get_footer(); ?>
