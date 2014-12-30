<div class="element-block-container">
    <h3>SOCIAL NETWORKS</h3>
    <a target="_blank" href="https://www.facebook.com/burningblackofficial"><img class="social-img" src="<?php echo get_template_directory_uri().'/assets/img/images/fb_icon.png' ?>" /></a>
    <a target="_blank" href="https://twitter.com/burningblackcom"><img class="social-img" src="<?php echo get_template_directory_uri().'/assets/img/images/tw_icon.png' ?>" /></a>
    <a target="_blank" href="https://www.youtube.com/user/BurningBlackOfficial"><img class="social-img" src="<?php echo get_template_directory_uri().'/assets/img/images/yt_icon.png' ?>" /></a>
    <a target="_blank" href="https://soundcloud.com/burningblackofficial-burningblackofficial"><img class="social-img" src="<?php echo get_template_directory_uri().'/assets/img/images/sc_icon.png' ?>" /></a>
    <a target="_blank" href="https://play.spotify.com/artist/2hhBmFBKzSqXAjAoY58dfN"><img class="social-img" src="<?php echo get_template_directory_uri().'/assets/img/images/sp_icon.png' ?>" /></a>
</div>

<div class="element-block-container">
    <h3>REMISSION OF SIN - OUT NOW</h3>
    <a target="_blank" href="http://www.amazon.de/Remission-Sin-Burning-Black/dp/B00NG39N4C/ref=sr_1_1?s=music&ie=UTF8&qid=1419928804&sr=1-1&keywords=remission+of+sin">
        <img src="<?php echo get_template_directory_uri().'/assets/img/images/remission_of_sin_cover.jpg' ?>">
    </a>
</div>

<div class="element-block-container">
    <h3>FLAG OF ROCK VIDEO</h3>
    <iframe width="300" height="200" src="//www.youtube.com/embed/t6Xg9WMXyGM" frameborder="0" allowfullscreen></iframe>
</div>

<?php $gig_query = new WP_Query(array(
    'post_status' => 'publish',
    'post_type' => 'gigs',
    'meta_key' => 'data_editoriale',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
)); ?>

<?php if($gig_query->have_posts()): ?>
<div class="element-block-container">
    <h3>UPCOMING SHOWS</h3>
    <?php
        while($gig_query->have_posts()): $gig_query->the_post(); ?>

            <?php echo get_post_meta(get_the_ID(), 'data_editoriale_day', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_month', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_year', true) ?> - <?php echo get_the_title() ?><br/>

        <?php
        endwhile;
    ?>
</div>
<?php endif; ?>
<?php wp_reset_query();?>

<div class="element-block-container">
    <h3>TWITTER</h3>
    <a width="300" height="500" class="twitter-timeline" href="https://twitter.com/BurningBlackCom" data-widget-id="549225961104084992">Tweet di @BurningBlackCom</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="element-block-container">
    <h3>FACEBOOK</h3>
    <div class="fb-like-box" data-href="https://www.facebook.com/burningblackofficial" data-width="300" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>

<div class="element-block-container">
    <h3>SPOTIFY</h3>
    <iframe width="300" height="56" src="https://embed.spotify.com/follow/1/?uri=spotify%3Aartist%3A2hhBmFBKzSqXAjAoY58dfN&amp;size=detail&amp;theme=dark" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
</div>