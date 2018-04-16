    <footer>
        <div class="container">
            <div class="row">
                <div class="bottom">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-logo-anna-cecilia">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-anna-cecilia-andriolo-footer.png" alt="Dra Anna Cecilia Andriolo - Dermatologia - CRM SP 141502 - RQE SP 38665 - CRM GO 12882 - RQE GO 9653" title="Dra Anna Cecilia Andriolo - Dermatologia - CRM SP 141502 - RQE SP 38665 - CRM GO 12882 - RQE GO 9653" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 footer-logos">
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
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center sociais sociais-footer">
                                Siga:
                                <div class="icon">
                                    <a href="https://www.facebook.com/dermatologia.anna.cecilia.andriolo" target="_blank">
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
