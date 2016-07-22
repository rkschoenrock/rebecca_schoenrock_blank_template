
<?php get_header(); ?>

<div class="welcome">
    <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
    <div class="social">
        <a href=""><img src="images/.png"/></a>
        <a href=""><img src="images/.png"/></a>
        <a href=""><img src="images/.png"/></a>
        <a href=""><img src="images/.png"/></a>
        <a href=""><img src="images/.png"/></a>
    </div>
</div>



<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns">
            <!-- Begin Loop -->
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            }
                        ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More</a>

                    <?php
                    } //end while
                } //end if
            ?>
            <!-- End Loop -->
        </div>
    </section>
<!-- End Section Containter -->


<?php get_footer(); ?>
