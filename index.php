
<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns">
            <!-- Begin Loop -->
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>

                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                <?php
                    } //end while
                } //end if
            ?>
            <!-- End Loop -->
        </div>
    </section>
<!-- End Section Containter -->


<?php get_footer(); ?>
