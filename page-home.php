<?php

// Template Name: Home

get_header();

$perk_1_title = get_field('perk_1_title');
$perk_2_title = get_field('perk_2_title');
$perk_3_title = get_field('perk_3_title');
$perk_1_picture = get_field('perk_1_picture');
$perk_2_picture = get_field('perk_2_picture');
$perk_3_picture = get_field('perk_3_picture');
$perk_1_description = get_field('perk_1_description');
$perk_2_description = get_field('perk_2_description');
$perk_3_description = get_field('perk_3_description');

$cta_title = get_field('cta_title');
$cta_button = get_field('cta_button');

$feature_title_1 = get_field('feature_title_1');
$feature_title_2 = get_field('feature_title_2');
$feature_title_3 = get_field('feature_title_3');
$feature_title_4 = get_field('feature_title_4');
$feature_title_5 = get_field('feature_title_5');
$feature_title_6 = get_field('feature_title_6');
$feature_text_1 = get_field('feature_text_1');
$feature_text_2 = get_field('feature_text_2');
$feature_text_3 = get_field('feature_text_3');
$feature_text_4 = get_field('feature_text_4');
$feature_text_5 = get_field('feature_text_5');
$feature_text_6 = get_field('feature_text_6');
$feature_image = get_field('feature_image');
?>



<section id="home-section-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-box">
                    <h1 class="text-left"><?php bloginfo('name'); ?></h1>
                    <p class="text-left"><?php bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="perks-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="<?php echo $perk_1_picture; ?>"></i>   
                <?php echo $perk_1_title; ?>
                <?php echo $perk_1_description ?>
            </div>
            <div class="col-md-4">
                <i class="<?php echo $perk_2_picture; ?>"></i>
                <?php echo $perk_2_title; ?>
                <?php echo $perk_2_description ?>
            </div>
            <div class="col-md-4">
                <i class="<?php echo $perk_3_picture; ?>"></i>
                <?php echo $perk_3_title; ?>
                <?php echo $perk_3_description ?>
            </div>
        </div>
    </div>
</section>

<section id="feature-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h3><u><strong><?php echo $feature_title_1; ?></strong></u></h3>
                <p><?php echo $feature_text_1; ?></p>
                <h3><u><strong><?php echo $feature_title_2; ?></strong></u></h3>
                <p><?php echo $feature_text_2; ?></p>
                <h3><u><strong><?php echo $feature_title_3; ?></strong></u></h3>
                <p><?php echo $feature_text_3; ?></p>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo $feature_image; ?>" alt="Feature Image">
            </div>
            <div class="col-12 col-md-3">
                <h3><u><strong><?php echo $feature_title_4; ?></strong></u></h3>
                <p><?php echo $feature_text_4; ?></p>
                <h3><u><strong><?php echo $feature_title_5; ?></strong></u></h3>
                <p><?php echo $feature_text_5; ?></p>
                <h3><u><strong><?php echo $feature_title_6; ?></strong></u></h3>
                <p><?php echo $feature_text_6; ?></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6"></div>
            <div class="col-12 col-md-6"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>