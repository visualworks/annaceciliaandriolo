    <footer>
        <div class="container">
            <div class="row">
                <div class="bottom">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p class="assinatura xs-center">Dra. Anna Cecília Andriolo</p>
                        <p style="font-size: .8em;">CRM SP 141502 | RQE SP 38665<br />CRM GO 12882 | RQE GO 9653</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="imgs xs-center">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 xs-center">
                            Made with ❤ by <a href="https://www.visualworks.com.br" target="_blank" style="color: #999;">Visual Works</a><br />
                            Todos os direitos reservados - Anna Cecilia Andriolo &copy; 2015 - <?php echo date('Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- FACEBOOK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=524413861011685";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php wp_footer(); ?>
</body>
</html>
