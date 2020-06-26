<?php
// Template Name: Contact Us
the_post();
get_header();?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title();?>
                </h1>
            </div> <!-- end s-content__header -->

            <div class="col-full s-content__main">

            <?php
                if ( is_active_sidebar( 'contact-maps' ) ): ?>

                <?php
                dynamic_sidebar( 'contact-maps' ); 
                endif;
            ?>


               <?php the_content();?>

                <div class="row block-1-2 block-tab-full">
                <?php
                    if ( is_active_sidebar( 'contact-info' ) ): ?>

                    <?php
                    dynamic_sidebar( 'contact-info' ); 
                    endif;
                ?>
               </div>

               <h3><?php _e("Say Hello.", "philosophy"); ?></h3>

               <?php 
                echo do_shortcode(get_field('contact_form_shortcode'));
               ?>

            </div> <!-- end s-content__main -->

        </article>

    </section> <!-- s-content -->


<?php get_footer();?>