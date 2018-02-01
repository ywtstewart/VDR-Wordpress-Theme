<?php get_header(); ?>
<!--- Hero --->
<div class="hero"
     style="background:url(<?php echo get_theme_mod( 'hero_bg_img', get_bloginfo( 'template_url' ) . '/img/hero-img.jpg' ) ?>); background-size: 100% auto; background-position: center center">
    <div class="hero__inner">
        <div class="hero-content" data-aos="fade-up">
            <div class="hero-content__img">
                <img src="<?php echo get_theme_mod( 'hero_main_img', get_bloginfo( 'template_directory' ) . '/img/vdr-logo-full.png' ) ?>"
                     alt=" <?php bloginfo( 'name' ); ?>">
            </div>
          <div class="hero-content__text ">
            <p><?php echo get_theme_mod( 'hero_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ipsam dolorem et ullam eos quidem voluptate deleniti dignissimos iure reprehenderit perferendis neque ratione alias eum totam, ab nostrum sequi eligendi.' ); ?></p>

          </div>
          <div class="hero-content__buttons">
            <a href="<?php echo get_theme_mod( 'hero_btn_1_url', '#over-ons' ); ?>"
               class="btn btn--secondary btn--important"><?php echo get_theme_mod( 'hero_btn_1_text', 'Over Ons' ) ?>
            </a>
            <a href="<?php echo get_theme_mod( 'hero_btn_2_url', '#contact' ); ?>"
               class="btn btn--secondary btn--important"><?php echo get_theme_mod( 'hero_btn_2_text', 'Contact' ) ?>
            </a>
          </div>
        </div>
    </div>
</div>


<!--- Over--->
<section id="over-ons" class="section">
    <div class="container">
        <div class="content-box col-xs-12 col-md-6 col-md-push-6" data-aos="fade-left">
            <div class="img-wrapper"><img
                        src="<?php echo get_theme_mod( 'over_img', get_bloginfo( 'template_url' ) . '/img/over-img.jpg' ) ?>"
                        alt="">
            </div>
        </div>
        <div class="content-box col-xs-12 col-md-6 col-md-pull-6" data-aos="fade-right">
            <div class="section__title">
                <h2><?php echo get_theme_mod( 'over_heading', 'Over VDR' ); ?></h2>
            </div>
            <p><?php echo get_theme_mod( 'over_text' ); ?></p>

            <a href="<?php echo get_theme_mod( 'over_btn_url', '#contact' ); ?>">
                <button class="btn btn__primary"><?php echo get_theme_mod( 'over_btn_text', 'Contact' ); ?></button>
            </a>
        </div>
    </div>
</section>

<?php if(post_type_exists('dienst')) : ?>
<!--- Diensten --->
<section id="diensten" class="section">
    <div class="container">
        <div class="row">
            <div class="section__title">
                <div class="section__title">
                    <h2><?php echo get_theme_mod( 'diensten_heading', 'Diensten' ); ?></h2>

                </div>
                <p><?php echo get_theme_mod( 'diensten_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut egestas orci. Proin varius nec odio ut luctus. Donec vel scelerisque mauris. Cras a nulla vel nisl luctus lacinia. Vivamus fringilla, justo sit amet tristique ornare, ex libero volutpat neque, quis varius purus dolor vitae urna' ); ?></p>
            </div>
            <div class="section__content">
                <div class="container boxses">
                    <div class="row">
						<?php $new_query = new WP_Query( 'post_type=dienst&posts_per_page=-1' );
						if ( $new_query->have_posts() ) :?>
							<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                                <div class="col-xs-12 col-sm-4" data-aos="fade-right">
                                    <div class="box">
                                        <a class="box__link" data-toggle="modal"
                                           data-target="#mainModal"
                                           data-thumbnail="<?php echo the_post_thumbnail_url() ?>"
                                           data-content="<?php echo the_excerpt() ?>"
                                           data-title="<?php echo the_title() ?>"
                                           data-link="<?php echo the_permalink() ?>">

                                            <div class="box__img">
                                                <img src="<?php echo the_post_thumbnail_url() ?>"
                                                     alt="<?php the_title() ?>">
                                                <span class="box__image-title">
                                            <?php the_title() ?>
                                                 </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
							<?php endwhile; ?>
						<?php else : ?>
                        <p><?php __('Sorry nog geen Diensten.') ?></p>

						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if(post_type_exists('brands')) : ?>
<!-- Partners -->
<section id="partners" class="section">
    <div class="container">
        <div class="section__title">
            <h2><?php echo get_theme_mod( 'brands_heading', 'Partners en Merken' ); ?></h2>
        </div>
        <div class="section-content">
            <p><?php echo get_theme_mod( 'brands_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ); ?> </p>
            <div class="brands">
				<?php $b_query = new WP_Query( 'post_type=brands&posts_per_page=1' );
				if ( $b_query->have_posts() ) :?>
					<?php while ( $b_query->have_posts() ) : $b_query->the_post(); ?>

						<?php if ( class_exists( 'Dynamic_Featured_Image' ) ) {
							global $dynamic_featured_image;
							$featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );

							//You can now loop through the image to display them as required
							//For example
							foreach ( $featured_images as $image ) {
								echo "<a href='{$image['full']}'>";
								echo "<img src='{$image['full']}' class='brand__img' data-aos='fade-left' alt='Dynamic Featured Image' />";
								echo "</a>";
							}
						} ?>
					<?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('Sorry nog geen Partners of Merken.') ?></p>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<? if(post_type_exists('project')) : ?>
<!-- Projecten -->
<section id="projecten" class="section">
    <div class="container">
        <div class="section__title">
            <h2><?php esc_html( _e( get_theme_mod( 'projects_heading', 'Projecten' ) ) ); ?></h2>
        </div>
        <div class="section__subtext">
            <p><?php esc_html( _e( get_theme_mod( 'projects_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ); ?> </p>
        </div>
        <div class="section__content">
            <ul class="projects row">
				<?php $new_query = new WP_Query( 'post_type=project&posts_per_page=-1' );
				if ( $new_query->have_posts() ) :?>
					<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                        <li class="projects__item col-xs-12 col-sm-4" data-aos="fade-up">
                            <article class="card">
                                <div class="card__container">
                                    <div class="card__image">
                                        <img src="<?php the_post_thumbnail_url() ?>" class="c-card__image" alt="Card Image"/>


   <?php if( class_exists('Dynamic_Featured_Image') ) {
       global $dynamic_featured_image;
       $featured_images = $dynamic_featured_image->get_featured_images( );
       foreach( $featured_images as $img) {
        echo '<img src="' . $img['full'] . '" class="c-card__image" alt="Card Image"/>';
       }
      }
?>

                                    </div>
                                    <div class="card__title">
                                        <h5><?php the_title() ?></h5>
                                    </div>
                                    <div class="card__description">
										<?php the_excerpt() ?>
                                    </div>
                                    <div class="card__link">
                                        <!-- <a href="<?php the_permalink(); ?>"
                                           class="btn btn__primary"><?php echo get_theme_mod( 'read_more', 'Lees meer' ); ?></a> -->
                                    </div>
                                </div>
                            </article>
                        </li>
					<?php endwhile; ?>
				<?php else : ?>
                    <p><?php __('Sorry nog geen projecten.') ?></p>

				<?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<? endif; ?>

<?php if(post_type_exists('vacature')) : ?>
<!-- Vacatures -->
<section id="vacatures" class="section">
    <div class="container">
        <div class="section__title">
            <h2><?php echo get_theme_mod( 'jobs_heading', 'Vacatures' ); ?></h2>
        </div>
        <div class="section__subtext">
            <p><?php echo get_theme_mod( 'jobs_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ); ?> </p>
        </div>
        <div class="section__content">
            <div class="container vacatures">
                <div class="jobs-list">
					<?php $new_query = new WP_Query( 'post_type=vacature&posts_per_page=-1' );
					if ( $new_query->have_posts() ) :?>
						<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                            <button type="button" class="btn btn-primary" data-aos="fade-right" data-toggle="modal"
                                    data-target="#mainModal" data-thumbnail="<?php echo the_post_thumbnail_url() ?>"
                                    data-content="<?php the_excerpt() ?>"
                                    data-title="<?php the_title() ?>"><?php the_title() ?></button>

						<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
                </div>
            </div data-aos="fade-up" >
            <i class="fa fa-chevron-down arrow-down" data-aos-delay="200" aria-hidden="true"
               style="color: #335FB6; font-size:16px;"></i>
        </div>
    </div>
</section>
<?php endif;?>

<!-- Contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="section__content col-sm-12">
            <div class="section__title">
                <h2><?php echo get_theme_mod( 'contact_heading', 'Contact' ); ?></h2>
            </div>
            <p><?php echo get_theme_mod( 'contact_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ); ?></p>
            <div class="contact-form" data-aos="fade-up">
				<?php if ( is_dynamic_sidebar( 'contact' ) ) : ?>
					<?php get_sidebar( 'contact' ); ?>
				<?php endif; ?>

            </div>
        </div>
    </div>
</section>
</div>

<!-- /.container -->
<?php get_template_part( 'modal' ); ?>
<?php get_footer(); ?>
