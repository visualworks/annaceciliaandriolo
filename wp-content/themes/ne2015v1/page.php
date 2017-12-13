<?php
/*
Page Padrão
*/
?>

<?php get_header(); ?>

<!-- PAGE -->
<section id="page">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <section>
                    <?php // theloop
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <h1 class="page-header"><?php the_title() ;?></h1>
                            <div class="img"><?php the_post_thumbnail(); ?></div>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php comments_template(); ?>
                    <?php endwhile; ?>
                    <?php else: ?>

                        <?php get_404_template(); ?>

                    <?php endif; ?>
                </section>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>