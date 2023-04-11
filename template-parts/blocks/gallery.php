<?php
$images             = get_field('gallery_images');
$columns            = get_field('columns');
$bg_color           = get_field('block_background_colour');
$image_sizing       = get_field('image_sizing');
$column_classes     = 'col-12';
$column_count       = 'count-1';

// Column logic
switch ($columns) {
    case '2':
        $column_classes     = 'col-12 col-md-6';
        $column_count       = 'count-2';
        break;
    case '3':
        $column_classes     = 'col-12 col-md-6 col-lg-4';
        $column_count       = 'count-3';
        break;
    case '4':
        $column_classes     = 'col-12 col-md-6 col-lg-3';
        $column_count       = 'count-4';
        break;
    case '6':
        $column_classes     = 'col-12 col-md-6 col-lg-4 col-xl-2';
        $column_count       = 'count-6';
        break;
}

if ($images) { ?>

    <section class="block gallery-block <?php echo $bg_color; ?> <?php echo $column_count; ?>">

        <?php
        // Block Header
        get_template_part('template-parts/components/block-header'); ?>

        <div class="container">
            <div class="row">

                <?php foreach( $images as $image_url ): ?>

                    <div class="<?php echo $column_classes; ?>">
                        <a href="<?php echo esc_url($image_url); ?>" class="foobox" rel="gallery">
                            <div class="image-container">
                                <div class="image" style="background-image: url('<?php echo $image_url; ?>'); background-size: <?php echo $image_sizing; ?>"></div>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php } ?>