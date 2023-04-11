<?php
$show_controls      = get_field('show_controls');
$bg_color           = get_field('block_background_colour');

if ( have_rows('slides') ) { ?>

    <section class="block slider-block <?php echo $bg_color; ?>">

        <?php
        // Block Header
        get_template_part('template-parts/components/block-header'); ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-slider">

                        <?php while( have_rows('slides') ) { the_row();
                            $image      = get_sub_field('image');
                            $content    = get_sub_field('content');
                            $link       = get_sub_field('link'); ?>

                            <div class="carousel-item">
                                <div class="carousel-image" style="background-image: url('<?php echo $image; ?>');" ></div>
                                <div class="carousel-caption-container">
                                    <div class="carousel-caption">
                                        <?php print_r( $content ); ?>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>

                    <?php if ( $show_controls ) { ?>

                        Controls

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

<?php } ?>