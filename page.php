<?php get_header(); ?>

<div class="page">
    <div class="page__header">
        <?php get_header(); ?>
    </div>
     <div class="page__content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
       
        <!-- /.blog-post -->

        <?php endwhile; ?>
        <?php else : ?>
        <p>
            <?php __('No Page Found')?>
        </p>
        <?php endif; ?>
     </div>
    </div>
    <!-- /.blog-main -->

<?php get_footer(); ?>
