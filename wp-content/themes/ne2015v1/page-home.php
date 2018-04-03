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
                <div class="col-md-4 col-sm-4 col-xs-4 bloco b1 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/clinica/'>
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/clinica.png" alt="Tratamentos Faciais"></div>
                        <h2>Clínica</h2>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 bloco b2 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/estetica/'>
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/estetica.png" alt="Tratamentos Corporais"></div>
                        <h2>Estética</h2>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 bloco b3 text-center">
                    <a href='<?php echo get_site_url(); ?>/tipo-tratamento/tricologia/'>
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/tricologia.png" alt="Tricologia"></div>
                        <h2>Tricologia</h2>
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
                    <h5>Dra. Anna<br>Cecília Andriolo<br><span>Dermatologia <strong>&</strong> Cosmiatria</span></h5>
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
                        <a href="https://instagram.com/clinicadermi" target="_blank">
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
            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                <a href="<?php echo get_site_url(); ?>/highlights"><h2>High<br><span class="quincy">lights</span></h2></a>
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
                        <p>Clínica Professor Doutor<br>Walter Belda Junior</p>
                        <p class="midp">Av. Açocê, 162<br>Moema - SP</p>
                        <p><a href="tel:50515141">(11) 5051 5141</a> | <a href="tel:50511921">(11) 5051 1921</a></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="end end2">
                        <p>Clínica Ruston</p>
                        <p class="midp">Av. Engenheiro Oscar Americano, 60<br>Cidade Jardim - SP</p>
                        <p><a href="tel:30316360">(11) 3031 6360</a></p>
                        <p><a href="http://www.ruston.com.br" target="_blank">www.ruston.com.br</a></p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="end end3">
                        <p>Clínica Anna Cecília Andriolo</p>
                        <p class="midp">Alameda Ricardo Paranhos, 799<br>lote1/4, quadra 243-A<br>Marista - GO</p>
                        <p><a href="tel:39990090">(62) 3999 0090</a> | <a href="tel:98089922">(62) 9808 9922</a></p>
                        <p><a href="http://www.annaceciliaandriolo.com.br" target="_blank">www.annaceciliaandriolo.com.br</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>