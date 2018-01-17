<?php get_header(); ?>

<div class="blog-header" style="background-image: url(<?php echo get_theme_mod( 'hero_main_img', get_bloginfo( 'template_directory' ) . '/img/hero-img.jpg' ) ?>)">

<!--	<p class="lead blog-description">-->
<!--		--><?php //bloginfo('description');?>
<!--	</p>-->
</div>

<div class="col-xs-12">
    <div class="blog-archive-header col-xs-12">
        <h1>
			<?php $object = get_post_type_object( 'project' )->labels;

			echo $object->name;?>
        </h1>
    </div>
	<div class="col-sm-12 blog-main">

		<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', get_post_format()); ?>
		<?php endwhile; ?>
		<?php else : ?>
			<p>
				<?php __('No Posts Found')?>
			</p>
		<?php endif; ?>
	</div>
	<!-- /.blog-main -->
	<?php get_footer(); ?>
