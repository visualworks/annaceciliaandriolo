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
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="tcomments">Caro cliente, será um prazer saber a sua opinião sobre a experiência com nossos serviços. Buscamos aperfeiçoar e melhorar sempre e para isso contamos com você! Obrigada.</p>
                    <div class="commentform">
                        <?php comment_form(array('title_reply'=>'Deixe seu depoimento')); ?>
                    </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <ul class="commentlist">
                <h4>Depoimentos anteriores:</h4>
                    <?php
                        //Gather comments for a specific page/post 
                        $comments = get_comments(array(
                            'post_id' => 307,
                            'status' => 'approve' //Change this to the type of comments to be displayed
                        ));

                        //Display the list of comments
                        wp_list_comments(array(
                            'per_page' => 10, //Allow comment pagination
                            'reverse_top_level' => false //Show the latest comments at the top of the list
                        ), $comments);
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>