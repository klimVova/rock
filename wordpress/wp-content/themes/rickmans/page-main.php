<?php
/* Template Name: Main page Template */
get_header();

$services = get_field('service_section');
$advantage = get_field('advantage_section');
$items = get_field('header');
$baner_mob = get_field('baner_mob', 'option');
?>
<div class="slider">
    <?php
        $images = $items['slider_images'];
        foreach($images as $image): ?>
            <img src="<?= $image['image'] ? $image['image'] : ''; ?>">
        <?php endforeach;?>    
    <div class="slider-text-position">
        <h1>
           <?= $items['title'] ? $items['title'] : '';?>
        </h1>
        <p>
        <?= $items['subtitle'] ? $items['subtitle'] : '';?>
        </p>
        <button><a href="<?= $items['link'] ? $items['link'] : '';?>"><?= $items['link_name'] ? $items['link_name'] : '';?></a></button>
    </div>
</div>

<div class="slider_mob" style="background-image: url('<?= $baner_mob['image'] ? $baner_mob['image'] : ''; ?>')">
    <div class="slider-text-position">
        <h1>
            <?= $items['title'] ? $items['title'] : '';?>
        </h1>
        <p>
            <?=$items['subtitle'] ? $items['subtitle'] : '';?>
        </p>
        <button><a href="<?= $items['link'] ? $items['link'] : '';?>"><?= $items['link_name'] ? $items['link_name'] : '';?></a></button>
    </div>
</div>
<div class="section section-services">
    <div class="wrapper wrapper-services">
        <div class="header-section">
            <h2><?= $services['service_title'] ? $services['service_title'] : ''; ?></h2>
            <div class="header_line"></div>
        </div>
        <div class="services_slider">
            <div class="block-services_slider">
                <div class="line-services_slider">
                    <?php 
                    $items = $services['service_items'];
                    foreach($items as $item): ?>
                    <div class="box-services_slide">
                        <p><?= $item['item'] ? $item['item'] : '';?></p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="dots-services_slider"></div>
        </div>
    </div>
</div>

<div class="section section-advance">
    <div class="wrapper wrapper-advance">
        <div class="header-section">
            <h2><?= $advantage['advantage_title'] ? $advantage['advantage_title'] : '';?></h2>
            <div class="header_line"></div>
        </div>
        <div class="advantages-items">
            <?php 
                  $items = $advantage['advantage_items'];
                  foreach($items as $item): ?>  
            <div class="advantages-container-item">
                <div class="advantages-container-item-text">
                    <h4><?= $item['item_title'] ? $item['item_title'] : '';?></h4>
                    <p>
                        <?= $item['item_description'] ? $item['item_description'] : '';?>
                    </p>
                </div>
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="136"
                        height="136"
                        viewBox="0 0 136 136"
                        fill="none"
                >
                    <path
                            d="M93.2451 42.245C94.4425 41.1051 96.0359 40.4749 97.6891 40.4874C99.3422 40.4999 100.926 41.1541 102.106 42.3121C103.286 43.47 103.97 45.041 104.014 46.6937C104.057 48.3463 103.457 49.9513 102.34 51.17L68.4251 93.585C67.8419 94.2131 67.1381 94.7172 66.3556 95.0671C65.5732 95.417 64.7282 95.6055 63.8712 95.6214C63.0143 95.6373 62.1629 95.4802 61.368 95.1595C60.5732 94.8388 59.8511 94.3611 59.2451 93.755L36.7541 71.264C36.1278 70.6804 35.6254 69.9766 35.277 69.1946C34.9285 68.4126 34.7412 67.5684 34.7261 66.7125C34.711 65.8565 34.8684 65.0062 35.1891 64.2124C35.5097 63.4186 35.9869 62.6975 36.5923 62.0922C37.1977 61.4868 37.9187 61.0096 38.7125 60.689C39.5063 60.3683 40.3566 60.2109 41.2126 60.226C42.0685 60.2411 42.9127 60.4284 43.6947 60.7769C44.4767 61.1253 45.1805 61.6277 45.7641 62.254L63.5631 80.0445L93.0836 42.432C93.1368 42.3666 93.1935 42.3041 93.2536 42.245H93.2451Z"
                            fill="#BCBCBC"
                            fill-opacity="0.3"
                    />
                </svg>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php get_footer();?>