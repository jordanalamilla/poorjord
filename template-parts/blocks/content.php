<?php
$content = get_field('content');
$bg_color   = get_field('block_background_colour');

if ($content) { ?>

    <section class="block content-block <?php echo $bg_color; ?>">

        <?php
        // Block Header
        get_template_part('template-parts/components/block-header'); ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-container">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php } ?>