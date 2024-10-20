
    <section class="section section--shadow section--slide section--central">
        <div class="container">
          <div class="section__header">
            <h2 class="section__title">Central Tours</h2>
            <div class="section-navslide">
              <img class="section-navslide__btn section-navslide__btn--previous" src="<?php echo WT_ASSET('img/slide/previous.png'); ?>" alt="previous.png">
              <img class="section-navslide__btn section-navslide__btn--next" src="<?php echo WT_ASSET('img/slide/next.png'); ?>" alt="next.png">
            </div>
          </div>
          <div class="section__swiper swiper">
            <div class="swiper-wrapper">
                <?php
                    $central = new WP_Query(array(
                        'post_type'  => 'product',
                        'query_var' => '0',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_category',
                                'field'    => 'slug',
                                'terms' => 'central-vietnam'
                            ),
                        ),
                    ));
                ?>

                <?php while ($central->have_posts()) : $central->the_post() ?>
                    <div class="swiper-slide">
                        <div class="card card--border">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="card__frame" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"></a>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="card__title"><?php the_title(); ?></a>
                            <div class="card__info">
                                <a class="btn btn--primary" href="<?php echo WT_LINK_BOOKING($post->ID); ?>">Book Tour</a>
                                <?php if(!empty( get_field('price', $post->ID) )): ?>
                                    <div class="card-price">
                                        <label class="card-price__label">Price</label>
                                        <span class="card-price__value"><?php echo get_field('price', $post->ID); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
          </div>
        </div><!-- container -->
    </section>
