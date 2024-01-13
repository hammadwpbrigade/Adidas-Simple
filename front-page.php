<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 
 */

get_header();
?>

<main>
    <style>
        .swiper-slide {
            content: "";
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(rgba(211, 211, 211, 0.3), rgba(211, 211, 211, 0.3)), url(http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-7.png);
        }

        .swiper-button-prev {
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/hero-slider-leftt-arrow.png');
            background-size: cover;
            width: 25px;
            transform: translateY(-530%);
        }

        .swiper-button-next {
            margin-right: 485px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/hero-slider-right-arrow.png');
            background-size: cover;
            transform: translateY(-530%);
        }

        .wp-post-image {
            padding-left: 12px;
            padding-top: 10px;
        }

        .swiper-pagination {
            padding-right: 310px;
        }

        .category-thumbnail-content {
            margin-top: 25px;
            margin-left: 25px;
            width: 344px;
            margin-right: 100px;
        }

        .sticky-post {
            max-width: 74%;
            background: linear-gradient(0deg, rgba(8, 81, 45, 0.50) 0%, rgba(8, 81, 45, 0.50) 100%), url('http://adidas-theme.local/wp-content/uploads/2024/01/backstickpost.png'), lightgray 0% 0% / 100px 100px repeat;
            margin-bottom: 20px;
        }

        .post-thumbnail {
            align-items: stretch;
            display: flex;
        }

        .thumbnail img {
            padding: 0px;
        }

        .zig-zag-img {
            clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 11% 100%);
            height: 225px;
            width: 484px;
        }

        .post-1 {
            width: 225px;
            margin: 20px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-2-copy-2-1.png');
            align-items: flex-end;
            display: grid;
        }

        .events-container {
            width: 255px;
            margin-top: 40px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-2-copy-2-1.png');
        }

        .categories {
            width: 255px;
            margin-top: 15px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-2-copy-2-1.png');
        }

        .event-header {
            color: white;
            padding-left: 7px;
            padding: 7px;
            background-color: black;
            opacity: 0.4;
        }

        .category-h {
            color: white;
            padding-left: 7px;
            padding: 7px;
            background-color: black;
            opacity: 0.4;
        }

        .read-more {
            background-color: black;
            opacity: 0.5;
        }

        hr {
            color: white;
        }

        .e-slidediv1 {
            display: flex;
        }

        .event-h {
            text-decoration: underline;
            font-weight: bold;
        }

        .e-slidediv1-content {
            padding-left: 10px;
        }

        .time1 {
            color: white;
            opacity: 0.702;
        }

        .more-events {
            color: white;
            text-decoration: underline;
            margin-left: 20px;
            font-weight: bold;
        }

        .back-arrow button,
        .forward-arrow button {
            background: rgba(9, 198, 71, 0.50);
            margin-bottom: 15px;
            border-color: transparent;
        }

        .forward-arrow button {
            margin-left: 7px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <?php
    $slider_image_1 = get_option('slider_background_image');
    ?>
    <?php
    // Assuming $slides contains the information for all three slides
    $slides = array();
    $num_slides = get_option('num_slides', 3);

    // Loop to retrieve the slider information
    for ($i = 1; $i <= $num_slides; $i++) {
        $slide = array(
            'second_image' => get_option('slide_content' . $i),
            'slider_header' => get_option('slide_header' . $i, 'Default Slider Header'),
            'slider_text' => get_option('slide_textarea' . $i, 'Default Slider Text'),
            'link_url' => get_option('video_url' . $i, 'https://wpbrigade.com/')
        );

        // Add the slide information to the $slides array
        $slides[] = $slide;
    }
    ?>
    <div class="hero" style="background-image:url('<?php echo esc_url($slider_image_1); ?>');background-size:cover;height:650px;">
        <div class="owl-carousel">
            <?php foreach ($slides as $slide) : ?>
                <div class="slide item" style="display:flex;flex-direction:row-reverse;">
                    <?php if (!empty($slide['second_image'])) : ?>
                        <div class="second-image">
                            <div class="video-content">
                                <img src="<?php echo esc_url($slide['second_image']); ?>" alt="Second Image" class="video-thumbnail">
                                <div id="mp4-hero">
                                    <a class="play-btn" data-fancybox data-type="iframe" data-src="<?php echo esc_url($slide['link_url']); ?>" href="javascript:;">
                                        <img class="flex" src="http://adidas-theme.local/wp-content/uploads/2024/01/play-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="caption">
                        <h2 class="slide-header"><?php echo esc_html($slide['slider_header']); ?></h2>
                        <p class="slide-textarea"><?php echo esc_html($slide['slider_text']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="global_container_" style="max-width: 1290px; height: auto; margin: auto; padding: 1px; position: relative;">
        <div class="data-container" style="display: flex;">
            <div class="col" style="height: 260px;">
                <div class="slider" style="width: 76%;">
                    <div class="swiper" style="width: 700px; height: 210px;margin-top: 55px;">
                        <div class="swiper-wrapper">
                            <?php
                            $slider_query = new WP_Query(array(
                                'post_type' => 'slider',
                                'posts_per_page' => -1, // Retrieve all slider items
                            ));

                            if ($slider_query->have_posts()) :
                                while ($slider_query->have_posts()) : $slider_query->the_post();
                            ?>
                                    <div class="swiper-slide" style="height:fit-content;">
                                        <a href="<?php the_permalink(); ?>" class="link-txt-slide">
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                        <div class="slider-content">
                                            <h6>
                                                <a href="<?php the_permalink(); ?>" style="text-decoration: underline;padding-left:12px;padding-top:10px;color:white;"><?php the_title(); ?></a>
                                            </h6>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'No slider items found';
                            endif;
                            ?>
                        </div>
                        <div class="swiper-pagination" style="margin-left: 25%;"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <hr>
                </div>
                <div class="sticky-post" id="displayed-post">
                    <div class="post-wrapper" style="display:flex;">
                        <div class="post-content">
                            <?php
                            $category_id = 5;
                            $sticky_args = array(
                                'posts_per_page'      => 1,
                                'post__in'            => get_option('sticky_posts'),
                                'ignore_sticky_posts' => 1,
                                'category__in'        => $category_id,
                            );
                            $sticky_query = new WP_Query($sticky_args);

                            if ($sticky_query->have_posts()) {
                                while ($sticky_query->have_posts()) {
                                    $sticky_query->the_post();
                                    $category_posts_args = array(
                                        'posts_per_page' => -1, // Set the number of posts to display (-1 for all)
                                        'category__in'   => $category_id,
                                    );
                                    $category_posts_query = new WP_Query($category_posts_args);

                                    if ($category_posts_query->have_posts()) {
                                        echo '<div class="category-posts-thumbnails" >';
                                        while ($category_posts_query->have_posts()) {
                                            $category_posts_query->the_post();
                                            $category_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                            ?>
                                            <div class="sticky-post-material" style="display:flex;flex-direction:row-reverse;">
                                                <div class="category-thumbnail">
                                                    <?php if (!empty($category_featured_img_url)) { ?>
                                                        <img class="zig-zag-img" src="<?php echo esc_url($category_featured_img_url); ?>" alt="<?php esc_attr(get_the_title()); ?>" />
                                                    <?php } else { ?>
                                                        No featured image available.
                                                    <?php } ?>
                                                </div>
                                                <div class="category-thumbnail-content">
                                                    <h5 style="color:white;"><?php the_title(); ?></h5>
                                                    <div><?php the_content(); ?></div>
                                                </div>
                                            </div>
                            <?php
                                        }
                                        echo '</div>';
                                        wp_reset_postdata(); // Reset the category posts loop
                                    } else {
                                        echo 'No posts found in the specified category.';
                                    }
                                }
                                wp_reset_postdata(); // Reset the sticky post loop
                            } else {
                                echo 'Sticky post not found in the specified category.';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="posts" style="display:flex;">
                    <?php
                    // Custom query to get posts from the 'group-posts' category
                    $args = array(
                        'category_name' => 'group-posts',
                        'posts_per_page' => -1, // -1 to display all posts
                    );
                    $custom_query = new WP_Query($args);

                    // Assuming this code is within the WordPress Loop
                    if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post();
                    ?>
                            <div class="post-1">
                                <div class="thumbnail">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {

                                        echo '<img  src="path_to_default_image" alt="Default Image">';
                                    }
                                    ?>
                                </div>
                                <div class="post-content" style="padding:20px;">
                                    <h6 style="color:white;"><?php the_title(); ?></h6>
                                    <div class="text" style="color:white;"><?php the_excerpt(); ?></div>
                                </div>
                                <div class="read-more">
                                    <a style="color:white" href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No posts found</p>';
                    endif;
                    ?>
                </div>
                <div class="twitter-feed">
                    <ul id="tweet-list"></ul>
                </div>
            </div>
            <div class="aside">
                <div class="events-container">
                    <div class="events-right">
                        <div class="event-header">
                            <h5>Events</h5>
                        </div>
                        <div class="slideable-content">
                            <div class="slider-container-events">
                                <?php
                                $args = array(
                                    'post_type'      => 'events',
                                    'posts_per_page' => 3,
                                    'order'          => 'DESC',
                                );
                                $events_query = new WP_Query($args);

                                if ($events_query->have_posts()) :
                                    while ($events_query->have_posts()) : $events_query->the_post();
                                ?>
                                        <div class="e-slidediv1">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <div class="e-slidediv1-content">
                                                <a href="<?php the_permalink(); ?>" class="event-h"><?php the_title(); ?></a>
                                                <p class="time1">
                                                    <?php
                                                    echo '' . get_post_meta(get_the_ID(), '_start_date', true);
                                                    echo '<br>';

                                                    echo '' . get_post_meta(get_the_ID(), '_start_time', true) . ' - ' . get_post_meta(get_the_ID(), '_end_time', true);
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo 'No events found';
                                endif;
                                ?>
                            </div>
                            <div class="controls" style="display: flex;margin:10px;">
                                <div class="back-arrow">
                                    <button onclick="showSlide2('prev')"><img class="arrows" src="http://adidas-theme.local/wp-content/uploads/2024/01/flat-color-icons_next.png" /></button>
                                </div>
                                <div class="forward-arrow">
                                    <button onclick="showSlide2('next')"><img class="arrows" src="http://adidas-theme.local/wp-content/uploads/2024/01/flat-color-icons_next-4.png" /></button>
                                </div>
                                <div class="more-events">
                                    <p onclick="showSlide2('next')">More Events</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="category-h">
                        <h5>Categories</h5>
                    </div>
                    <div class="cat-content">
                        <ul class="categories-list">
                            <li class="category sports-shoes">
                                <span class="icon" style="background-image: url('sports-shoes-icon.png');"></span>
                                Sports Shoes
                                <ul class="subcategory">
                                    <li>Running Shoes</li>
                                    <li>Basketball Shoes</li>
                                    <li>Tennis Shoes</li>
                                </ul>
                            </li>

                            <li class="category sports-garments">
                                <span class="icon" style="background-image: url('sports-garments-icon.png');"></span>
                                Sports Garments
                                <ul class="subcategory">
                                    <li>Jerseys</li>
                                    <li>Shorts</li>
                                    <li>Jackets</li>
                                </ul>
                            </li>

                            <li class="category sports-goods">
                                <span class="icon" style="background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Vector-1.png');"></span>
                                Sports Goods
                                <ul class="subcategory">
                                    <li>Balls</li>
                                    <li>Rackets</li>
                                    <li>Equipment</li>
                                </ul>
                            </li>

                            <li class="category leather-garments">
                                <span class="icon" style="background-image: url('leather-garments-icon.png');"></span>
                                Leather Garments
                                <ul class="subcategory">
                                    <li>Jackets</li>
                                    <li>Pants</li>
                                    <li>Accessories</li>
                                </ul>
                            </li>

                            <li class="category accessories">
                                <span class="icon" style="background-image: url('accessories-icon.png');"></span>
                                Accessories
                                <ul class="subcategory">
                                    <li>Hats</li>
                                    <li>Bags</li>
                                    <li>Socks</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="weather">
                </div>
                <div class="date_time">
                </div>
                <div class="newsletter">
                </div>
            </div>
        </div>


        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                navText: [
                    "<img src='http://adidas-theme.local/wp-content/uploads/2024/01/hero-slider-leftt-arrow.png' alt='Left Arrow'>",
                    "<img src='http://adidas-theme.local/wp-content/uploads/2024/01/hero-slider-right-arrow.png' alt='Right Arrow'>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        </script>
        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 19,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 19,
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                },
            });
        </script>
</main>
<?php
include_once get_template_directory() . '/inc/theme-options.php';
get_footer();
