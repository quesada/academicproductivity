<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		<?php /* if(function_exists('the_ratings')) { the_ratings(); } */ ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link(); ?> </small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata">Posted in <?php the_category(', ') ?> |
				<?php edit_post_link('Edit', '', ' | '); ?>  <?php
				comments_popup_link('No Comments &#187;', '1 Comment &#187;', '%
				Comments &#187;'); ?> | <?php the_view_count(); ?> views</p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<!--<h4 class="center">Related posts:</h4>-->
			<?php /* if(function_exists('the_ratings')) { the_ratings(); } */ ?>
			<!--<ul><?php /* similar_posts(); */ ?></ul>-->
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
