<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title><?php bloginfo('title'); ?></title>

            <!-- Meta -->
            <meta name="description" content="Pls see my art. Pls like it.">
            <meta name="author" content="Jordan Alamilla">
            <meta property="og:title" content="<?php bloginfo('title'); ?>">
            <meta property="og:type" content="website">
            <meta property="og:url" content="<?php bloginfo('url'); ?>>">
            <meta property="og:description" content="A simple HTML5 Template for new projects.">
            <meta property="og:image" content="image.png">

            <!-- Styles -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css"/>

            <!-- Script -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        </head>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="menu-container">
                            <a href="<?php bloginfo('url'); ?>">
                                <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                            </a>

                            <?php wp_nav_menu( array(
                                'theme_location' => 'primary-menu',
                            ) ); ?>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <body <?php body_class(); ?>>

            <div class="content">