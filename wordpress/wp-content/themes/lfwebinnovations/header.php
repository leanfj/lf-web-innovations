<?php 
  /**
   * The header of theme
   * 
   * @package lfwebinnovations_theme
   */
?>

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/favicon/safari-pinned-tab.svg" color="#00aba9">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image:height" content="1257">
    <meta property="og:image:width" content="2400">
    <meta property="og:description" content="Com criatividade entregamos a transforma&ccedil;&atilde;o digital para alcan&ccedil;ar seus objetivos">
    <meta property="og:title" content="LF Web Innovations">
    <meta property="og:url" content="http://www.lfwebinnovations.com.br">
    <meta property="og:image" content="http://www.lfwebinnovations.com.br/open-graph/og-image.jpg">
    <title><?php bloginfo('name'); echo "|"; bloginfo('description'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <div class="container ">
            <div class="logo">
                <h1 class="logo__texto">Lf Web Innovations - Desenvolvimento Web</h1>
                <a href="<?php bloginfo('url'); ?>"><img class="logo__imagem" src="<?php bloginfo('template_url'); ?>/img/logo-escuro.svg" alt="Logotipo LF Web innovations"></a>

            </div>
            <nav>
                <ul class="menu">
                    <li><a class="menu__item--active" href="#hero">Início</a></li>
                    <li><a class="" href="#servicos">Serviços</a></li>
                    <li><a class="" href="#portfolio">Portfólio</a></li>
                    <li><a class="" href="#sobre">Sobre</a></li>
                    <li><a class="" href="#contato">Contato</a></li>
                </ul>
                <div class="menu-icon">
                    <span class="span-line"></span>
                    <span class="span-line"></span>
                    <span class="span-line"></span>
                </div>
                <ul class="menu-mobile">
                    <li><a class="menu__item--active" href="#hero">Início</a></li>
                    <li><a class="" href="#servicos">Serviços</a></li>
                    <li><a class="" href="#portifolio">Portifólio</a></li>
                    <li><a class="" href="#sobre">Sobre</a></li>
                    <li><a class="" href="#contato">Contato</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <!-- FIM MENU HEADER -->
    <section id="hero" class="section">
        <div class="slide-section">
            <div class="slide-item  slide-item--active">
                <h2 class="slide-item__title">Desenvolvimento de Sites</h2>
                <p class="slide-item__text">Com criatividade entregamos a transformação digital para alcançar seus
                    objetivos</p>
            </div>
            <div class="slide-item">
                <h2 class="slide-item__title">Desenvolvimento de sistemas Web</h2>
                <p class="slide-item__text">Com criatividade entregamos a transformação digital para alcançar seus
                    objetivos</p>
            </div>
        </div>
    </section>
    <!-- FIM HERO -->
    <main>