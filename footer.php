
    <!------------ footer ------------>

    <footer class="footer">
        <div class="container">
            <div class="footer__wrap">


            <?php wp_nav_menu( [
                        'theme_location'  => 'footer_menu',
                        'container'       => null,
                        'menu_class'      => 'footer__list',
                        'menu_id'         => 'footer__nav',
                    ] ); ?>


               

                <a class="footer__logo logo" href="#header">
                    <svg class="logo__img">
                        <use xlink:href="<?php echo IMG_DIR; ?>/sprite.svg#logo"> </use>
                    </svg>
                </a>

            </div> <!-- footer__wrap -->

        </div> <!-- container -->
    </footer> <!-- footer -->



    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



    <script src="assets/js/script.js"></script> -->

    <?php wp_footer(); ?>

</body>

</html>