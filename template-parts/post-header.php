<?php
global $post;
$id             = $post->ID;
$title          = get_the_title();
$artwork_image  = get_field('artwork_image')['sizes']['large'];
$date_created   = get_field('date_created'); ?>

<div class="post-header artwork">
    <div class="container">

        <!-- Image -->
        <div class="row">
            <div class="col-12">
                <div class="post-image">
                    <img src="<?php echo $artwork_image; ?>" alt="<?php echo $title; ?>">
                </div>
            </div>
        </div>

        <!-- Information -->
        <div class="row">

            <!-- Title & date -->
            <div class="col-12 col-md-4">
                <h2><?php echo $title; ?></h2>
                <h5><?php echo $date_created; ?></h5>
            </div>

            <!-- Media -->
            <div class="col-12 col-md-4">
                <?php if( have_rows('media_used') ) {
                    while (have_rows('media_used')) { the_row();
                        $medium = get_sub_field('medium'); ?>

                        <h6><?php echo $medium; ?></h6>
                    <?php }
                } ?>
            </div>

            <!-- Information -->
            <div class="col-12 col-md-4">
                <?php if( have_rows('references') ) {
                    while (have_rows('references')) { the_row();
                        $reference  = get_sub_field('reference');
                        $link       = get_sub_field('link');

                        if ($link != '') { ?><a href="<?php echo $link; ?>"><?php } ?>
                            <h6><?php echo $reference; ?></h6>
                        <?php if ($link != '') { ?></a><?php }
                    }
                } ?>
            </div>

        </div>
    </div>
</div>