<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head(); ?>

</head>

<body id="top" <?php body_class(); ?> >

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader <?php if(is_home()) echo "s-pageheader--home"; ?>">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <?php
                    if(is_active_sidebar('social-icons')) {
                        dynamic_sidebar('social-icons');
                    }
                ?>

                <?php get_template_part('template-parts/common/navigation'); ?>

            </div> <!-- header-content -->
        </header> <!-- header -->

        <?php 
         if(is_home()):
                get_template_part('template-parts/blog-home/featured');
            endif;  ?> 

    </section> <!-- end s-pageheader -->