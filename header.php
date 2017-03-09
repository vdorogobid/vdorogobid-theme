<!DOCTYPE html>
<html>
<head>
    <!--
    bloginfo()  Выводит на экран различную информацию о блоге, которая, в основном, указывается в настройках сайта.
    https://wp-kama.ru/function/bloginfo
    -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!--
       https://wp-kama.ru/function/wp_title
       wp_title Выводит/возвращает заголовок страницы.
       -->
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>

    <!--
    wp_head() WP Запускает хук-событие wp_head. Вызывается в шапке сайта в файле: header.php
    https://wp-kama.ru/function/wp_head
    -->
    <?php wp_head(); ?>

    <!--<link media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link media="all" type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
    <link media="all" type="text/css" href="css/core.css" rel="stylesheet">
    <link media="all" type="text/css" href="css/skins/red.css" rel="stylesheet">
    <link media="all" type="text/css" href="css/custom.css" rel="stylesheet">-->
</head>
<body>

<div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#">
							WPNovaPoshta
						</a>
					</div>
				</div>
                
                
                  <?php

                $args = array(
                    'theme_location' => 'primary',        // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                    'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                    'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'container_class' => 'col-md-8',              // (string) class контейнера (div тега)
                    'container_id'    => 'main-menu',              // (string) id контейнера (div тега)
                    'menu_class'      => 'navmenu',          // (string) class самого меню (ul тега)
                    'menu_id'         => 'menu',              // (string) id самого меню (ul тега)
                    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                    'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                    'before'          => '',              // (string) Текст перед <a> каждой ссылки
                    'after'           => '',              // (string) Текст после </a> каждой ссылки
                    'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                    'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                    'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu

                );
                wp_nav_menu($args);

                ?>
<!--
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
						<ul id="menu">
							<li class="active" ><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#project">Projects</a></li>
							<li><a href="#news">News</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
							li><a href="#features">Features</a></li
						</ul>
					</div>
				</div>
-->
			</div>
		</div>
	</div>
    
        </div>
</div>
    
    
    
    
