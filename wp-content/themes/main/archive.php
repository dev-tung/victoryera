
<?php require WT_PARTIALS( 'header.php' )?>
<?php 
    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
?>
    <div class="body">
        <section class="section">
            <div class="container">
                <h2 class="section__title"><?php echo get_cat_name($cat_id); ?></h2>
                <div class="grid__one">
                    <?php $posts = get_posts( array('category' => $cat_id ) ); ?>
                    <?php if( !empty( $posts ) ): ?>
                        <?php foreach( $posts as $value ): ?>
                            <div class="card-post">
                                <div class="card-post__left">
                                    <img class="card-post__thumnail" src="<?php echo !empty( get_the_post_thumbnail_url($value->ID) ) ? get_the_post_thumbnail_url($value->ID) : WT_ASSET('img/news/news-thumnail.png'); ?>" alt="">
                                </div>
                                <div class="card-post__right">
                                    <h3 class="card-post__title"><?php echo $value->post_title; ?></h3>
                                    <div class="card-post__description"><?php echo $value->post_content; ?></div>
                                    <a href="<?php echo $value->guid; ?>" class="card-post__more">Read more</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div><!-- container -->
        </section>
    </div>
<?php require WT_PARTIALS( 'footer.php' )?>