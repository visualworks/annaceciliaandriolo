<?php
/*
Index - Posts
*/
?>

<?php get_header(); ?>

<section id="page-home">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">Estética</h1>
      </div>
      <button onclick="goBack()" class="bt-voltar">&larr; Voltar</button>
      <script>
      function goBack() {
          window.history.back();
      }
      </script>
    </div>
    
    <div class="row">

      <?php // theloop
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            
            <!-- posts comecam aqui -->

            <div class="col-md-4">
              <div class="box post-box" <?php post_class(); ?>>

                  <h3 class="post-title tratamentos-title">
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_title(); ?>
                      </a>
                  </h3>

                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                      <div class="post-img tratamentos-img img">
                        <?php the_post_thumbnail(''); ?>
                      </div>
                    </a>
                    <div class="clear"></div>
                  <?php endif; ?>
                  <div class="post-text tratamentos-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <?php wp_link_pages(); ?>

                  <!--
                  < ?php get_template_part('template-part', 'postmeta'); ?>
                  < ?php  if ( comments_open() ) : ?>
                         <div class="clear"></div>
                        <p class="text-right">
                            <a class="btn btn-success" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
                        </p>
                  < ?php endif; ?>
                  -->

              </div>
            </div>

          <?php endwhile; ?>

          <?php else: ?>

            <?php get_404_template(); ?>

          <?php endif; ?>

      </div><!-- .col-md-8 -->

    </div><!-- .row -->

  </div><!-- .containerr -->
</section>

<?php get_footer(); ?>
