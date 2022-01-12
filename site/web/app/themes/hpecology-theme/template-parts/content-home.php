<?php

    $banner = get_field('banner');


    $cv = get_field('cv_url');
?>

<section class="hero jarallax">
    <img <? acf_responsive_img($banner['image']['id'], 'large', '1500px'); ?> alt="" class="jarallax-img bg-img">
    <div class="wrap flex align-center justify-center text-center h-full">
        <div class="text-white">
            <h1 class="text-head mb-1">Hannah Phillips</h1>
            <p class="text-xl">
                Ecologist
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
            <h3 class=" mb-4 font-extralight">
                Motivation<span class="text-primary">.</span>
            </h3>
            <p class="fade fade-in swipe-right trans"><strong>Ecologist, activist, volunteer coordinator and conservationist.</strong></p>
           <p class="fade fade-in swipe-right trans">
               An advocate for environmental issues across the ecological spectrum, Hannah has a particular interest in ornithological issues around her home in the South West.
           </p>
           <p class="fade fade-in swipe-right trans">
               Hannah is currently researching the impact of agricultural practices on farmland birds in Gloucestershire.
            </p>
            <p class="fade fade-in swipe-right trans">
                This research is being conducted for the British Trust of Ornithology as part of an <em>Msc in Applied Ecology from the University of Gloucestershire.</em>
            </p>
        </div>
    </div>
</section>
<section class="bg-grey">
    <div class="wrap-tight">
        <h3 class=" mb-4 font-extralight">
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
                <ul class="list-checkmark pr-4 fade-stagger" >
                    <li  class="fade fade-in trans swipe-right">
                        <i class="fa fa-search"></i><span class="block"><span class="font-semibold">NVC training in Woodland Plant Identification and Surveying</span> - Species Recovery Trust</span>
                    </li>
                    <li class="fade fade-in trans swipe-right">
                        <i class="fa fa-search"></i><span class="block"><span class="font-semibold">UK Tree Identification</span> - Course with Avon Wildlife Trust</span>
                    </li>
                    <li  class="fade fade-in trans swipe-right">
                        <i class="fa fa-feather"></i><span class="block"><span class="font-semibold">Winter Bird Identification</span> - Course with Avon Wildlife Trust</span>
                    </li>
                    <li class="fade fade-in trans swipe-right">
                        <i class="fa fa-feather"></i><span class="block"><span class="font-semibold">Winter Bird Identification</span> -  Course with Avon Wildlife Trust</span>
                    </li>
                </ul>
            </div>
            <div class="flex-1  fade-stagger">
                <ul class="list-checkmark mb-4">
                    <li class="fade fade-in trans swipe-right">
                        <i class="fa fa-id-card"></i><span class="block"><span class="font-semibold">Clean UK Driving License</span></span>
                    </li>
                       <li class="fade fade-in trans swipe-right">
                        <i class="fa fa-first-aid"></i><span class="block"><span class="font-semibold">First Aid at Work Training</span> - Valid until Jan 2023</span>
                    </li>
                    <li class="fade fade-in trans swipe-right">
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
                <h3 class=" mb-2 font-extralight">
                    Background<span class="text-primary">.</span>
                </h3>

                <p class="">
                    Previously a stage manager at major regional theatres including The Manchester Royal Exchange and The Tabacco Factory in Bristol, Hannah is a highly organised indvidual and proven team player.
                </p>
                <p class="">
                    Since then Hannah has turned what she felt was an urgent need to protect ecological systems into a career.
                </p>
                <p class="">
                    On any given day (or night!) you can find her conducting overnight bat surveys, protecting local badger species, coordinating volenteers for the brilliant tree planting  charity Avon Needs Trees (planting too!) or working on her research for British Trust of Ornithology.
                </p>
            </div>
            <div class="flex-1">
                <img <? acf_responsive_img($about['id'], 'medium', '500px'); ?> alt="" srcset="">
            </div>
        </div>
    </div>
</section>