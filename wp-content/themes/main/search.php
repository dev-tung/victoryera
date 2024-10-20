<?php 
    require WT_PARTIALS( 'header.php' );

    $search_value = !empty( $_GET['s'] ) ? $_GET['s'] : '';
    $cat_value = !empty( $_GET['c'] ) ? $_GET['c'] : '';
?>
      <div class="container">
        <form class="search-filter" action="<?php echo home_url('/');?>">
          <div class="search-filter__search">

            <input class="search-filter__search-input" type="text" placeholder="Where do you want to go?" name="s" value="<?php echo $search_value; ?>">
            <img class="search-filter__search-icon" src="<?php echo WT_ASSET('img/header/search-icon.png');?>" alt="search-filter__search-icon">
          </div>
          <div class="search-filter-select">
            <div class="search-filter-select-group">
                <label class="search-filter-select-label" for="search-filter-selectbox--tour">Tour in Vietnam</label>
                <select class="search-filter-selectbox" name="c" id="search-filter-selectbox--tour">
                    <option class="search-filter-selectoption" value="" <?php echo $cat_value == '' ? 'selected' : ''?>>All tour</option>
                    <option class="search-filter-selectoption" value="central-vietnam" <?php echo $cat_value == 'central-vietnam' ? 'selected' : ''?>>Central Vietnam</option>
                    <option class="search-filter-selectoption" value="northern-vietnam" <?php echo $cat_value == 'northern-vietnam' ? 'selected' : ''?>>Northern Vietnam</option>
                    <option class="search-filter-selectoption" value="southern-vietnam" <?php echo $cat_value == 'southern-vietnam' ? 'selected' : ''?>>Southern Vietnam</option>
                    <option class="search-filter-selectoption" value="vietnam-package" <?php echo $cat_value == 'vietnam-package' ? 'selected' : ''?>>Vietnam package</option>
                    <option class="search-filter-selectoption" value="halong-day-cruise" <?php echo $cat_value == 'halong-day-cruise' ? 'selected' : ''?>>Halong Day Cruise</option>
                    <option class="search-filter-selectoption" value="halong-2n1d" <?php echo $cat_value == 'halong-2n1d' ? 'selected' : ''?>>Halong Overnight Cruise</option>
                </select>
            </div>
            <!-- <div class="search-filter-select-group">
              <label class="search-filter-select-label" for="search-filter-selectbox--price">Price</label>
              <select class="search-filter-selectbox" name="" id="search-filter-selectbox--price">
                <option class="search-filter-selectoption" value="All">All price</option>
                <option class="search-filter-selectoption" value="Vietname Package">$370</option>
              </select>
            </div> -->
            <div class="search-filter-select-group">
              <button class="btn btn--secondary btn--medium">Search</button>
            </div>
          </div>
        </form>
      </div>

      <?php
        $catParams = !empty( $cat_value ) 
        ? array(
                    'taxonomy' => 'product_category',
                    'field'    => 'slug',
                    'terms' => $cat_value
                )
        : '';

        $results = new WP_Query(array(
            'post_type' => array(       
                'product'                        
            ),
            'posts_per_page' => -1,
            's' => $search_value,
            'tax_query' => array($catParams)
        ));
      ?>
      <div class="body">
        <section class="section">
          <div class="container">
            <h2 class="section__title">Result</h2>
            <div class="grid__four">
            <?php while ($results->have_posts()) : $results->the_post() ?>
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
      </div>

      <!-- <div class="container">
        <nav class="pagination">
          <a href="" class="pagination-item pagination-item--previous"><img src="<?php //echo WT_ASSET('img/slide/previous.png');?>" alt="previous.png"></a>
          <a href="" class="pagination-item">1</a>
          <a href="" class="pagination-item pagination-item--active">2</a>
          <a href="" class="pagination-item pagination-item--dot">...</a>
          <a href="" class="pagination-item">4</a>
          <a href="" class="pagination-item pagination-item--next"><img src="<?php //echo WT_ASSET('img/slide/next.png');?>" alt="next.png"></a>
        </nav>
      </div> -->
      
<?php require WT_PARTIALS( 'footer.php' )?>