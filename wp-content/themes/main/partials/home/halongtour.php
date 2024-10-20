<?php
    $bestsellers = new WP_Query(array(
        'post_type'  => 'product',
        'query_var' => '0',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_category',
                'field'    => 'slug',
                'terms' => 'tour-in-ha-long'
            ),
        ),
    ));
?>

<section class="section section--shadow">
    <div class="container">
        <h2 class="section__title">TOURS IN HA LONG</h2>
        <div class="grid__four">
            <?php while ($bestsellers->have_posts()) : $bestsellers->the_post() ?>
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
            <?php endwhile; ?>
        </div>
    </div><!-- container -->
</section>