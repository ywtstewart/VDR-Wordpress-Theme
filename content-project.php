
<?php if ( is_single() ) : ?>
<div class="blog-post">
	<?php else: ?>
    <div class="blog-post--archive row">
		<?php endif; ?>

			<?php if ( is_single() ) : ?>
            <div class="blog-post__title">
				<?php else: ?>
                <div class="blog-post__title--archive col-xs-12 col-sm-8">
					<?php endif; ?>
                    <h2>
						<?php if ( is_single() ) : ?>
							<?php the_title(); ?>
						<?php else: ?>
                            <a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
                            </a>
						<?php endif; ?>
                    </h2>
                </div>

				<?php if ( is_single() ) : ?>
					<?php the_content(); ?>
				<?php else: ?>
                    <div class="blog-post__excerpt col-xs-12 col-sm-8">
						<?php the_excerpt(); ?>
                        <div class="blog-post__button-wrapper--archive">
                            <a href="<?php the_permalink(); ?>" class="btn btn--primary btn__read-more">Read more...</a>
                            </a>
                        </div>
                    </div>
				<?php endif; ?>
            </div>


