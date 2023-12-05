<?php
/* Template Name: Service page Template */
get_header();
$services = get_field('service_section');
?>
<div class="section section-breadcrumb">
    <div class="wrapper wrapper-breadcrumb">
        <div class="breadcrumb">
            <div><a href="index.html">Главная &#8201;</a></div>
            &#8212;
            <span>&#8201; Услуги</span>
        </div>
    </div>
</div>
<div class="background-image-services">
    <div class="section section-services">
        <div class="wrapper wrapper-services">
            <div class="services-content">
                <div class="wrapper-info-text"> 
                    <?= $services['service_title'] ? $services['service_title'] : '';?>
                </div>
                <div class="wrapper-info-image">
                    <div class="image-plane">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute__image-bgc">
        <img src="<?= $services['service_bg'] ? $services['service_bg'] : '';?>" alt=""/>
    </div>
</div>

<div class="section section-blanks">
    <div class="wrapper wrapper-services">
        <?php 
        $blanks = $services['service_blanks'];
        foreach($blanks as $blank):
        ?>
        <div class="services-item">
        <div class="services-item-text">
                <?= $blank['service_blank_title'] ? $blank['service_blank_title'] : '';?>
                <p>
                <?= $blank['service_blank_desc'] ? $blank['service_blank_desc'] : '';?>
                </p>
            </div>
            <div class="header_line_services"></div>
            <div class="wrap-services-item-img">
                <div class="services-item-img">
                    <img src="<?= $blank['service_blank_image'] ? $blank['service_blank_image'] : '';?>"/>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <div class="services-item-text-after">
            <?php         
                $items = $services['service_content'];
            foreach($items as $item):?>
            <p>
                <?= $item['content'] ? $item['content'] : '';?>
            </p>
            <?php endforeach;?>    
        </div>
    </div>
</div>
<?php get_footer();?>