<?php
/* Template Name: Contact page Template */
get_header();
$contacts = get_field('contact_section');
$address = $contacts['contact_adress'];
$items = $contacts['contact'];
?>

<div class="section section-breadcrumb">
<?php get_template_part('tmp/breadcrumbs'); ?>
</div>


<div class="section section-info">
    <div class="wrapper wrapper-info">
        <div class="info-content">
            <div class="background-image" style="background-image: url('<?= $contacts['contact_bg1'] ? $contacts['contact_bg1'] : '' ;?>')">
                <div class="wrapper-info-text">
                    <p> <?= $contacts['contact_title'] ? $contacts['contact_title'] : '' ;?></p>
                    <?= $contacts['contact_desc'] ? $contacts['contact_desc'] : '' ;?>
                    <div class="contact-image-plane">
                        <img src="<?= $contacts['contact_bg2'] ? $contacts['contact_bg2'] : '' ;?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-address">
    <div class="wrapper wrapper-address">
        <div class="header-section">
            <h2><?= $address['title'] ? $address['title'] : '';?></h2>
            <div class="header_line"></div>
        </div>
        <div class="address-text-container">
            <div><b>RICKMANS</b></div>
            <p> <h2><?= $address['adress'] ? $address['adress'] : '';?></h2> </p>
        </div>
        <?= $address['map'] ? $address['map'] : '';?>
    </div>
</div>

<div class="section section-contact">
    <div class="wrapper wrapper-contact">
        <div class="header-section">
            <h2> <?= $items['title'] ? $items['title'] : '';?></h2>
            <div class="header_line"></div>
        </div>
        <div class="contact-text-container">
            <?php
                $persons = $items['person_contact'];
                foreach($persons as $person): ?>
            <div class="contact-name">
                <b><?= $person['position'] ? $person['position'] : '';?></b>
            </div>
            <div class="contact-numbers">
                <div> <?= $person['name'] ? $person['name'] : '';?></div>
                <div><?= $person['phone'] ? $person['phone'] : '';?></div>
                <div> <?= $person['email'] ? $person['email'] : '';?></div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>


<?php get_footer();?>