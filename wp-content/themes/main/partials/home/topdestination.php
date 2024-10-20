<?php
    $topdestinations = new WP_Query(array(
        'post_type'  => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms' => 'top-destination'
            ),
        ),
    ));
?>
<section class="section section--slide">
    <div class="container">
    <div class="section__header">
        <h2 class="section__title">TOP DESTINATIONS IN VIETNAM</h2>
        <div class="section-navslide">
        <img class="section-navslide__btn section-navslide__btn--previous" src="<?php echo WT_ASSET('img/slide/previous.png'); ?>" alt="previous.png">
        <img class="section-navslide__btn section-navslide__btn--next" src="<?php echo WT_ASSET('img/slide/next.png'); ?>" alt="next.png">
        </div>
    </div>
    <div class="section__swiper section__swiper--three swiper">
        <div class="swiper-wrapper">
            <?php while ($topdestinations->have_posts()) : $topdestinations->the_post() ?>
            <div class="swiper-slide">
                <div class="swiper__item">
                    <a href="<?php echo get_permalink($post->ID); ?>" class="swiper__frame" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"></a>
                    <a href="<?php echo get_permalink($post->ID); ?>" class="swiper__title"><?php the_title(); ?></a>
                    <div class="swiper__shortdesc"><?php the_excerpt(); ?></div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    </div><!-- container -->
</section>