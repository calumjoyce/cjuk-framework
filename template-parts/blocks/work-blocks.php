<?php 

?>

<section class="work-blocks">
    <div class="module-container">
        <div class="grid lg:grid-cols-4">
            <?php 
                while( have_rows('work_item') ) : the_row();

                $background_image = get_sub_field('background_image');
                $company_name = get_sub_field('company_name');
                $link = get_sub_field('link');
                $background_colour = get_sub_field('background_colour');

                ?>

                    <div class="h-[500px]" style="background-color: <?php echo $background_colour; ?>">
                        <p><?php echo $company_name; ?></p>
                    </div>

                <?php 

                endwhile;
            ?>
        </div>
    </div>
</section>