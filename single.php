<?php get_header(); ?>

    <section class="row">
        <div class="twelve columns">

<!-- Begin Page PHP -->
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post();
                    
                    if ( has_post_thumbnail() ) { ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php } ?>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                }
            } ?>
<!-- End Page PHP -->
        </div>
    </section>

<?php get_footer(); ?>
