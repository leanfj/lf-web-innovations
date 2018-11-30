<?php 
  /**
   * The Footer of theme
   * 
   * @package lfwebinnovations_theme
   */
?>
</main>
    <!-- FIM MAIN -->
    <footer>
        <div class="container">
            <div class="social-media">
                <ul class="social-media--left">
                    <li><a href="https://www.facebook.com/LF-WEB-Innovations-156460061971929"><img src="<?php bloginfo('template_directory'); ?>/img/logo-facebook.svg"
                                alt="Link Página do Facebook"></a></li>
                    <li><a href="https://twitter.com/lfwebinnovatio1"><img src="<?php bloginfo('template_directory'); ?>/img/logo-twitter.svg" alt="Link Página do Twitter"></a></li>
                    <li><a href="https://www.instagram.com/leanfj86/"><img src="<?php bloginfo('template_directory'); ?>/img/logo-instagram.svg" alt="Link Página do Instagram"></a></li>
                </ul>
                <img src="<?php bloginfo('template_directory'); ?>/img/logo-branco-footer.svg" alt="Logo LF Web Innovations" class="logo-footer">
                <ul class="social-media--right">
                    <li><a href="https://www.behance.net/leanfj4185"><img src="<?php bloginfo('template_directory'); ?>/img/logo-behance.svg" alt="Link Página do Behance"></a></li>
                    <li><a href="https://www.linkedin.com/company/lf-web-innovations/"><img src="<?php bloginfo('template_directory'); ?>/img/logo-linkedin.svg"
                                alt="Link Página do Linkedin"></a></li>
                    <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521982739265"><img src="<?php bloginfo('template_directory'); ?>/img/logo-whatsapp.svg"
                                alt="Link Página do Whatsapp"></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="contatos">
                <div class="contatos__item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/email-icon.svg" alt="Ícone de Email">
                    <span>email</span>
                    <a href="mailto:<?php bloginfo('admin_email'); ?>?Subject=Contato%20Via%20Site"><?php bloginfo('admin_email'); ?></a>
                </div>
                <div class="contatos__item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/phone-icon.svg" alt="Ícone de Telefone">
                    <span>telefone</span>
                    <a href="tel:+5521982739265">+55 21 98273-9265</a>
                </div>
                <div class="contatos__item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/location-icon.svg" alt="Ícone de Localiazação">
                    <span>localização</span>
                    <a href="https://goo.gl/maps/d259hZzmS2J2">Estrada dos Bandeirantes, 8325 - RJ - Jacarepaguá</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="direitos">
                <p> &copy; <?php echo date('Y'); ?> - LF Web Innovations - Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    <!-- FIM FOOTER -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>