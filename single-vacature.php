<?php get_header(); ?>

<!-- <div class="blog-header">
    <h1 class="blog-title">
        <?php bloginfo('name');?>
    </h1>
    <p class="lead blog-description">
        <?php bloginfo('description');?>
    </p>
</div> -->

<div class="col-xs-12">

    <div class="col-sm-12 blog-main">
	    <?php if (is_archive()) : ?>
        <div class="blog-posts">
		    <?php endif; ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content', 'project'); ?>
        <?php endwhile; ?>
        <?php else : ?>
        <p>
            <?php __('No Posts Found')?>
        </p>
        <?php endif; ?>
	        <?php if (is_archive()) : ?>
        </div>
    <?php endif; ?>
    </div>
    <!-- /.blog-main -->



    <?php get_footer(); ?>
