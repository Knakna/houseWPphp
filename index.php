
<?php get_header(); ?>


    <!------------ main ------------>
    <main class="main">
        <div class="container">
            <h1 class="main__title">
            <?php the_field('main__title'); ?>
            <span class="main__accent">
            <?php the_field('main__accent'); ?>
            </span>

            </h1>



            <div class="main__wrap">

                <div class="main__desc">
                    <p class="main__text text">
                    <?php the_field('main__text'); ?>
                    </p>
                    <button class="main__btn btn">Free Consultation</button>
                </div>

                <picture class="main__wrap-img">
                    <img class="main__img" src=" <?php the_field('main__img'); ?> " alt="house">
                </picture>

            </div> <!-- /.main__wrap -->
        </div> <!-- /.container -->
    </main> <!-- /.main -->


    <!------------ room  ------------>
    <section class="room">
        <div class="container">
            <h2 class="room__title title">
            <?php the_field('room__title'); ?>
            </h2>

            <div class="room__gallery" id="gallery">
                <a class="room__img" href="<?php the_field('room__img'); ?>">
                    <img src= <?php the_field('room__img'); ?> alt="image">
                </a>

                <a class="room__img" href="<?php the_field('room__img2'); ?>">
                    <img src= <?php the_field('room__img2'); ?> alt="image">
                </a>

                <a class="room__img" href="<?php the_field('room__img3'); ?>">
                    <img src="<?php the_field('room__img3'); ?>" alt="image">
                </a>

                <a class="room__img" href="<?php the_field('room__img4'); ?>">
                    <img src= <?php the_field('room__img4'); ?> alt="image">
                </a>

                <a class="room__img" href="<?php the_field('room__img5'); ?>">
                    <img src="<?php the_field('room__img5'); ?>" alt="image">
                </a>

                <a class="room__img" href="<?php the_field('room__img6'); ?>">
                    <img src= <?php the_field('room__img6'); ?> alt="image">
                </a>

            </div> <!-- /.room__gallery -->

        </div><!-- /.container -->
    </section><!-- /.room -->


    <!------------ archmove  ------------>
    <section class="archmove" id="archmove">
        <div class="container">
            <h2 class="archmove__title title">
            <?php the_field('archmove__title'); ?>
            </h2>

            <div class="archmove__wrap">

                <picture class="archmove__wrap-img">
                    <img class="archmove__img" src= <?php the_field('archmove__img'); ?> alt="image">
                </picture>

                <div class="archmove__boxes">

                    <?php foreach(getFeatures() as $feature): ?>

                        <div class="archmove__box">
                            <div class="archmove__wrap-icon">
                                <img class="archmove__icon" src="<?php echo $feature['img'] ?>" alt="icon">
                            </div>
                            <div class="archmove__desc">
                                <h4 class="archmove__caption">
                                <?php echo $feature['title'] ?>
                                </h4>
                                <p class="archmove__text text">
                                <?php echo $feature['text'] ?>
                                </p>

                                <i> <?php echo $feature["add__desc"]?> </i>
                            </div>
                        </div>   <!-- /.archmove__box -->

                    <?php endforeach; ?>



                <button class="archmove__btn btn">CONSULTATION</button>

                </div>



            </div> <!-- /.archmove__wrap -->
        </div><!-- /.container -->
    </section><!-- /.archmove -->


    <!------------ reviews ------------>

    <section class="reviews" id="reviews">
        <div class="container">
            <h2 class="reviews__title title">
            <?php the_field('reviews__title'); ?>
            </h2>

            <div class="reviews__wrap">

                <!----- swiper  ----->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="reviews__article">

                                <blockquote class="reviews__blockquote">
                                <?php the_field('reviews__blockquote'); ?>
                                </blockquote>
                                <cite class="reviews__author"><span class="reviews__name">  <?php the_field('reviews__name'); ?> </span>
                                <?php the_field('reviews__author'); ?>
                                 </cite>
                            </article>

                        </div> <!-- /.swiper-slide -->

                        <div class="swiper-slide">
                        <article class="reviews__article">

                            <blockquote class="reviews__blockquote">
                            <?php the_field('reviews__blockquote2'); ?>
                            </blockquote>
                            <cite class="reviews__author"><span class="reviews__name">  <?php the_field('reviews__name2'); ?> </span>
                            <?php the_field('reviews__author2'); ?>
                            </cite>
                            </article>
                        </div> <!-- /.swiper-slide -->


                        <div class="swiper-slide">
                        <article class="reviews__article">

                            <blockquote class="reviews__blockquote">
                            <?php the_field('reviews__blockquote3'); ?>
                            </blockquote>
                            <cite class="reviews__author"><span class="reviews__name">  <?php the_field('reviews__name3'); ?> </span>
                            <?php the_field('reviews__author3'); ?>
                            </cite>
                        </article>
                        </div> <!-- /.swiper-slide -->

                    </div> <!-- /.swiper-wrapper -->


                    <div class="swiper-button-prev">
                        <svg viewBox="0 0 20 20">
                            <use xlink:href="<?php echo IMG_DIR; ?>/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg viewBox="0 0 20 20">
                            <use xlink:href="<?php echo IMG_DIR; ?>/sprite.svg#arrow"></use>
                        </svg>
                    </div>

                </div> <!-- /.swiper-container -->
            </div><!-- /.container -->
    </section><!-- /.reviews -->


    <!------------ realize ------------>

    <section class="realize" id="realize">
        <div class="container ">
            <div class="realize__wrap">
                <h2 class="realize__title title">
                <?php the_field('realize__title'); ?>

                <span class="realize__color">
                <?php the_field('realize__color'); ?>
                </span></h2>
                <button class="realize__btn btn">FREE CONSULTATION</button>
            </div>
        </div> <!-- /.container -->
    </section> <!-- /.realize -->



    <section class="partners">
        <div class="container">
            <h2 class="partners__title title">Our Partners</h2>
            <div class="partners__wrap">
                <img class="partners__img" src="<?php echo IMG_DIR; ?>/partners/logo-1.png" alt="partner" width="160"
                    height="56">
                <img class="partners__img" src="<?php echo IMG_DIR; ?>/partners/logo-2.png" alt="partner">
                <img class="partners__img" src="<?php echo IMG_DIR; ?>/partners/logo-3.png" alt="partner">
                <img class="partners__img" src="<?php echo IMG_DIR; ?>/partners/logo-4.png" alt="partner">
                <img class="partners__img" src="<?php echo IMG_DIR; ?>/partners/logo-5.png" alt="partner">
            </div>
        </div><!-- /.container -->
    </section><!-- /.partners -->



<?php get_footer(); ?>

