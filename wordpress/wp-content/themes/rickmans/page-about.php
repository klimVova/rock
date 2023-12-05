<?php
/* Template Name: About page Template */
get_header();
$info = get_field('info_section');
$about = get_field('about_section');
?>
<div class="section section-breadcrumb">
    <div class="wrapper wrapper-breadcrumb">
        <div class="breadcrumb">
            <div><a href="index.html">Главная &#8201;</a></div>
            &#8212;
            <span>&#8201; О компании</span>
        </div>
    </div>
</div>

<div class="section section-info">
    <div class="wrapper wrapper-info">
        <div class="info-content">
            <div class="background-image" style="background-image: url('<?= $info['info_map'] ? $info['info_map'] : '' ;?>')">
                <div class="wrapper-info-text">
                    <p><?= $info['info_title'] ? $info['info_title'] : '' ;?></p>
                    <span
                    ><?= $info['info_dessc'] ? $info['info_dessc'] : '' ;?></span
                    >
                </div>
                <div class="wrapper-info-image">
                    <div class="info-image-logo">
                        <img src="<?= $info['info_bg_1'] ? $info['info_bg_1'] : '' ;?>" alt=""/>
                    </div>
                    <div class="info-image-car">
                        <img src="<?= $info['info_bg_2'] ? $info['info_bg_2'] : '' ;?>" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-about">
    <div class="wrapper wrapper-about">
        <div class="about-information">
            <div class="header-section">
                <h2> <?= $about['about_title'] ? $about['about_title'] : '' ;?></h2>
                <div class="header_line"></div>
            </div>
            <div class="about-information-text">
            <?= $about['about_desc'] ? $about['about_desc'] : '' ;?>
            </div>
            <div class="about-information-target">
                <p> <?= $about['about_target_title'] ? $about['about_target_title'] : '' ;?></p>
                <span>
                <?= $about['about_target_desc'] ? $about['about_target_desc'] : '' ;?>
                </span>
            </div>
            <?php 
                $items = $about['about_text'];
                foreach($items as $item): ?>
            <div class="about-information-text">
                <?= $item['text'] ? $item['text'] : '' ;?>        
            </div>
            <?php endforeach;
                $link = $about['about_link'];
            ?>
            <button><a href="<?= $link['link'] ? $link['link'] : '' ;?>"><?= $link['title_link'] ? $link['title_link'] : '' ;?></a></button>
        </div>
    </div>
</div>

<?php get_footer();?>