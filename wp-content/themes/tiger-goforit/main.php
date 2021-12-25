<?php

/**
 * Template Name: Main
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();
?>

<section id="hero" class="hero d-flex justify-content-center align-items-center">
    <div class="pasek1"></div>
    <div class="pasek2"></div>
    <div class="pasek3"></div>
    <div class="pasek4"></div>
    <div class="pasek5"></div>
    <div class="pasek6"></div>
    <div class="pasek7"></div>
    <div class="hero__content">
        <img class="hero__content--influ-1"src="<?php echo get_template_directory_uri(); ?>/assets/img/influ_1.png" alt="logo">
        <img class="hero__content--influ-2"src="<?php echo get_template_directory_uri(); ?>/assets/img/influ_2.png" alt="logo">
        <img class="hero__content--logo"src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_big.png" alt="logo">
    </div>
</section>

<section id="turniej" class="turniej">
    <img class="turniej__triangles-1"src="<?php echo get_template_directory_uri(); ?>/assets/img/triangles_1.png" alt="logo">
    <img class="turniej__triangles-2"src="<?php echo get_template_directory_uri(); ?>/assets/img/triangles_2.png" alt="logo">

    <div class="container turniej__content">
        <?php if ($s2_title = get_field('s2_title')) : ?>
            <div class="turniej__title">
                <h1>
                    <?php echo esc_html($s2_title); ?>
                </h1>
            </div>
        <?php endif; ?>
        <?php if ($s2_subtitle = get_field('s2_subtitle')) : ?>
            <div>
                <span class="bottom-line">
                    <?php echo esc_html($s2_subtitle); ?>
                </span>
            </div>
        <?php endif; ?>
        <?php
        $link = get_field('s2_button');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <div class="">
                <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="nagrody" class="nagrody">
    <div class="container">
        <?php if ($s3_title = get_field('s3_title')) : ?>
            <div>
                <h2>
                    <span class="bottom-line white-triangle">
                        <?php echo esc_html($s3_title); ?>
                    </span>
                </h2>

            </div>
        <?php endif; ?>
        <div class="nagrody__row">
            <?php if (have_rows('prizes')) : ?>
                <?php while (have_rows('prizes')) :
                    the_row(); ?>
                    <!-- <div class="col-lg-4"> -->
                    <div class="card prize" style="width: 35rem;">
                        <?php
                        $prizes_img = get_sub_field('prizes_img');
                        if ($prizes_img) : ?>
                            <div class="card-img-top prize__img">
                                <img class="" src="<?php echo esc_url($prizes_img['url']); ?>" alt="<?php echo esc_attr($prizes_img['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <?php if ($prizes_title = get_sub_field('prizes_title')) : ?>
                                <div class="card-title prize__title">
                                    <?php echo esc_html($prizes_title); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($prizes_txt = get_sub_field('prizes_txt')) : ?>
                                <div class="card-text prize__txt">
                                    <?php echo $prizes_txt; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- </div> -->

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="quali" class="quali">
    <div class="container">
        <?php if ($s4_title = get_field('s4_title')) : ?>
            <h2>
                <span class="bottom-line white-triangle">
                    <?php echo esc_html($s4_title); ?>
                </span>
            </h2>
        <?php endif; ?>


        <?php if (have_rows('quali')) : ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('quali')) :
                        the_row(); ?>
                        <div class="swiper-slide quali-box">
                            <!-- <div class=""> -->
                                <div class="quali-box__body">
                                    <?php if ($quali_title = get_sub_field('quali_title')) : ?>
                                        <div class="quali-box__title">
                                            <?php echo esc_html($quali_title); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($quali_date = get_sub_field('quali_date')) : ?>
                                        <div class="quali-box__date">
                                            <?php echo esc_html($quali_date); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <?php
                                $link = get_sub_field('quali_link');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-secondary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    </div>
                                <?php endif; ?>
                            <!-- </div> -->
                        </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    <?php endif; ?>
    </div>
</section>







<?php
get_footer();
