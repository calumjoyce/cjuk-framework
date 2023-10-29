<?php 

    get_header();

    $heading = get_the_title();
    echo hero($heading);

    // Variables
    $image = get_field('image');
?>

<section class="bg-white border-t-gray-200 border-t-2 py-16">
    <div class="max-w-[1280px] mx-auto w-full">
        <div class="flex gap-8">
            <div class="w-3/12">
                <div class="[&_img]:h-[300px] [&_img]:w-[300px] [&_img]:rounded-full">
                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                </div>
                <div class="bg-white rounded-xl p-8 mt-8 sticky top-10 border-salix border-2 max-w-[300px]">
                    <ul class="flex flex-col gap-2">
                        <?php 
                            while( have_rows('job') ) : the_row();

                            $label = get_sub_field('company_name');
                            ?>

                                <li class="[&.cv-row-active>a>svg]:opacity-100 [&.cv-row-active>a>svg]:left-0">
                                    <a class="flex items-center justify-between" href="#<?php echo str_replace(' ', '-', strtolower($label)); ?>" data-section="<?php echo str_replace(' ', '-', strtolower($label)); ?>">
                                        <span><?php echo $label; ?></span>
                                        <svg class="left-[-5px] transition-all opacity-0" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                                            <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                                        </svg>
                                    </a>
                                </li>

                            <?php
                            endwhile;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="w-9/12">
                <?php 
                    while( have_rows('job') ) : the_row();

                    $company_name = get_sub_field('company_name');
                    $years_active = get_sub_field('years_active');
                    $job_summary = get_sub_field('job_summary');
                    ?>

                        <div id="<?php echo str_replace(' ', '-', strtolower($company_name)); ?>" class="cv-row min-h-[50vh] cms-content border-b-2 border-b-gray-200 py-10">
                            <div class="mb-2 text-left">
                                <h3 class="text-[30px]"><?php echo $company_name; ?></h3>
                                <p class="font-light"><?php echo $years_active; ?></p>
                            </div>
                            <div class="">
                                <?php echo $job_summary; ?>
                            </div>
                        </div>

                    <?php
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
