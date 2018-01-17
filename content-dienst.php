<div class="blog-post">
    <h2 class="blog-post-title">
        <?php if(is_single()) : ?>
          <div class="hero" style="background:url(<?php echo the_post_thumbnail_url() ?>); background-size: 100% auto; background-position: center center">

                  <div class="container hero-content-container" >
                      <div class="hero-content">

                          <h1 class="hero-title"><?php echo nl2br( the_title()); ?></h1>

                            </div>
          </div>
          </div
        <?php else: ?>
        <a href="<?php the_permalink();?>">
            <?php the_title();?>
        </a>
        <?php endif;?>
    </h2>
    <p class="blog-post-meta">
        <?php the_time('F j, Y g:i a'); ?> by
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author();?>
        </a>
    </p>
    <div class="post-thumb">
        <?php if (has_post_thumbnail()) :?>
        <?php the_post_thumbnail();?>
        <?php endif;?>
    </div>
    <?php if(is_single()) : ?>
    <?php the_content(); ?>
    <?php else: ?>
    <?php the_excerpt();?>
    <div class="button-wrapper">
        <button class="btn btn--default btn__read-more"><a href="<?php the_permalink();?>">Read more...</a></button>
    </div>
    <?php endif;?>
<!---->
<!--    --><?php //if(is_single()): ?>
<!--    --><?php //comments_template(); ?>
<!--    --><?php //endif; ?>

</div>
<!-- /.blog-post -->
