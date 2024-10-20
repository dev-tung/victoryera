<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <title>Victory Era Travel Company</title>

    <link rel="stylesheet" href="<?php echo WT_ASSET('css/swiper.css'); ?>" />
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/reset.css'); ?>" />
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/define.css'); ?>" />
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/font.css'); ?>" />
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/modal.css'); ?>" />
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/button.css'); ?>" />
  </head>
  <body>
    
    <div class="web <?php echo !empty( $_webInvert ) ? 'web--invert' : ''; ?>" id="web">
      <header class="header" id="header">
        <div class="container">
          <div class="header__top">
            <div class="header-icons">
              <a href="<?php echo home_url('/');?>"><img class="header-icons__logo" src="<?php echo WT_ASSET('img/header/Logo.png');?>" alt="img/header/Logo.png"/></a>
              <img class="header-icons__bar" id="header-icons__bar" src="<?php echo WT_ASSET('img/icon/bar.png');?>" alt="img/icon/close.png">
              <img class="header-icons__cls" id="header-icons__cls" src="<?php echo WT_ASSET('img/icon/close.png');?>" alt="img/icon/close.png">
            </div>
            <div class="header__menu" id="header__menu">
              <nav class="header-nav" id="header-nav">
                <a class="header-nav__link" href="<?php echo home_url('/');?>">Home</a>
                <div class="header-nav__group">
                  <a class="header-nav__link header-nav__link--down" href="#">Tours in Vietnam</a>
                  <nav class="header-nav__sub">
                    <a class="header-nav__link" href="<?php echo home_url('/').'?s=&c=vietnam-package';?>">Vietname Package</a>
                    <div class="header-nav__group">
                      <a class="header-nav__link header-nav__link--right" href="#">Tours in Ha Long</a>
                      <nav class="header-nav__sub-right">
                        <a class="header-nav__link" href="<?php echo home_url('/').'?s=&c=halong-day-cruise';?>">Halong Day Cruises</a>
                        <a class="header-nav__link" href="<?php echo home_url('/').'?s=&c=halong-2n1d';?>">Halong Overnight Cruises</a>
                      </nav>
                    </div>
                    <a class="header-nav__link" href="<?php echo home_url('/').'?s=&c=southern-vietnam';?>">Southen Tours</a>
                    <a class="header-nav__link" href="<?php echo home_url('/').'?s=&c=northern-vietnam';?>">Northern Tours</a>
                    <a class="header-nav__link" href="<?php echo home_url('/').'?s=&c=central-vietnam';?>">Central Tours</a>
                  </nav>
                </div>
                <a class="header-nav__link" href="<?php echo home_url('/').'?cat=16';?>">Travel Guide</a>
                <a class="header-nav__link" href="<?php echo home_url('/').'?cat=14'; ?>">Booking Policy</a>
                <a class="header-nav__link" href="<?php echo home_url('/').'?cat=15';?>">Services</a>
                <a class="header-nav__link" href="<?php echo home_url('/').'?p=45'; ?>">About Us</a>
              </nav>
              <form class="header-search" action="<?php echo home_url('/');?>">
                <?php
                    $search_value = !empty( $_GET['s'] ) ? $_GET['s'] : '';
                ?>
                <input class="header-search__input" name="s" value="<?php echo $search_value; ?>" type="text" placeholder="Where do you want to go?">
                <button class="header-search__btn"><img class="header-search__icon" src="<?php echo WT_ASSET('img/header/search-icon.png');?>" alt="search-icon.png"></button>
              </form>
            </div>
          </div>
          <?php if( empty( $_webInvert ) ): ?>
            <div class="header-banner">
              <h1 class="header-banner__title">Victory Era Travel Company</h1>
              <p class="header-banner__text">Your journey - Our mision</p>
            </div>
          <?php endif; ?>
        </div>
      </header>
