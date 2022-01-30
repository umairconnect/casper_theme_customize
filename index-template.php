<?php
/* Template Name: Index Template */

get_header();


?>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="postlist_header hentry">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $arguments = array(
                        'category_name' => 'concurrency',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );
                    $wp_query->query($arguments);

                    // Get the ID of a given category
                    $cat_name = 'concurrency';

                    $category_id = get_cat_ID($cat_name);
                    // Get the URL of this category

                    $category_link = get_category_link( $category_id );

                    ?>

                    <h1><?php echo single_cat_title(); ?></h1>
                    <a href=<?php echo esc_url( $category_link ); ?>>See All</a>


                </div>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                     ?>


                        <div class="post-list">



                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                                <?php
                                /* translators: used between list items, there is a space after the comma */
                                $category_list = get_the_category_list( __( ', ', 'casper' ) );
                                ?>
                                <header class="post-header">

                                    <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                                    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                        $image_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
                                        $medium_url = wp_get_attachment_image_src($image_id,'medium', true);
                                        $large_url = wp_get_attachment_image_src($image_id,'large', true);
                                        ?>

                                        <div class="post-image">
                                            <img data-src='<480:<?php echo $thumb_url[0]; ?>, <768:<?php echo $medium_url[0]; ?>, >768:<?php echo $large_url[0]; ?>' />
                                        </div>
                                        <noscript><?php the_post_thumbnail('thumbnail'); ?></noscript>
                                    <?php } ?>
                                </header>
                                <section class="post-content">


                                    <?php the_excerpt(); ?>
                                    <?php
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
                                        'after'  => '</div>',
                                    ) );
                                    ?>
                                    <div class="clear">&nbsp;</div>

                                    <?php if ( 'post' == get_post_type() ) : ?>
                                        <span class="post-meta">
                            <?php
                            if(  false == get_theme_mod( 'casper_hide_dates') ) {
                                casper_posted_on();
                            }
                            echo "<span class='read_time'>&nbsp;•&nbsp;".do_shortcode('[rt_reading_time]') ."min read</span>";

                            if(  false == get_theme_mod( 'casper_hide_categories') ) {
                                ?>
                                <span class="categories">
                                    <?php
                                    foreach((get_the_category()) as $category) { ?>
                                        <a style="background-color: <?php echo get_term_meta($category->term_id, 'cc_color', true)?>"  href="category/<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                                    <?php  }
                                    ?>
                                </span>

                                <?php

                            }



                            ?>
			            </span>
                                    <?php endif; ?>

                                </section>
                            </article><!-- #post-## -->



                        </div>


                    <?php
                    endwhile;
                endif;
            ?>
            </div>
        </div>

        <div class="row">
            <div class="">
                <div class="postlist_header hentry">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $arguments = array(
                        'category_name' => 'code',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );
                    $wp_query->query($arguments);

                    // Get the ID of a given category
                    $cat_name = 'code';

                    $category_id = get_cat_ID($cat_name);
                    // Get the URL of this category

                    $category_link = get_category_link( $category_id );

                    ?>

                    <h1><?php echo single_cat_title(); ?></h1>
                    <a href=<?php echo esc_url( $category_link ); ?>>See All</a>


                </div>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>


                        <div class="post-list">



                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                                <?php
                                /* translators: used between list items, there is a space after the comma */
                                $category_list = get_the_category_list( __( ', ', 'casper' ) );
                                ?>
                                <header class="post-header">

                                    <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                                    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                        $image_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
                                        $medium_url = wp_get_attachment_image_src($image_id,'medium', true);
                                        $large_url = wp_get_attachment_image_src($image_id,'large', true);
                                        ?>

                                        <div class="post-image">
                                            <img data-src='<480:<?php echo $thumb_url[0]; ?>, <768:<?php echo $medium_url[0]; ?>, >768:<?php echo $large_url[0]; ?>' />
                                        </div>
                                        <noscript><?php the_post_thumbnail('thumbnail'); ?></noscript>
                                    <?php } ?>
                                </header>
                                <section class="post-content">


                                    <?php the_excerpt(); ?>
                                    <?php
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
                                        'after'  => '</div>',
                                    ) );
                                    ?>
                                    <div class="clear">&nbsp;</div>

                                    <?php if ( 'post' == get_post_type() ) : ?>
                                        <span class="post-meta">
                            <?php
                            if(  false == get_theme_mod( 'casper_hide_dates') ) {
                                casper_posted_on();
                            }
                            echo "<span class='read_time'>&nbsp;•&nbsp;".do_shortcode('[rt_reading_time]') ."min read</span>";

                            if(  false == get_theme_mod( 'casper_hide_categories') ) {
                                ?>
                                <span class="categories">
                                    <?php
                                    foreach((get_the_category()) as $category) { ?>
                                        <a style="background-color: <?php echo get_term_meta($category->term_id, 'cc_color', true)?>"  href="category/<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                                    <?php  }
                                    ?>
                                </span>

                                <?php

                            }



                            ?>
			            </span>
                                    <?php endif; ?>

                                </section>
                            </article><!-- #post-## -->



                        </div>


                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="">
                <div class="postlist_header hentry">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $arguments = array(
                        'category_name' => 'world',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );
                    $wp_query->query($arguments);

                    // Get the ID of a given category
                    $cat_name = 'world';

                    $category_id = get_cat_ID($cat_name);
                    // Get the URL of this category

                    $category_link = get_category_link( $category_id );

                    ?>

                    <h1><?php echo single_cat_title(); ?></h1>
                    <a href=<?php echo esc_url( $category_link ); ?>>See All</a>


                </div>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>


                        <div class="post-list">



                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                                <?php
                                /* translators: used between list items, there is a space after the comma */
                                $category_list = get_the_category_list( __( ', ', 'casper' ) );
                                ?>
                                <header class="post-header">

                                    <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                                    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                        $image_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
                                        $medium_url = wp_get_attachment_image_src($image_id,'medium', true);
                                        $large_url = wp_get_attachment_image_src($image_id,'large', true);
                                        ?>

                                        <div class="post-image">
                                            <img data-src='<480:<?php echo $thumb_url[0]; ?>, <768:<?php echo $medium_url[0]; ?>, >768:<?php echo $large_url[0]; ?>' />
                                        </div>
                                        <noscript><?php the_post_thumbnail('thumbnail'); ?></noscript>
                                    <?php } ?>
                                </header>
                                <section class="post-content">


                                    <?php the_excerpt(); ?>
                                    <?php
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
                                        'after'  => '</div>',
                                    ) );
                                    ?>
                                    <div class="clear">&nbsp;</div>

                                    <?php if ( 'post' == get_post_type() ) : ?>
                                        <span class="post-meta">
                            <?php
                            if(  false == get_theme_mod( 'casper_hide_dates') ) {
                                casper_posted_on();
                            }
                            echo "<span class='read_time'>&nbsp;•&nbsp;".do_shortcode('[rt_reading_time]') ."min read</span>";

                            if(  false == get_theme_mod( 'casper_hide_categories') ) {
                                ?>
                                <span class="categories">
                                    <?php
                                    foreach((get_the_category()) as $category) { ?>
                                        <a style="background-color: <?php echo get_term_meta($category->term_id, 'cc_color', true)?>"  href="category/<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                                    <?php  }
                                    ?>
                                </span>

                                <?php

                            }



                            ?>
			            </span>
                                    <?php endif; ?>

                                </section>
                            </article><!-- #post-## -->



                        </div>


                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>


        <div class="row">
                <div class="">
                    <div class="postlist_header hentry">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $arguments = array(
                            'category_name' => 'Self',
                            'posts_per_page' => 3,
                            'paged' => $paged
                        );
                        $wp_query->query($arguments);

                        // Get the ID of a given category
                        $cat_name = 'Self';

                        $category_id = get_cat_ID($cat_name);
                        // Get the URL of this category

                        $category_link = get_category_link( $category_id );

                        ?>

                        <h1><?php echo single_cat_title(); ?></h1>
                        <a href=<?php echo esc_url( $category_link ); ?>>See All</a>


                    </div>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>


                            <div class="post-list">



                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                                    <?php
                                    /* translators: used between list items, there is a space after the comma */
                                    $category_list = get_the_category_list( __( ', ', 'casper' ) );
                                    ?>
                                    <header class="post-header">

                                        <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                                        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                            $image_id = get_post_thumbnail_id();
                                            $thumb_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
                                            $medium_url = wp_get_attachment_image_src($image_id,'medium', true);
                                            $large_url = wp_get_attachment_image_src($image_id,'large', true);
                                            ?>

                                            <div class="post-image">
                                                <img data-src='<480:<?php echo $thumb_url[0]; ?>, <768:<?php echo $medium_url[0]; ?>, >768:<?php echo $large_url[0]; ?>' />
                                            </div>
                                            <noscript><?php the_post_thumbnail('thumbnail'); ?></noscript>
                                        <?php } ?>
                                    </header>
                                    <section class="post-content">


                                        <?php the_excerpt(); ?>
                                        <?php
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
                                            'after'  => '</div>',
                                        ) );
                                        ?>
                                        <div class="clear">&nbsp;</div>

                                        <?php if ( 'post' == get_post_type() ) : ?>
                                            <span class="post-meta">
                                <?php
                                if(  false == get_theme_mod( 'casper_hide_dates') ) {
                                    casper_posted_on();
                                }
                                echo "<span class='read_time'>&nbsp;•&nbsp;".do_shortcode('[rt_reading_time]') ."min read</span>";

                                if(  false == get_theme_mod( 'casper_hide_categories') ) {
                                    ?>
                                    <span class="categories">
                                        <?php
                                        foreach((get_the_category()) as $category) { ?>
                                            <a style="background-color: <?php echo get_term_meta($category->term_id, 'cc_color', true)?>"  href="category/<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                                        <?php  }
                                        ?>
                                    </span>

                                    <?php

                                }



                                ?>
                            </span>
                                        <?php endif; ?>

                                    </section>
                                </article><!-- #post-## -->



                            </div>


                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>


    </div>
<?php
get_footer();
?>