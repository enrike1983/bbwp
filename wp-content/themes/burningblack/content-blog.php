<h3>BLOG</h3>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$news_query = new WP_Query(array(
    'paged' => $paged,
    'post_status' => 'publish',
    'post_type' => 'bb-blog',
    'meta_key' => 'data_editoriale',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));

if($news_query->have_posts()):
    while($news_query->have_posts()): $news_query->the_post();
        ?>

        <div class="single-news">
            <div class="news-date"><?php echo get_post_meta(get_the_ID(), 'data_editoriale_day', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_month', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_year', true) ?></div>
            <div class="news-title"><a href="<?php echo get_permalink(get_the_ID())?>"><?php echo get_the_title() ?></a></div>
            <div class="news-body"><?php echo get_the_content() ?></div>
        </div>

    <?php
    endwhile;
endif;

//wp_reset_query();
?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
    <nav id="post-nav">
        <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
        <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
    </nav>
<?php } ?>