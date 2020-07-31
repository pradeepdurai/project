<?php if (!empty($styles) && count($styles) > 0): ?>
        <?php foreach ($styles as $style): ?>
            <?php if (!empty($style) && file_exists($style)): ?>
                <?php echo link_tag($style); ?>
            <?php endif;?>
        <?php endforeach;?>
    <?php endif;?>