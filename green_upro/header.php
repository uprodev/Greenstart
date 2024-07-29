<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line open">
      <div class="content-width">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                <img class="img-svg" src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
            </a>
          </div>
        <?php endif ?>
        
        <nav class="top-menu-wrap">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header',
            'container'       => '',
            'items_wrap'      => '<ul class="top-menu">%3$s</ul>'
          )); ?>

          <?php if ($field = get_field('link_h', 'option')): ?>
            <div class="btn-wrap">
              <a href="<?= $field['url'] ?>" class="btn-default"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </div>
          <?php endif ?>

          <div class="open-menu">
            <a href="#">
              <img src="<?= get_stylesheet_directory_uri() ?>/img/menu.svg" alt="">
            </a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="wrap">
      <nav class="mob-menu-wrap">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header',
            'container'       => '',
            'items_wrap'      => '<ul class="mob-menu">%3$s</ul>'
          )); ?>


          <?php if ($field = get_field('link_h', 'option')): ?>
            <div class="btn-wrap">
              <a href="<?= $field['url'] ?>" class="btn-default btn-green"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </div>
          <?php endif ?>

      </nav>
    </div>
  </div>

  <main>