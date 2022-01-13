<?php

    $banner = get_field('banner');


    $cv = get_field('cv_url');
?>

<section class="hero jarallax">
    <img <? acf_responsive_img($banner['image']['id'], 'large', '1500px'); ?> alt="" class="jarallax-img bg-img">
    <div class="wrap flex align-center justify-center text-center h-full">
        <div class="text-white">
            <h1 class="text-head mb-1 font-normal font-secondary">Hannah Phillips</h1>
            <p class="text-xl">
                <?= esc_html($banner['content']);?>
            </p>     
        </div>
    </div>
</section>
<?php

    $profile = get_field('profile_image');

?>
<section class="bg-secondary home__intro">
    <div class=" wrap row-l align-center ">
        <div class="flex-1 gutter fade fade-in trans">
            <img <? acf_responsive_img($profile['id'], 'medium', '500px') ?> alt="" srcset="" class="home__profile gutter" >
        </div>
        <div class="flex-1 fade fade-in  trans fade-stagger ">
            <?= wp_kses(get_field('motivation'), true ); ?>
        </div>
    </div>
</section>
<section class="bg-grey">
    <div class="wrap-tight">
        <h3 class=" mb-2 font-extralight">
            Afffiliated Organisations<span class="text-primary">.</span>
        </h3>
        <ul class="grid-logo  fade-stagger mb-4">
        <?php while(have_rows('logos_repeater')) : the_row('logos_repeater'); ?>
        
            <?php
                $logo = get_sub_field('image');
                $name = get_sub_field('name');

            ?>
            <li class="fade fade-in trans ">
                <img src="<?= esc_url($logo['sizes']['medium']); ?>" alt="">
            </li>
        <?php endwhile ; ?>
        </ul>
        <div class="flex">
            <a href="<?= esc_url($cv); ?>" target="_blank"  class="link-primary ml-auto">Find out how <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="wrap">
        <h3 class="text-white mb-4 font-extralight">
            Qualifications & Training<span class="text-secondary">.</span>
        </h3>
        <ul class="text-white row-m">
            <div class="flex-1 ">
                <ul class="list-checkmark pr-4" >
                    <li  class="">
                        <i class="fa fa-search"></i><span class="block"><span class="font-semibold">NVC training in Woodland Plant Identification and Surveying</span> - Species Recovery Trust</span>
                    </li>
                    <li class="">
                        <i class="fa fa-search"></i><span class="block"><span class="font-semibold">UK Tree Identification</span> - Course with Avon Wildlife Trust</span>
                    </li>
                    <li  class="">
                        <i class="fa fa-feather"></i><span class="block"><span class="font-semibold">Winter Bird Identification</span> - Course with Avon Wildlife Trust</span>
                    </li>
                    <li class="">
                        <i class="fa fa-feather"></i><span class="block"><span class="font-semibold">Bird Ringing Licence (In progress)</span> - British Trust of Ornothology, Due to complete Feb 2022</span>
                    </li>
                </ul>
            </div>
            <div class="flex-1 ">
                <ul class="list-checkmark mb-4">
                    <li class="">
                        <i class="fa fa-id-card"></i><span class="block"><span class="font-semibold">Clean UK Driving License</span></span>
                    </li>
                       <li class="">
                        <i class="fa fa-first-aid"></i><span class="block"><span class="font-semibold">First Aid at Work Training</span> - Valid until Jan 2023</span>
                    </li>
                    <li class="">
                        <i class="fa fa-first-aid"></i><span class="block"><span class="font-semibold">Outdoor Risks First Aid Training</span> - Valid until June 2022</span>
                    </li>
                </ul>
                <div class="fade fade-in swiper-right trans"><a href="<?= esc_url($cv) ?>" target="_blank" class="link-primary">Download CV <i class="fa fa-chevron-right"></i></a></div>
            </div>
        </ul>
    </div>
</section>
<?php
    $about = get_field('about_image');
?>
<section class="bg-grey">
    <div class="wrap">
        <div class="row-m">
            <div class="flex-2 pr-4">
                <?= wp_kses(get_field('background'), true); ?>
            </div>
            <div class="flex-1">
                <img <? acf_responsive_img($about['id'], 'medium', '500px'); ?> alt="" srcset="">
            </div>
        </div>
    </div>
</section>