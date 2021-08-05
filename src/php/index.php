<?php
/**
 * Template Name: contacts
 */
?>
<?php locate_template("head.php", true); ?>

<body>
  <?php get_header("inner");?>


    <h1><?php the_content() ?></h1>


  <?php get_footer(); ?>
  <?php locate_template("modal.php", true); ?>
  <?php locate_template("scripts.php", true); ?>
</body>
