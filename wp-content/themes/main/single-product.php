
<?php $_webInvert = true; ?>
<?php require WT_PARTIALS( 'header.php' )?>
    <?php if(have_posts(  )): while (have_posts(  )): the_post(  );?>
        <div class="body">
            <div class="container">
                <div class="breadcrumb">
                    <a class="breadcrumb__link" href="<?php echo home_url('/');?>" title="Home">Home</a> 
                    <span class="s">/</span>
                    <a class="breadcrumb__link" href="<?php echo home_url('/').'?s=';?>" title="Home">Tour in Vietnam</a> 
                    <span class="s">/</span>
                    <a class="breadcrumb__link" href="#" title="Halong Bay Tours"><?php echo $post->post_title; ?></a>
                </div>
                <div class="tour">
                    <div class="tour-header">
                        <h1 class="tour-header__title"><?php echo the_title(); ?></h1>
                    </div>
                    <div class="tour__image">
                        <div class="tour__description">
                            <div class="swiper swiper--tourdetail">
                                <div class="swiper-wrapper">
                                    <?php
                                        $slides = get_field('slide', $post->ID);
                                        if( !empty( $slides ) ):
                                            foreach( $slides as $item ):
                                    ?>
                                                <div class="swiper-slide"><img class="swiper__img" src="<?php echo $item['img']?>" alt=""></div>
                                    <?php 
                                            endforeach;
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tour__product">
                            <div class="card card--border card--noradius">
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
                    </div>

                    <div class="tour__tab">
                        <div class="tour-menu">
                            <div data-index-number="1" class="tour-menu__item tour-menu__item--separate tour-menu__item--active">Overview</div>
                            <div data-index-number="2" class="tour-menu__item tour-menu__item--separate">ITINERARY</div>
                            <div data-index-number="3" class="tour-menu__item tour-menu__item--separate">Map</div>
                            <div data-index-number="4" class="tour-menu__item">Review</div>
                        </div>
                        <div class="tour-component">
                            <div id="tour-component__item--1" class="tour-component__item tour-component__item--active"><?php echo the_content(); ?></div>
                            <div id="tour-component__item--2" class="tour-component__item"><?php echo get_field('tour_include', $post->ID); ?></div>
                            <div id="tour-component__item--3" class="tour-component__item"><?php echo get_field('tour_map', $post->ID); ?></div>
                            <div id="tour-component__item--4" class="tour-component__item"><?php echo get_field('tour_review', $post->ID); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

    <?php require WT_PARTIALS( 'home/bestseller.php' )?>

<?php require WT_PARTIALS( 'footer.php' )?>

<script>
    var swiper = new Swiper(".swiper--tourdetail", {
        effect: "coverflow",
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        coverflowEffect: {
          rotate: -30,
          stretch: 0,
          depth: 1000,
          modifier: 1,
          slideShadows: true,
        },
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 15,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });




    // tabs
    const tourMenus = document.querySelectorAll('.tour-menu__item');
      tourMenus.forEach( menu1 => {
        menu1.onclick = () => {
          document.querySelectorAll('.tour-menu__item').forEach( menu2 => {
            menu2.classList.remove('tour-menu__item--active');
          });

          menu1.classList.add('tour-menu__item--active');

          document.querySelectorAll('.tour-component__item').forEach( component => {
            component.classList.remove('tour-component__item--active');
          });

          document.getElementById('tour-component__item--' + menu1.dataset.indexNumber).classList.add('tour-component__item--active');
        }
    });
</script> 

