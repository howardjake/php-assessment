<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <h1>List of State and Territories</h1>
    <div class='state-list'>
        <?php include 'fetch_states.php'; ?>
    </div>

    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>