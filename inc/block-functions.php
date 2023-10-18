<?php

function hero($heading) {
    ob_start();

    ?>
    <section class="hero bg-white py-20">
        <div class="module-container h-full">
            <div class="h-full flex items-center">
                <div class="cms-content w-6/12 text-left">
                    <h1><?php echo esc_html($heading); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();
}