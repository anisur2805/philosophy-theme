 <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3><?php _e( "Popular Posts", "philosophy" );?></h3>

                <div class="block-1-2 block-m-full popular__posts">

                    <?php
                        $philosophy_popular_posts = new WP_Query( [
                        "posts_per_page" => 6,
                        "is_sticky_post" => 1,
                        "orderby"        => "comment_count",
                        ] );

                        while ( $philosophy_popular_posts->have_posts() ) {
                        $philosophy_popular_posts->the_post();?>

                            <article class="col-block popular__post">
                                <a href="<?php the_permalink();?>" class="popular__thumb">
                                    <?php the_post_thumbnail();?>
                                </a>
                                <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                <section class="popular__meta">
                                        <span class="popular__author"><span><?php _e( "By", "philosophy" );?></span> <a href="#0"> <?php the_author();?></a></span>
                                    <span class="popular__date"><span><?php _e( "on", "philosophy" );?></span> <time datetime="<?php echo esc_html( get_the_date() ); ?>"><?php echo esc_html( get_the_date() ); ?></time></span>
                                </section>
                        </article>

                        <?php
                            }
                            wp_reset_query();
                        ?>

                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->

            <div class="col-four md-six tab-full about">
                <?php
                    if ( is_active_sidebar( 'about-philosophy' ) ) {
                        dynamic_sidebar( 'about-philosophy' );
                    }
                ?>

                <ul class="about__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                 <?php
                    if ( is_active_sidebar( 'social-icons' ) ) {
                        dynamic_sidebar( 'social-icons' );
                    }
                ?>

            </div> <!-- end about -->

        </div> <!-- end row -->

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3><?php _e( "Tags", "philosophy" );?></h3>
                <div class="tagcloud">
                <?php the_tags( "", "", "" );?>
                </div>
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">

                <div class="col-two md-four mob-full s-footer__sitelinks">

                    <h4><?php _e( "Quick Links", "philosophy" );?></h4> 

                    <?php
                        wp_nav_menu( [
                            'theme_location' => "footerleft",
                            'menu_id'        => "footerleft",
                            'menu_class'     => 's-footer__linklist',
                        ] );
                    ?>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">

                    <h4><?php _e( "Archives", "philosophy" );?></h4>

                    <?php
                        wp_nav_menu( [
                            'theme_location' => "footermiddle",
                            'menu_id'        => "footermiddle",
                            'menu_class'     => 's-footer__linklist',
                        ] );
                    ?>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">

                    <h4><?php _e( "Social", "philosophy" );?></h4>

                    <?php
                        wp_nav_menu( [
                            'theme_location' => "footerright",
                            'menu_id'        => "footerright",
                            'menu_class'     => 's-footer__linklist',
                        ] );
                    ?>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">

                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                            <input type="submit" name="subscribe" value="Send">

                            <label for="mc-email" class="subscribe-message"></label>

                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>Â© Copyright Philosophy 2018</span>
                        <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <?php wp_footer();?>

</body>

</html>