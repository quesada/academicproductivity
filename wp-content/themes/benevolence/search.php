<?php include "header.php"; ?>

<div id="content">
 <div class="post">
  <?php if (have_posts()) : ?>
	<br />
   <div class="title">Search Results</div>
    <div class="searchdetails"> Search results for "<?php echo ""."$s"; ?>" </div><br />
     <?php while (have_posts()) : the_post(); ?>
     <a class="title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
     <?php _e("("); ?> <?php the_category(' and') ?> <?php _e(")"); ?>
      <?php the_excerpt() ?>
       <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">( more )</a>
<br /><br /><br />
  <?php endwhile; ?>
<?php else : ?>
 NothingNot Found
<?php endif; ?>
</div>

<div class="right"><?php posts_nav_link('','','previous &raquo;') ?></div>
 <div class="left"><?php posts_nav_link('','&laquo; newer ','') ?></div>
</div>
<br /><br />

<?php include "footer.php"; ?>