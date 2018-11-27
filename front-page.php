<?php /* Template Name: Front-Page */ ?>
<?php get_header(); ?>
<?php
wp_nav_menu( array( 
    'theme_location' => 'front-page-menu', 
    'container_class' => 'allmighty',
    'link_before' => '<span onmouseover="onHover(this)" onmouseout="onMouseOut(this)">',
    'link_after'=>'</span>' ) ); 
?>
  <strong class="title"><?php the_field('title_message'); ?></strong>
  <script>
  var oldValue;
  function onHover(x) {
      oldValue = x.innerHTML;
      x.innerHTML = '<?php echo the_field('hover_text'); ?>';
      }
  function onMouseOut(x) {
    	x.innerHTML = oldValue;
      }
</script>
<?php get_footer(); ?>