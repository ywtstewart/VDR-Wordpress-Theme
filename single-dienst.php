<?php get_header(); ?>
<?php if ( has_post_thumbnail() && is_single() ) : ?>
    <div class="blog-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="blog-header__img" ></div>
    </div>
<?php endif; ?>
<div class="row">

    <div class="col-sm-12 blog-main">
		<?php if (is_single()) : ?>

		<?php else : ?>
        <div class="blog-posts">
			<?php endif; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'project' ); ?>
			<?php endwhile; ?>
			<?php else : ?>
                <p>
					<?php __( 'No Projects Found' ) ?>
                </p>
			<?php endif; ?>
			<?php if (is_single()) : ?>
			<?php else : ?>
        </div>
	<?php endif; ?>
    </div>
    <!-- /.blog-main -->
	<?php get_footer(); ?>

