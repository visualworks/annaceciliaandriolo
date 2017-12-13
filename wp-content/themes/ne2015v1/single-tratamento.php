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
          <h1 class="page-header">Tratamentos</h1>
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

        <?php // theloop
          if ( have_posts() ) : while ( have_posts() ) : the_post();

            // single post
            if ( is_single() ) : ?>

                <div <?php post_class(); ?>>

                    <h3 class="post-title tratamentos-title">
                      <?php the_title() ;?>
                    </h3>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-img tratamentos-img img">
                          <?php the_post_thumbnail(''); ?>
                        </div>
                        <div class="clear"></div>
                    <?php endif; ?>

                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <!-- < ?php get_template_part('template-part', 'postmeta'); ? > -->
                    <!-- <?php comments_template(); ?> -->

                </div>

            <?php  endif; ?>

          <?php endwhile; ?>
          <?php posts_nav_link(); ?>
          <?php else: ?>

            <?php get_404_template(); ?>

          <?php endif; ?>

      </div><!-- .col-md-8 -->

      <!-- SIDER 
      <?php get_sidebar( 'right' ); ?>
      -->
    </div><!-- .row -->
  </div><!-- .containerr -->
</section>

<?php get_footer(); ?>
