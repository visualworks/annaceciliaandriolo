<?php get_header(); ?>

    <!-- start content container -->
    <div class="pag404">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>Desculpe, a página que você tentou acessar não existe</h1>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo ( 'name' );  ?>" class="logo">
                        <p>Clique aqui para voltar para a página principal.</p>
                    </a> 
                </div>

            </div>
        </div>
    </div>
    <!-- end content container -->

<?php get_footer(); ?>