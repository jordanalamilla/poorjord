<?php
$title      = get_field('block_title');
$subtitle   = get_field('block_subtitle');

if ( $title || $subtitle ) { ?>

    <div class="block-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-title">
                        <h2><?php echo $title; ?></h2>
                    </div>

                    <div class="block-subtitle">
                        <p><?php echo $subtitle; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>