<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!empty($scripts) && count($scripts) > 0) : ?>
    <?php foreach ($scripts as $script) : ?>
        <?php if (!empty($script) && file_exists($script)) : ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>