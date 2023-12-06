<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700;900&family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <?php wp_head(); ?>
    <title>Главная</title>
</head>
<body>
<?php 
$lists = get_field('mobile_menu', 'option');
$baner_mob = get_field('baner_mob', 'option');

?>
<header class="header-mob">
    <div class="section section-header">
        <div class="wrapper wrapper-header">
            <div class="wrap-header_mob">
                <div class="header_mob-main">
                    <?php the_custom_logo();?>
                    <div class="button_open">
                        <img src="<?= $lists['open_men'] ? $lists['open_men'] : ''; ?>">
                    </div>
                    <div class="button_close">
                    <img src="<?= $lists['close_menu'] ? $lists['close_menu'] : ''; ?>">
                    </div>
                </div>
                <div class="header_mob__ul">
                        <?php
                            wp_nav_menu([
                            'theme_location' => 'menu-mob',
                            'container' => 'div',
                            'container_class' => 'ul_links',
                            'menu_class' => 'ul_links',
                        ]);?>
                    <div class="lang">
                    <?php
                  if (is_active_sidebar('rickmans-lang-mob')) {
        dynamic_sidebar('rickmans-lang-mob');
      }
      ?>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="header-pk">
    <div class="section section-header">
        <div class="wrapper wrapper-header">
            <div class="header-block">
                <div class="header-block-container">
                    <div class="header-info">
                        <div class="logo">
                        <?php the_custom_logo();?>
                        </div>
                        <div class="info">
                            <div class="e-mail">
                            <?php
                                if (is_active_sidebar('rickmans-email')) {
                                dynamic_sidebar('rickmans-email');}?>
                            </div>
                            <div class="phone-number">
                            <?php
                                if (is_active_sidebar('rickmans-tel')) {
                                dynamic_sidebar('rickmans-tel');}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-background">
                <nav class="menu">
                <?php
                wp_nav_menu([
                'theme_location' => 'menu-background',
                'container' => 'ul',
                'menu_class' => 'menu-main',
                ]);?>
                </nav>
                <?php
                    if (is_active_sidebar('rickmans-lang')) {
                    dynamic_sidebar('rickmans-lang');
                    }
                    ?>
            </div>
        </div>
    </div>
</header>



