<h3><?php the_title() ?></h3>

<?php $gig_query = new WP_Query(array(
    'post_status' => 'publish',
    'post_type' => 'gigs',
    'meta_key' => 'data_editoriale',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));

if($gig_query->have_posts()):
    while($gig_query->have_posts()): $gig_query->the_post(); ?>

        <?php echo get_post_meta(get_the_ID(), 'data_editoriale_day', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_month', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_year', true) ?> - <?php echo get_the_title() ?><br/>

    <?php
    endwhile;
else: ?>

    No gig planned at this time.

<?php endif;
wp_reset_query();
?>