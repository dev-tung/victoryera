
<?php require WT_PARTIALS( 'header.php' ); ?>
    <?php if(have_posts(  )): while (have_posts(  )): the_post(  );?>
            <div class="body body--news">
                <section class="section">
                <div class="container">
                    <div class="news-popular">
                        <div class="news-popular__single">
                            <h2 class="news__title"><?php echo the_title(); ?></h2>
                            <span class="news__category"><?php echo the_category(); ?></span>
                            <!-- <img class="news__mainimg" src="img/product/hoian.jpg" alt=""> -->
                            <?php echo the_content(); ?>
                        </div>
                        <div class="news-popular__rows">
                            <h2 class="news-popular__heading">Recent Post</h2>
                            <?php $posts = get_posts(array('numberposts' => 5)); ?>
                            <?php if( !empty( $posts ) ): ?>
                                <?php foreach( $posts as $value ): ?>
                                    <a href="<?php echo get_permalink($value->ID); ?>" class="news-popular-item">
                                        <div class="news-popular-item__thumnail" style="background-image: url(<?php echo !empty( get_the_post_thumbnail_url($value->ID) ) ? get_the_post_thumbnail_url($value->ID) : WT_ASSET('img/news/news-thumnail.png'); ?>)"></div>
                                        <div class="news-popular-item__content">
                                            <?php $category = get_the_category( $value->ID ); ?>
                                            <span class="card__cate"><?php echo !empty( $category[0]->cat_name ) ? $category[0]->cat_name: '';?></span>
                                            <h3 class="news-popular__title"><?php echo $value->post_title; ?></h3>
                                            <span class="card__date"><?php echo date('j-n-Y', strtotime($value->post_date)); ?></span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        <?php endwhile; endif; ?>
<?php require WT_PARTIALS( 'footer.php' ); ?>