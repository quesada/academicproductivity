<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">

<?php
if ($posts) {
foreach($posts as $post) { start_wp();
?>
<br />
<div class="post">
	 <a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
	<div class="cite"><?php the_time("l F dS Y") ?>, <?php the_time() ?> <?php edit_post_link(); ?><br />
<?php _e("Filed under:"); ?> <?php the_category(',') ?></div>
	
		<?php the_content(); ?>

	<div class="commentPos"><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?></div>
	<br />
	
    <div class="sep"></div>

	<!--
	<?php trackback_rdf(); ?>
	-->

<?php comments_template(); // Get wp-comments.php template ?>
</div>
<?php } // closes printing entries with excluded cats ?>

<?php } else { ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php } ?>

 <div class="right"><?php posts_nav_link('','','previous &raquo;') ?></div>
 <div class="left"><?php posts_nav_link('','&laquo; newer ','') ?></div>

<br /><br />

</div>

<?php get_footer(); ?>
