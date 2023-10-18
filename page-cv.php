<?php 

    get_header();

    $heading = get_the_title();
    echo hero($heading);

    // Variables
    $image = get_field('image');
?>

<section class="bg-white border-t-gray-200 border-t-2 py-16">
    <div class="module-container">
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

                                <li>
                                    <a href="#<?php echo str_replace(' ', '-', strtolower($label)); ?>"><?php echo $label; ?></a>
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

                        <div id="<?php echo str_replace(' ', '-', strtolower($company_name)); ?>" class="cms-content border-b-2 border-b-gray-200 py-10">
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
