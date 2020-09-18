<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset=<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="author" content="Emma Léger">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <header>

    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">
        <img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png" alt="logo gratia"> Gratia

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mr-auto"> </div>
        <div class="my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/wordpress/blog/">Blog</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main>
