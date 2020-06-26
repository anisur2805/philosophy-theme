<a class="header__search-trigger" href="#0"></a>

    <div class="header__search">

        <form role="search" method="get" class="header__search-form" action="#">
            <label>
                <span class="hide-content"><?php _e('Search for:', 'philosophy'); ?></span>
                <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>

        <a href="#0" title="Close Search" class="header__overlay-close"><?php _e('Close', 'philosophy'); ?></a>

    </div>  <!-- end header__search -->


    <a class="header__toggle-menu" href="#0" title="Menu"><span><?php _e('Menu', 'philosophy'); ?></span></a>

    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Site Navigation</h2>

        <?php

            wp_nav_menu( [
                'theme_location' => "topmenu",
                'menu_id'        => "topmenu",
                'menu_class'     => 'header__nav' 
            ] ); 


            // add has-children class with PHP
            // $philosophy_menu = wp_nav_menu( [
            //     'theme_location' => "topmenu",
            //     'menu_id'        => "topmenu",
            //     'menu_class'     => 'header__nav',
            //     'echo' => false
            // ] );
            // $philosophy_menu = str_replace('menu-item-has-children', 'menu-item-has-children has-children', $philosophy_menu);
            // echo $philosophy_menu;
            
        ?>

        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php _e('Close', 'philosophy'); ?></a>

    </nav> <!-- end header__nav-wrap -->