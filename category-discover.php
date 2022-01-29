<?php
/* Template Name: Discover_Category */

get_header();
?>
<div class="container">
    <div class="row">
        <h1 style="text-align:center">Tags and categories</h1>
        <p style="text-align:center">Explore all of this site’s content by topic or category. You can also use the search feature to find any articles, videos or podcast episodes that you’re looking for.

        </p>
    </div>
    <div class="row">
        <div class="col-lg-12 categories">
            <h1>Categories</h1>


            <?php

            $args = array(
                'orderby'                  => 'name',
                'order'                    => 'ASC',
                'public'                   => true,
            );

            $categories = get_categories( $args );

            foreach ( $categories as $category ) {
                echo '<a style="background-color: '.get_term_meta($category->term_id, 'cc_color', true).'" href="' . get_category_link( $category ) . '">' . $category->name . '</a>';

            }
            ?>
        </div>


    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 categories">
        <h1>Tags</h1>

        <?php

            $args = array(
                'orderby'                  => 'name',
                'order'                    => 'ASC',
                'public'                   => true,
            );

            $tags = get_tags( $args );

            foreach ( $tags as $tag ) {
                echo '<a style="background-color: '.get_term_meta($tag->term_id, 'cc_color', true).'" href="' . get_tag_link( $tag ) . '">' . $tag->name . '</a>';
            }
        ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>