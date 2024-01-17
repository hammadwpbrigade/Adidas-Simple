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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0"
    nonce="6eRkiD6I"></script>
<main>
    <style>
        .aside {
            padding-right: 380px;
            width: 399px;
        }

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
            margin-left: 64px;
            transform: translateY(-1680%);
        }

        .swiper-button-next {
            margin-right: 410px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/hero-slider-right-arrow.png');
            background-size: cover;
            transform: translateY(-1680%);
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

        .sticky-post1 {
            max-width: 97%;
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

        .twitter-timeline {
            background-color: white;
        }

        .zig-zag-img {
            clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 11% 100%);
            height: 225px;
            width: 484px;
        }

        .post-1 {
            width: 225px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-2-copy-2-1.png');
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

        .weather {
            width: 255px;
            margin-top: 15px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-2-copy-2-1.png');
        }

        .date_time {
            width: 255px;
            margin-top: 15px;
            background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/Rectangle-2-copy-2-1.png');
        }

        .newsletter {
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

        .weather-h {
            color: white;
            padding-left: 7px;
            padding: 7px;
            background-color: black;
            opacity: 0.4;
        }

        .dt-h {
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

        .social-section {
            margin-top: 24px;
            display: flex;
        }

        .twitter-feed {
            width: 50%;
        }

        .facebook-page {
            width: 50%;
        }

        .date {
            color: white;
            margin: 7px;
        }

        .time {
            color: white;
            margin: 7px;
        }

        .gr-btn {
            margin-top: 7px;
            margin-bottom: 10px;
            width: 95%;
            color: white;
            background-color: black;
        }

        .twitter-timeline {
            border-radius: 4;
        }
    </style>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="hero"
        style="background-image:url('<?php echo esc_url($slider_image_1); ?>');background-size:cover;height:650px;">
        <div class="owl-carousel">
            <?php foreach ($slides as $slide): ?>
                <div class="slide item" style="display:flex;flex-direction:row-reverse;">
                    <?php if (!empty($slide['second_image'])): ?>
                        <div class="second-image">
                            <div class="video-content">
                                <img src="<?php echo esc_url($slide['second_image']); ?>" alt="Second Image"
                                    class="video-thumbnail">
                                <div id="mp4-hero">
                                    <a class="play-btn" data-fancybox data-type="iframe"
                                        data-src="<?php echo esc_url($slide['link_url']); ?>" href="javascript:;">
                                        <img class="flex"
                                            src="http://adidas-theme.local/wp-content/uploads/2024/01/play-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="caption">
                        <h2 class="slide-header">
                            <?php echo esc_html($slide['slider_header']); ?>
                        </h2>
                        <p class="slide-textarea">
                            <?php echo esc_html($slide['slider_text']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="global_container_">
        <div class="data-container" style="display: flex;">
            <div class="col">
                <div class="slider" style="width: 76%;">
                    <div class="swiper" style="width: 700px; height: 210px;margin-top: 55px;">
                        <div class="swiper-wrapper">
                            <?php
                            $slider_query = new WP_Query(
                                array(
                                    'post_type' => 'slider',
                                    'posts_per_page' => -1, // Retrieve all slider items
                                )
                            );

                            if ($slider_query->have_posts()):
                                while ($slider_query->have_posts()):
                                    $slider_query->the_post();
                                    ?>
                                    <div class="swiper-slide" style="height:fit-content;">
                                        <a href="<?php the_permalink(); ?>" class="link-txt-slide">
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                        <div class="slider-content">
                                            <h6>
                                                <a href="<?php the_permalink(); ?>"
                                                    style="text-decoration: underline;padding-left:12px;padding-top:10px;color:white;">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h6>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else:
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
                <div class="sticky-post1" id="displayed-post">
                    <div class="post-wrapper" style="display:flex;">
                        <div class="post-content">
                            <?php
                            $category_id = 5;
                            $sticky_args = array(
                                'posts_per_page' => 1,
                                'post__in' => get_option('sticky_posts'),
                                'ignore_sticky_posts' => 1,
                                'category__in' => $category_id,
                            );
                            $sticky_query = new WP_Query($sticky_args);

                            if ($sticky_query->have_posts()) {
                                while ($sticky_query->have_posts()) {
                                    $sticky_query->the_post();
                                    $category_posts_args = array(
                                        'posts_per_page' => -1, // Set the number of posts to display (-1 for all)
                                        'category__in' => $category_id,
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
                                                        <img class="zig-zag-img" src="<?php echo esc_url($category_featured_img_url); ?>"
                                                            alt="<?php esc_attr(get_the_title()); ?>" />
                                                    <?php } else { ?>
                                                        No featured image available.
                                                    <?php } ?>
                                                </div>
                                                <div class="category-thumbnail-content">
                                                    <h5 style="color:white;">
                                                        <?php the_title(); ?>
                                                    </h5>
                                                    <div>
                                                        <?php the_content(); ?>
                                                    </div>
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
                <div class="posts">
                    <?php
                    $args = array(
                        'category_name' => 'group-posts',
                        'posts_per_page' => -1, // -1 to display all posts
                    );
                    $custom_query = new WP_Query($args);

                    // Assuming this code is within the WordPress Loop
                    if ($custom_query->have_posts()):
                        while ($custom_query->have_posts()):
                            $custom_query->the_post();
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
                                    <h6 style="color:white;">
                                        <?php the_title(); ?>
                                    </h6>
                                    <div class="text" style="color:white;">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <div class="read-more">
                                    <a style="color:white" href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>No posts found</p>';
                    endif;
                    ?>
                </div>
                <div class="social-section">
                    <div class="twitter-feed">
                        <div class="twitter-h">
                            <h4 style="color:white;">Latest Tweets</h4>
                        </div>
                        <a class="twitter-timeline" href="https://twitter.com/hiddenpearls" data-tweet-limit="3"
                            data-chrome="noheader nofooter transparent" data-theme="dark"></a>
                    </div>
                    <div class="facebook-page">
                        <div class="facebook-h">
                            <h4 style="color:white;">Facebook Page</h4>
                        </div>
                        <div style="margin-left:20px;" class="fb-page" data-href="https://www.facebook.com/WPBrigade/"
                            data-tabs="timeline" data-width="340" data-height="363" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/WPBrigade/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/WPBrigade/">WPBrigade</a></blockquote>
                        </div>
                    </div>
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
                                    'post_type' => 'events',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC',
                                );
                                $events_query = new WP_Query($args);

                                if ($events_query->have_posts()):
                                    echo '<div class="e-slidediv-container">'; // Container for each set of 3 posts
                                    while ($events_query->have_posts()):
                                        $events_query->the_post();
                                        ?>
                                        <div class="e-slidediv1">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <div class="e-slidediv1-content">
                                                <a href="<?php the_permalink(); ?>" class="event-h">
                                                    <?php the_title(); ?>
                                                </a>
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
                                    echo '</div>'; // Close the container
                                    wp_reset_postdata();
                                else:
                                    echo 'No events found';
                                endif;
                                ?>
                            </div>
                            <div class="controls" style="display: flex; margin: 10px;">
                                <div class="back-arrow">
                                    <button onclick="load('prev')">
                                        <img class="arrows"
                                            src="http://adidas-theme.local/wp-content/uploads/2024/01/flat-color-icons_next.png" />
                                    </button>
                                </div>
                                <div class="forward-arrow">
                                    <button onclick="load('next')">
                                        <img class="arrows"
                                            src="http://adidas-theme.local/wp-content/uploads/2024/01/flat-color-icons_next-4.png" />
                                    </button>
                                </div>
                                <div class="more-events">
                                    <p>More Events</p>
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
                            <?php
                            $categories = get_categories();

                            foreach ($categories as $category) {
                                // Check if the category is a subcategory
                                $is_subcategory = $category->parent != 0;

                                // Display only if it's not a subcategory
                                if (!$is_subcategory) {
                                    echo '<li class="category ' . esc_attr($category->slug) . '">';
                                    echo '<span class="icon" style="background-image: url(\'' . get_template_directory_uri() . '/category-icon.png\');"></span>';
                                    echo esc_html($category->name);

                                    $subcategories = get_categories(array('parent' => $category->term_id));

                                    if (!empty($subcategories)) {
                                        echo '<ul class="subcategory">';
                                        foreach ($subcategories as $subcategory) {
                                            echo '<li>' . esc_html($subcategory->name) . '</li>';
                                        }
                                        echo '</ul>';
                                    }

                                    echo '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="weather">
                    <div class="weather-h">
                        <h5>Weather</h5>
                    </div>
                    <div style="padding:13px;border-radius:4%;"
                        class="elfsight-app-436fdc06-aba2-435e-9fb2-9bbcdeda88d2" data-elfsight-app-lazy><img
                            src="http://adidas-theme.local/wp-content/uploads/2024/01/unnamed-1.png" /></div>
                </div>
                <div class="date_time">
                    <div class="dt-h">
                        <h5>Date & Time</h5>
                    </div>
                    <?php
                    date_default_timezone_set('Asia/Karachi');

                    $current_datetime = new DateTime();
                    $current_datetime->setTimezone(new DateTimeZone('Asia/Karachi'));

                    $formatted_date = $current_datetime->format('l, j F, Y');
                    $formatted_time = $current_datetime->format('H:i:s');

                    echo '<h6 class="date">' . $formatted_date . '</h6>';
                    echo '<h1 class="time">' . $formatted_time . '</h1>';
                    ?>
                </div>

                <div class="newsletter">
                    <div class="dt-h">
                        <h5>Newsletter</h5>
                    </div>
                    <div class="gravity-form-container">
                        <!-- Gravity Form Code -->
                        <form id="gravityForm" method="post" action="your_gravity_form_action_url">
                            <!-- Email Input with Placeholder -->
                            <div class="email-input-container">
                                <input style="background-color: rgba(1, 44, 31, 0.50);border-color:transparent;"
                                    type="email" name="email" id="email" placeholder="Enter your email">

                                <div class="search-icon">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <input class="gr-btn"
                                style="background-color: black;color:white;border-color:transparent;opacity:0.4;"
                                type="submit" value="Submit">
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <div class="moveable_tabs_container">
            <div class="real_container"
                style="background-color:green;width: 80%;margin-left: 115px;margin-bottom:24px;margin-top:45px;">
                <div class="tab-container">
                    <div class="tabs">
                        <div class="tab" onclick="showTab(0)">Match Info</div>
                        <div class="tab" onclick="showTab(1)">Match Results</div>
                        <div class="tab" onclick="showTab(2)">Match Schedule</div>
                    </div>

                    <div class="tab-content" id="tab0">
                        <?php echo get_option('tab0_content', '<p>This is the content for Match Info.</p>'); ?>
                    </div>

                    <div class="tab-content" id="tab1">
                        <?php echo get_option('tab1_content', '<p>This is the content for Match Results.</p>'); ?>
                    </div>

                    <div class="tab-content" id="tab2">
                        <?php echo get_option('tab2_content', '<p>This is the content for Match Schedule.</p>'); ?>
                    </div>
                </div>

            </div>
        </div>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

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
        <script>

            showTab(0);

            function showTab(tabIndex) {
                // Hide all tab contents
                var tabContents = document.querySelectorAll('.tab-content');
                tabContents.forEach(function (tabContent) {
                    tabContent.style.display = 'none';
                });

                // Remove 'active' class from all tabs
                var tabs = document.querySelectorAll('.tab');
                tabs.forEach(function (tab) {
                    tab.classList.remove('activet');
                });

                // Show the selected tab content
                var selectedTabContent = document.getElementById('tab' + tabIndex);
                selectedTabContent.style.display = 'block';

                // Add 'active' class to the selected tab
                tabs[tabIndex].classList.add('activet');
            }
        </script>

</main>
<?php
include_once get_template_directory() . '/inc/theme-options.php';
get_footer();
