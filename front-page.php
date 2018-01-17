<?php get_header(); ?>
<!--- Hero --->
<div class="hero" style="background:url(<?php echo get_theme_mod( 'hero_bg_img', get_bloginfo( 'template_url' ) . '/img/hero-img.jpg' ) ?>); background-size: 100% auto; background-position: center center">
    <div class="container-fluid hero-content-container">
        <div class="hero-content" data-aos="fade-up">
            <div class="hero-img">
                <img src="<?php echo get_theme_mod( 'hero_main_img', get_bloginfo( 'template_directory' ) . '/img/vdr-logo-full.png' ) ?>"
                     alt=" <?php bloginfo( 'name' ); ?>">
            </div>
            <p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'hero_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ipsam dolorem et ullam eos quidem voluptate deleniti dignissimos iure reprehenderit perferendis neque ratione alias eum totam, ab nostrum sequi eligendi.' ) ) ) ); ?></p>
            <a href="<?php echo nl2br( esc_html( get_theme_mod( 'hero_btn_1_url', '#over-ons' ) ) ); ?>">
                <button class="btn btn--secondary btn--important"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'hero_btn_1_text', 'Over Ons' ) ) ) ) ?></button>
            </a>
            <a href="<?php echo nl2br( esc_html( get_theme_mod( 'hero_btn_2_url', '#contact' ) ) ); ?>">
                <button class="btn btn--secondary btn--important"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'hero_btn_2_text', 'Contact' ) ) ) ) ?></button>
            </a>
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
                <h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'over_heading', 'Over VDR' ) ) ) ); ?></h2>
            </div>
            <p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'over_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut egestas orci. Proin varius nec odio ut luctus. Donec vel scelerisque mauris. Cras a nulla vel nisl luctus lacinia. Vivamus fringilla, justo sit amet tristique ornare, ex libero volutpat neque, quis varius purus dolor vitae urna. Phasellus sollicitudin lectus metus, et mollis erat cursus at. Pellentesque in lacus sed justo euismod aliquet. Praesent mollis, diam eu suscipit tristique, eros nunc aliquet neque, at tincidunt sapien purus eget arcu. Integer varius nibh non imperdiet iaculis. Curabitur eget rutrum ex. Vivamus pharetra risus magna, lacinia rutrum tellus pellentesque at.' ) ) ) ); ?></p>

            <a href="<?php echo nl2br( esc_html( get_theme_mod( 'over_btn_url', '#contact' ) ) ); ?>">
                <button class="btn btn--primary"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'over_btn_text', 'Contact' ) ) ) ); ?></button>
            </a>
        </div>
    </div>
</section>

<!--- Diensten --->
<section id="diensten" class="section">
    <div class="container">
        <div class="row">
            <div class="section__title">
                <div class="section__title">
                    <h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'diensten_heading', 'Diensten' ) ) ) ); ?></h2>

                </div>
                <p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'diensten_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut egestas orci. Proin varius nec odio ut luctus. Donec vel scelerisque mauris. Cras a nulla vel nisl luctus lacinia. Vivamus fringilla, justo sit amet tristique ornare, ex libero volutpat neque, quis varius purus dolor vitae urna' ) ) ) ); ?></p>
            </div>
            <div class="section__content">
                <div class="container boxses">
                    <div class="row">
						<?php $new_query = new WP_Query( 'post_type=dienst&posts_per_page=-1' );
						if ( $new_query->have_posts() ) :?>
							<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                                <div class="col-xs-12 col-sm-4" data-aos="fade-up">
                                    <div class="box">
                                        <div class="box-img"
                                             style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">

                                            <h2><? the_title() ?></h2>
                                        </div>
                                        <div class="box-text">
                                            <p><? the_excerpt() ?></p>

                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal"
                                                data-thumbnail="<?php the_post_thumbnail_url() ?>"
                                                data-content="<?php the_content() ?>"
                                                data-title="<?php the_title() ?>"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'diensten_btn_text', 'Lees meer' ) ) ) ); ?></button>
                                    </div>
                                </div>
							<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--- Partners --->
<section id="partners" class="section">
    <div class="container">
        <div class="section__title">
            <h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'brands_heading', 'Partners en Merken' ) ) ) ); ?></h2>
        </div>
        <div class="section-content">
            <p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'brands_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ) ); ?> </p>
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
								echo "<img src='{$image['full']}' class='featured-img' data-aos='fade-left' alt='Dynamic Featured Image' />";
								echo "</a>";
							}
						} ?>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!--- Projecten --->
<section id="projecten" class="section">
    <div class="container">
        <div class="section__title">
            <h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'projects_heading', 'Projecten' ) ) ) ); ?></h2>
        </div>
        <div class="section__subtext">
            <p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'projects_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ) ); ?> </p>
        </div>
        <div class="section__content">
            <ul class="projects row">
	            <?php $new_query = new WP_Query( 'post_type=project&posts_per_page=-1' );
	            if ( $new_query->have_posts() ) :?>
	            <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                <li class="projects__item col-xs-12 col-sm-4">
                    <article class="card">
                        <div class="card__container">
                            <div class="card__image">
                                <img src="<?php the_post_thumbnail_url()?>" class="c-card__image" alt="Card Image"/>
                            </div>
                            <div class="card__title">
                                <h5><?php the_title() ?></h5>
                            </div>
                            <div class="card__description">
                                <?php the_excerpt() ?>
                            </div>
                            <div class="card__link">
                                <a href="<?php the_permalink(); ?>" class="btn btn--primary"><?php echo nl2br( esc_html( pll() ? pll__( get_theme_mod( 'read_more', 'Lees meer' ) ) : 'Lees meer' ) ); ?></a>
                            </div>
                        </div>
                    </article>
                </li>
		            <?php endwhile; ?>
	            <?php else : ?>

	            <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<!--- Vacatures --->
<section id="vacatures" class="section">
    <div class="container">
        <div class="section__title">
            <h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'jobs_heading', 'Vacatures' ) ) ) ); ?></h2>
        </div>
        <div class="section__subtext">
            <p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'jobs_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ) ); ?> </p>
        </div>
        <div class="section__content">
            <div class="container vacatures">
                <div class="jobs-list">
					<?php $new_query = new WP_Query( 'post_type=vacature&posts_per_page=-1' );
					if ( $new_query->have_posts() ) :?>
						<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                            <button type="button" class="btn btn-primary" data-aos="fade-right" data-toggle="modal"
                                    data-target="#exampleModal" data-thumbnail="<?php echo the_post_thumbnail_url() ?>"
                                    data-content="<?php the_content() ?>"
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

<!--- Contact --->
<section id="contact" class="section">
    <div class="container">
        <div class="section__content col-sm-12">
            <div class="section__title">
                <h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'contact_heading', 'Contact' ) ) ) ); ?></h2>
            </div>
            <p><?php echo nl2br( pll__( get_theme_mod( 'contact_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ); ?></p>
            <div class="contact-form" data-aos="fade-up">
				<?php get_sidebar( 'contact' ); ?>
				<?php get_sidebar( 'contactinfo' ); ?>
            </div>
        </div>
    </div>
</section>
</div>

<!-- /.container -->
<?php get_template_part( 'modal' );?>
<?php get_footer(); ?>
