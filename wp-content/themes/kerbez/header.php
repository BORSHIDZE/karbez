<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kerbez
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>///cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="container_2 header__container">

      <div class="container">

        <div class="header__box">

          <div class="header__inner">

            <div class="header__logo">
              <a class="logo" href="#">
                <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="логотип">
              </a>
            </div>

            <div class="header__content">

              <h1 class="header__title">
                Создаем интерьеры, которые повышают качество жизни.
              </h1>

              <p class="header__text">
                Наша студия дизайна интерьера специализируется на создании функциональных и красивых пространств,
                которые
                отражают вашу
                индивидуальность и жизненный стиль. Мы поможем вам воплотить в жизнь ваши идеи и создать интерьер вашей
                мечты.
              </p>

              <form action="#" class="header__form">

                <input class="header__input" type="text" placeholder="Номер телефона">

                <button class="header__button" type="submit">Оставить заявку на консультацию</button>
              </form>

            </div>

          </div>

          <span class="header__right">
            <a class="header__link" href="tel:+77071092949">+7 (707) 109 29 49</a>
          </span>

        </div>

      </div>

    </div>

  </header>

  <main>