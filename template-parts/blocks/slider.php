<?php
$block_layout       = get_field('block_layout');
$show_controls      = get_field('show_controls');
$bg_color           = get_field('block_background_colour');
$container          = get_field('block_width') ? 'container-fluid' : 'container';

if ( have_rows('slides') ) { ?>

    <section class="block slider-block <?php echo $bg_color; ?> <?php echo $block_layout; ?>">

        <?php
        // Block Header
        get_template_part('template-parts/components/block-header'); ?>

        <div class="<?php echo $container; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="slider">

                        <?php while( have_rows('slides') ) { the_row();
                            $image      = get_sub_field('image');
                            $content    = get_sub_field('content');
                            $link       = get_sub_field('link'); ?>

                            <div class="slide">
                                <div class="slide-image" style="background-image: url('<?php echo $image; ?>');" ></div>
                                <div class="slide-caption-container">
                                    <div class="slide-caption">
                                        <?php print_r( $content ); ?>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php } ?>
