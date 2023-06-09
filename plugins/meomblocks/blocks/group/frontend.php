<?php

namespace MEOM\Blocks;

// Adds all the default attributes like `className` or `align`.
// We add our block default class `group`.
$wrapper_attributes = get_block_wrapper_attributes( [ 'class' => 'group width-full module-top-margin ' ] );

if ( ! $content ) :
    return;
endif;
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore ?>>
    <?php echo do_blocks( $content ); // phpcs:ignore ?>
</div>
