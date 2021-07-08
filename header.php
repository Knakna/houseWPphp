

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title><?php bloginfo('description'); ?> </title>


    <?php wp_head(); ?>

</head>

<body>

    <!------------ header ------------>
    <header class="header" id="header">
        <div class="header__container">

            <!-- burger -->
            <button class="burger">
                <span class="burger__line"> </span>
            </button>

            <div class="header__inner">
                <div class="header__links">
                    <a class="logo header__logo" href="#">
                        <svg class="logo__img">
                            <use xlink:href="<?php echo IMG_DIR; ?>/sprite.svg#logo"> </use>
                        </svg>
                    </a>
                    <nav class="header__nav">

                    <?php wp_nav_menu( [
                        'theme_location'  => 'top_menu',
                        'container'       => null,
                        'menu_class'      => 'header__list',
                        'menu_id'         => 'nav',
                    ] ); ?>

                        
                    </nav>
                </div>

                <div class="header__btns">
                    <button class="header__search-btn">
                        <svg class="header__search">
                            <use xlink:href="<?php echo IMG_DIR; ?>/sprite.svg#search"> </use>
                        </svg>
                    </button>
                    <button class="header__btn btn">Sign In</button>
                    <button class="header__btn btn active">Sign Up</button>
                </div>


            </div> <!-- /.header__inner -->
        </div> <!-- /.header__container -->
    </header> <!-- /.header -->