<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body>
<div id="wptime-plugin-preloader"></div>
  <header>
    <div class="row">
      <div class="header-wrapper">
        <div class="nav-logo">
          <h1>M.</h1>
        </div>
        <div class="main-nav">
          <nav class="nav-wrapper">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'top-menu',
                  'menu_id' => 'main-menu',
                  'conatiner' => 'ul',
                  'menu_class' => 'nav-menu-bar'
                )
              )?>
          </nav>
        </div>
      </div>
    </div>
  </header>
