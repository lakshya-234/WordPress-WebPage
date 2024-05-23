<?php
/* Template Name: Custom Posts Template */

get_header(); ?>

<div class="custom-posts">
    <h2>Custom Posts</h2>
    <?php
    $args = array(
        'post_type' => 'custom_type',
        'posts_per_page' => 10
    );
    $custom_posts = new WP_Query($args);

    if ($custom_posts->have_posts()) :
        while ($custom_posts->have_posts()) : $custom_posts->the_post(); ?>
            <div class="post-item">
                <h3><?php the_title(); ?></h3>
                <div><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
