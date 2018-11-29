<?php
  /**
   * 
   * @package lfwebinnovations_theme
   */

?>

<?php get_header(); ?>

<section class="servicos section" id="servicos">
            <h3>Nossos Serviços</h3>
            <div class="container">
                <div class="cards">
                    <div class="cards__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/responsive.svg" alt="Imagem desenvolvimento de site">
                        <h4>Desenvolvimento de Site</h4>
                        <p>Sites inteligentes com design e navegação intuitiva.</p>
                        <p>Direcionados para o objetivos de cada cliente.</p>
                        <p>Podemos realizar a manutenção do site que você já utiliza.</p>
                    </div>
                    <div class="cards__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/web-programming.svg" alt="Imagem desenvolvimento de sistemas">
                        <h4>Desenvolvimento de Sistemas</h4>
                        <p>Desenvolvimento de sistemas personalizados para seus controles de clientes ou produtos</p>
                        <p>Com segurança atendendo suas necessidades</p>
                    </div>
                    <div class="cards__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/digital-campaign.svg" alt="Imagem digital media">
                        <h4>Mídia Digital e Gráfica</h4>
                        <p>Desde o Layout, Banners, Cartões de Visita, Identidade Visual, Anúncios, entre outros. Nosso
                            objetivo é atender todas as necessidades do nosso cliente através de um serviço
                            personalizado e com qualidade seja no meio digital ou impresso.</p>
                    </div>
                </div>
            </div>
            <div class="tecnologias">
                <p>Como fazemos: </p>
                <div class="tecnologias__icons">
                    <img src="<?php bloginfo('template_directory'); ?>/img/html.svg" alt="Ícone HTML">
                    <img src="<?php bloginfo('template_directory'); ?>/img/css.svg" alt="Ícone CSS">
                    <img src="<?php bloginfo('template_directory'); ?>/img/jacascript.svg" alt="Ícone javascript">
                    <img src="<?php bloginfo('template_directory'); ?>/img/sass.svg" alt="Ícone Sass">
                    <img src="<?php bloginfo('template_directory'); ?>/img/reactjs.svg" alt="Ícone React Js">
                    <img src="<?php bloginfo('template_directory'); ?>/img/angular.svg" alt="Ícone Angual.io">
                    <img src="<?php bloginfo('template_directory'); ?>/img/node.svg" alt="Ícone Node Js">
                    <img src="<?php bloginfo('template_directory'); ?>/img/wordpress.svg" alt="Ícone Wordpress">
                    <img src="<?php bloginfo('template_directory'); ?>/img/gulp.svg" alt="Ícone Gulp Js">
                    <img src="<?php bloginfo('template_directory'); ?>/img/git.svg" alt="Ícone Git">
                </div>
            </div>

        </section>
        <section class="portfolio section" id="portfolio">
            <h3>Nossos trabalhos</h3>
            <ul class="portfolio-navigation filters-button-group">
                <li class="portfolio-navigation__item portfolio-navigation__item--active" data-filter="js-all">Todos</li>
                <li class="portfolio-navigation__item" data-filter="js-grafico">Gráfico</li>
                <li class="portfolio-navigation__item" data-filter="js-social-media">Social Media</li>
                <li class="portfolio-navigation__item " data-filter="js-web">Web</li>
            </ul>


            <div class="thumbs">

                <div class="thumbs__item js-all js-web">
                </div>
                <div class="thumbs__item js-all js-grafico">
                </div>
                <div class="thumbs__item js-all js-grafico">
                </div>
                <div class="thumbs__item js-all js-social-media">
                </div>
                <div class="thumbs__item js-all js-web">
                </div>
                <div class="thumbs__item js-all js-grafico">
                </div>
                <div class="thumbs__item js-all js-web">
                </div>
                <div class="thumbs__item js-all js-social-media">
                </div>
                <div class="thumbs__item js-all js-web">
                </div>
            </div>
        </section>
        <section class="sobre section" id="sobre">
            <h3>Sobre Nós</h3>
            <div class="container">
                <div class="sobre__text">
                    <p>Somos novos no mercado que está cada vez mais competitivo, porém temos em nossa bagagem toda
                        experiência necessária para encontrar meios de se destacar e atrair o público para o seu
                        negócio.</p>
                    <p>Utilizando as melhores técnicas de design e desenvolvimento, podemos aumentar a eficácia das
                        suas
                        vendas e dá credibilidade para o negócio. </p>
                    <p>A LF Web Innovations está preparada para atender, da criação ao produto final, com a
                        vantagem
                        do melhor custo-benefício.</p>
                    <p>Mais do que sua agência, queremos ser uma parceira no crescimento da sua empresa.</p>
                    <p>Esse é nosso jeito de trabalhar.</p>
                </div>
            </div>
        </section>
        <section class="contato section" id="contato">
            <h3>Entre em Contato</h3>
            <div class="container">
                <!--<form action="https://formspree.io/contato@lfwebinnovations.com.br" method="POST">
                    <div class="form-group">
                        <label for="input-nome">Nome</label>
                        <input type="text" name="name" id="input-nome">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email</label>
                        <input type="email" name="_replyto" id="input-email">
                    </div>
                    <div class="form-group">
                        <label for="input-assunto">Assunto</label>
                        <input type="text" name="_subject" id="input-assunto">
                    </div>
                    <input type="hidden" name="_language" value="pt-BR" />
                    <input type="text" name="_gotcha" style="display:none" />
                    <div class="form-group">
                        <label for="input-mensagem">Mensagem</label>
                        <textarea name="_format" id="input-mensagem"></textarea>
                    </div>
                    <button type="submit" value="Send">Enviar</button>

                </form>-->
                <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
                    <div id="widget" class="widget widget-area" role="complementary">
                        <?php dynamic_sidebar( 'contact_form' ); ?>
                    </div><!-- #widget area contact form -->
                <?php endif; ?>
                <div class="contato-text">
                    <h4>Ótimo, vamos conversar!</h4>
                    <p>Nossa comunicação é feita para criar relacionamentos. Que tal começar pelo nosso? </p>
                    <p>Envie seu contato e vamos conversar sobre o que você precisa.</p>
                </div>
            </div>
        </section>

<?php get_footer(); ?>