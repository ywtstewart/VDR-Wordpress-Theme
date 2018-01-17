<?php get_header(); ?>

<div class="blog-header">
    <h1 class="blog-title">
		<?php bloginfo( 'name' ); ?>
    </h1>
    <p class="lead blog-description">
		<?php bloginfo( 'description' ); ?>
    </p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">
		<?php if ( ! is_single() ) : ?>
        <div class="blog-posts">
			<?php endif; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php else : ?>
                <p>
					<?php __( 'No Posts Found' ) ?>
                </p>
			<?php endif; ?>
			<?php if ( ! is_single() ) : ?>
        </div>
	<?php endif; ?>
    </div>
    <!-- /.blog-main -->

	<?php get_footer(); ?>
