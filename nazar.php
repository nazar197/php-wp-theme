<?php
/*
Template Name: Nazar's template
Template Post Type: page
*/
?>

<?php get_header(); ?>

<header>
  <div class="container">
    <h1>We Are Rocking This World!</h1>
  </div>
</header>

<?php get_template_part( 'partials/sections/section', 'popular' ); ?>
<?php get_template_part( 'partials/sections/section', 'important' ); ?>
<?php get_template_part( 'partials/sections/section', 'ukraine' ); ?>

<?php get_footer();