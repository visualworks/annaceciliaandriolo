<?php
/*
Template Name: Home
*/
?>

<?php get_header('home'); ?>

<!-- PAGE HOME -->

<script>
    
(function($){
    // console.log(navigator.userAgent);
    /* Adjustments for Safari on Mac */
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        // console.log('Safari on Mac detected, applying class...');
        $('html').addClass('safari'); // provide a class for the safari-mac specific css to filter with
    }
})(jQuery);

</script>

<div id="s1">
    <div class="container">
        <div class="row">
            <div class="tbox hidden-sm hidden-xs"></div>
            <div class="circles text-center">
                <div class="col-md-3 col-sm-6 col-xs-6 bloco b1 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/dermatologia-clinica/'>
                        <div class="img img-placeholder"><img src="<?php echo wp_get_upload_dir(); ?>/2018/04/dermatologia-clinica.png" alt="Tratamentos Faciais" /></div>
                        <h2>Clínica</h2>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 bloco b3 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/dermatologia-capilar/'>
                        <div class="img img-placeholder"><img src="<?php echo wp_get_upload_dir(); ?>/2018/04/dermatologia-tricologia.png" alt="Tricologia" /></div>
                        <h2>Cirúrgica</h2>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 bloco b2 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/dermatologia-estetica/'>
                        <div class="img img-placeholder"><img src="<?php echo wp_get_upload_dir(); ?>/2018/04/dermatologia-estetica.png" alt="Tratamentos Corporais" /></div>
                        <h2>Estética</h2>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 bloco b3 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/dermatologia-capilar/'>
                        <div class="img img-placeholder"><img src="<?php echo wp_get_upload_dir(); ?>/2018/04/dermatologia-capilar.png" alt="Tricologia" /></div>
                        <h2>Capilar</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="s2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                <div class="perfilhome">
                    <a href="<?php echo site_url();?>/perfil">
                        <button>
                            Visite o perfil
                        </button>
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center sociais">
                    Siga:<div class="icon">
                            <a href="https://www.facebook.com/dermatologia.anna.cecilia.andriolo?fref=ts" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    <div class="icon">
                        <a href="https://www.instagram.com/dra_anna_cecilia_andriolo/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="s3" class="hl">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 text-right agenda-title-mobile agenda-title-web">
                <h2 class="sectitle-mobile"><a href="<?php echo get_site_url(); ?>/agenda">Agenda</a></h2>
            </div>
            <?php query_posts( 'posts_per_page=2' ); ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 col-sm-4">
                    <div class="bloco">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="img"><?php the_post_thumbnail('medium'); ?></div>
                            <h3 class="post-title">
                                <?php the_title() ;?>
                            </h3>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<div id="s4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="sectitle text-center xs-center">
                    Atendimentos
                </div>
            </div>
            <div class="ends xs-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="end end1">
                        <p class="midp">Av. Açocê, 162<br>Moema - SP</p>
                        <p><a href="tel:+551150515141">(11) 5051 5141</a> | <a href="tel:+551150511921">(11) 5051 1921</a></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="end end2">
                        <p class="midp">Av. Engenheiro Oscar Americano, 60<br>Cidade Jardim - SP</p>
                        <p><a href="tel:+551130316360">(11) 3031 6360</a></p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="end end3">
                        <p class="midp">Alameda Ricardo Paranhos, 799<br>lote1/4, quadra 243-A<br>Marista - GO</p>
                        <p><a href="tel:+556239990090">(62) 3999 0090</a> | <a href="tel:+556298089922">(62) 9808 9922</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>