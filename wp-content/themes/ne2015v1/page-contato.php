<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

<!-- PAGE CONTATO -->
<section id="page-contato">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header"><?php the_title() ;?></h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Moema - SP</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cidade Jardim - SP</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Marista - GO</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="end end1">
                            <p class="midp">Av. Açocê, 162<br>Moema - SP</p>
                            <p><a href="tel:+551150515141">(11) 5051 5141</a> | <a href="tel:+551150511921">(11) 5051 1921</a></p>
                        </div>
                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.067557401694!2d-46.66076408449764!3d-23.601909968977328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a1affb1657d%3A0xd0e6f03278fce5!2zQXYuIEHDp29jw6osIDE2MiAtIEluZGlhbsOzcG9saXMsIFPDo28gUGF1bG8gLSBTUA!5e0!3m2!1sen!2sbr!4v1444750704084" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="end end2">
                            <p class="midp">Av. Engenheiro Oscar Americano, 60<br>Cidade Jardim - SP</p>
                            <p><a href="tel:+551130316360">(11) 3094-7474</a></p>
                        </div>
                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4883637003454!2d-46.70117688449791!3d-23.586812268418978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57177a3fc403%3A0x8671a0ca3b9a4a19!2sR.+Eng.+Oscar+Americano%2C+60+-+Cidade+Jardim%2C+S%C3%A3o+Paulo+-+SP%2C+05673-050!5e0!3m2!1sen!2sbr!4v1444750727790" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <div class="end end3">
                            <p class="midp">Alameda Ricardo Paranhos, 799<br>lote1/4, quadra 243-A<br>Marista - GO</p>
                            <p><a href="tel:+556239990090">(62) 3999 0090</a> | <a href="tel:+556298089922">(62) 9808 9922</a></p>
                        </div>
                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.530036442946!2d-49.2585633846124!3d-16.70038485033894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef111006f6dd7%3A0x726873bb1c3ff7e4!2sAlameda+Ricardo+Paranhos%2C+799+-+St.+Marista%2C+Goi%C3%A2nia+-+GO%2C+74180-050!5e0!3m2!1sen!2sbr!4v1444750748954" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 xs-center">
                <div class="form-contato xs-center">
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>

<?php get_footer(); ?>