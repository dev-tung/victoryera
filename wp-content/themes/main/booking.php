<?php // Template Name: Booking ?>
<?php $_webInvert = true; ?>
<?php require WT_PARTIALS( 'header.php' )?>

<?php if( !empty( $_GET['post_id'] ) ): ?>

    <?php $post = get_post($_GET['post_id']);?>

    <div class="body">
        <div class="container">
            <div class="breadcrumb">
                <a class="breadcrumb__link" href="<?php echo home_url('/');?>" title="Home">Home</a> 
                <span class="s">/</span>
                <a class="breadcrumb__link" href="<?php echo home_url('/').'?s=';?>" title="Home">Tour in Vietnam</a> 
                <span class="s">/</span>
                <a class="breadcrumb__link" href="#" title="Halong Bay Tours"><?php echo $post->post_title; ?></a>
            </div>
            
            <div class="booking">
                <div class="booking-header">
                    <h1 class="booking-header__title" id="booking-header__title">Booking Form</h1>
                    <p class="booking-header__text">A comprehensive form that can be used for online booking reservations, transportation planning, tours, pickups; with widgets that allow collecting any ...</p>
                </div>
                <div class="booking__body">
                    <form class="booking-form" id="booking-form" action="<?php echo WT_LINK_BOOKING_SUBMIT(); ?>">
                        <input type="hidden" name="tour_name" value="<?php echo $post->post_title; ?>">
                        <input type="hidden" name="tour_price" value="<?php echo get_field('price', $post->ID); ?>">
                        <input type="hidden" name="again_url" value="<?php echo home_url()."?page_id=820"; ?>">

                        <label class="booking-form__label booking-form__label--detail">Details</label>
                        <div class="booking-form__flex">
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">First Name</label>
                                <input type="text" class="booking-form__input" id="booking-form__input--firstname" name="firstname" placeholder="Input your first name here">
                                <small class="error-message"></small>
                            </div>
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">Last Name</label>
                                <input type="text" class="booking-form__input" id="booking-form__input--lastname" name="lastname" placeholder="Input your last name here">
                                <small class="error-message"></small>
                            </div>
                        </div>

                        <div class="booking-form__flex">
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">Email Address</label>
                                <input type="text" class="booking-form__input" id="booking-form__input--email" name="email" placeholder="Input your email address here">
                                <small class="error-message"></small>
                            </div>
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">Phone Number</label>
                                <input type="text" class="booking-form__input" name="phone_number" placeholder="Input your phone number here">
                            </div>
                        </div>

                        <div class="booking-form__flex">
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">Number of Aldults</label>
                                <input type="number" class="booking-form__input" name="number_adult" placeholder="Input Number of aldults here">
                            </div>
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">Number of Children</label>
                                <input type="number" class="booking-form__input" name="number_children" placeholder="Input Number of Children here">
                            </div>
                            <div class="booking-form__group validate">
                                <label class="booking-form__label">Departure date</label>
                                <input type="date" class="booking-form__input" name="departure_date" placeholder="Input your departure date here">
                            </div>
                        </div>

                        <div class="booking-form__group">
                            <label class="booking-form__label">Special Request</label>
                            <textarea rows="3" class="booking-form__textarea" name="special_request" placeholder="Input your special request here"></textarea>
                        </div>
                        <button class="booking-form__submit">Next</button>
                    </form>
                    <div class="booking-product">
                        <div class="card card--border">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="card__frame" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"></a>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="card__title"> <?php echo $post->post_title; ?> </a>
                            <div class="card__info">
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
            </div>
        </div>
    </div>

    <script src="<?php echo WT_ASSET('js/function.js');?>"></script>
    <script>
        Validator({
            form: '#booking-form',
            rules: [
                Validator.tbRequired({
                    selector: '#booking-form__input--firstname',
                    submit: true
                }),
                Validator.tbRequired({
                    selector: '#booking-form__input--lastname',
                    submit: true
                }),
                Validator.tbRequired({
                    selector: '#booking-form__input--email',
                    submit: true
                })
            ],
            onSubmit: (data) => {
                document.getElementById("modal__loading").style.display = "block";
                data.form.submit();
            }
        });
    </script>

<?php endif; ?>
<?php require WT_PARTIALS( 'footer.php' )?>
