<h3>NEWS AND UPDATES</h3>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$news_query = new WP_Query(array(
    'paged' => $paged,
    'post_status' => 'publish',
    'post_type' => 'bb_news',
    'meta_key' => 'data_editoriale',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));

if($news_query->have_posts()):
    while($news_query->have_posts()): $news_query->the_post();
        ?>

        <div class="single-news">
            <div class="news-date"><?php echo get_post_meta(get_the_ID(), 'data_editoriale_day', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_month', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_year', true) ?></div>
            <div class="news-title"><?php echo get_the_title() ?></div>
            <div class="news-body"><?php echo get_the_content() ?></div>
        </div>

    <?php
    endwhile;
endif;
?>