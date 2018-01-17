<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<!--- Hero --->
<div class="hero"
     style="background:url(<?php echo get_theme_mod( 'hero_bg_img', get_bloginfo( 'template_url' ) . '/img/hero-img.jpg' ) ?>); background-size: 100% auto; background-position: center center">

	<div class="container-fluid hero-content-container">
		<div class="hero-content" data-aos="fade-up">
			<div class="hero-img">
				<img src="<?php echo get_theme_mod( 'hero_main_img', get_bloginfo( 'template_directory' ) . '/img/vdr-logo-full.png' ) ?>"
				     alt=" <?php bloginfo( 'name' ); ?>">
			</div>
			<p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'hero_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ipsam dolorem et ullam eos quidem voluptate deleniti dignissimos iure reprehenderit perferendis neque ratione alias eum totam, ab nostrum sequi eligendi.' ) ) ) ); ?></p>
			<a href="<?php echo nl2br( esc_html( get_theme_mod( 'hero_btn_1_url', '#over-ons' ) ) ); ?>">
				<button class="btn btn--default btn--white"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'hero_btn_1_text', 'Over Ons' ) ) ) ) ?></button>
			</a>
			<a href="<?php echo nl2br( esc_html( get_theme_mod( 'hero_btn_2_url', '#contact' ) ) ); ?>">
				<button class="btn btn--default btn--white"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'hero_btn_2_text', 'Contact' ) ) ) ) ?></button>
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
                <h2>Test</h2>

			</div>
			<p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'over_text', 'This is the default text.' ) ) ) ); ?></p>

			<a href="<?php echo nl2br( esc_html( get_theme_mod( 'over_btn_url', '#contact' ) ) ); ?>">
				<button class="btn btn--default"><?php echo nl2br( esc_html( pll__( get_theme_mod( 'over_btn_text', 'Contact' ) ) ) ); ?></button>
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
				<p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'diensten_text', 'Content' ) ) ) ); ?></p>

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
			<h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'brands_heading', 'Partners & Brands' ) ) ) ); ?></h2>

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

<!--- Vacatures --->
<section id="vacatures" class="section">
	<div class="container">
		<div class="section__title">
			<h2><?php echo nl2br( esc_html( pll__( get_theme_mod( 'jobs_heading', 'Vacatures' ) ) ) ); ?></h2>

		</div>
		<div class="section__content">
			<p><?php echo nl2br( esc_html( pll__( get_theme_mod( 'jobs_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ) ); ?> </p>
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
				<p><?php echo nl2br( pll__( get_theme_mod( 'contact_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.' ) ) ); ?></p>
			</div>
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
