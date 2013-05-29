<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!--  Visitor Monitor HTML v4.00 (Website=- None -,Ruleset=My Invite Ruleset,Floating Chat=- None - 
<script type="text/javascript">
  var _bcvma = _bcvma || [];
  _bcvma.push(["setAccountID", "305096624020506934"]);
  _bcvma.push(["setParameter", "InvitationDefID", "6383310899068720745"]);
  _bcvma.push(["pageViewed"]);
  (function(){
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/305096624020506934/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  })();
</script>
<noscript>
<a href="http://www.boldchat.com" title="Visitor Monitoring" target="_blank"><img alt="Visitor Monitoring" src="https://vms.boldchat.com/aid/305096624020506934/bc.vmi?" border="0" width="1" height="1" /></a>
</noscript>
<div style="display: none; border: 1px solid black; background: white; font-family: Arial; font-size: 8pt; color: black;"><a href="http://www.boldchat.com" style="text-decoration: none; color: black;">Live chat</a> by BoldChat</div>
/ Visitor Monitor HTML v4.00 -->


<title>
<?php 
      if ( is_front_page() || is_home() ) { 
	echo bloginfo('description');
} elseif ( is_single() || is_page() ) {
	echo wp_title('');
} elseif (is_404()) {
	echo '404 Not Found';
} elseif (is_category()) {
	echo 'Category:'; wp_title('');
} elseif (is_search()) {
	echo 'Search Results: '; the_search_query();
} elseif ( is_day() || is_month() || is_year() ) {
	echo 'Archives:'; wp_title('');
} else {
	echo wp_title(''); } ?>
     &raquo; <?php bloginfo('name'); ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">

    <div id="header">
        <a href="<?php bloginfo('url'); ?>/" id="sitename"><!--fifty fifth &#64262;reet--><?php bloginfo('name'); ?></a>
        
        <ul id="nav"><?php wp_list_pages('title_li=&depth=1'); ?></ul>
        
        <?php get_search_form(); ?>
    </div>
