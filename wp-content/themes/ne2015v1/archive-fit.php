<?php
/*
Template Name: Artigos
*/
?>

<?php get_header(); ?>

<section id="page-home">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Artigos</h1>
            </div>
            <button onclick="goBack()" class="bt-voltar">&larr; Voltar</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>

        <div class="row">

            <div class="col-md-8">

                <?php
                //if this was a search we display a page header with the results count. If there were no results we display the search form.
                if (is_search()) :

                    $total_results = $wp_query->found_posts;

                    echo "<h2 class='page-header'>" . sprintf( __('%s resultados para a busca: "%s"','devdmbootstrap3'),  $total_results, get_search_query() ) . "</h2>";

                    if ($total_results == 0) :
                        get_search_form(true);
                    endif;

                endif;
                ?>

                <?php // theloop
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    // single post
                    if ( is_single() ) : ?>

                        <div <?php post_class(); ?>>

                            <h3 class="post-title news-title">
                                <?php the_title() ;?>
                            </h3>

                            <!-- /*<?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-img news-img img">
                          <?php the_post_thumbnail(''); ?>
                        </div>
                        <div class="clear"></div>
                    <?php endif; ?>*/ -->
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <!-- <?php get_template_part('template-part', 'postmeta'); ?> -->
                            <?php comments_template(); ?>

                        </div>

                        <?php
                    // list of posts
                    else : ?>

                        <div <?php post_class(); ?>>

                            <h2 class="post-title news-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-img news-img img">
                                    <?php the_post_thumbnail(''); ?>
                                </div>
                                <div class="clear"></div>
                            <?php endif; ?>
                            <?php the_excerpt(); ?>
                            <?php wp_link_pages(); ?>

                            <!--
                  <?php get_template_part('template-part', 'postmeta'); ?>
                  <?php  if ( comments_open() ) : ?>
                         <div class="clear"></div>
                        <p class="text-right">
                            <a class="btn btn-success" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
                        </p>
                  <?php endif; ?>
                  -->

                        </div>

                    <?php  endif; ?>

                <?php endwhile; ?>
                    <?php posts_nav_link(); ?>
                <?php else: ?>

                    <?php get_404_template(); ?>

                <?php endif; ?>

            </div><!-- .col-md-8 -->


            <div class="col-md-4">

                <div class="row">

                    <div class="col-sm-12 colunistas">

                        <!--<h2>Colunistas</h2>

                        <?php
                        $args=array(
                            'post_type' => 'colunista',
                            'posts_per_page' => -1,
                            'orderby'=>'title',
                            'order'=>'ASC'
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>

                            <div class="img-colunista">
                                <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail') ?>
                                <?php the_title(); ?>
                                </a>
                            </div>

                            <?php
                        endwhile;
                        ?>
                        -->
                    </div>

                </div>

            </div>


        </div><!-- .row -->
    </div><!-- .containerr -->
</section>

<?php get_footer(); ?>
