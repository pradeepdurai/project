<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo doctype('html5') ?>
<html lang="en">
<?php $this->load->view('templates/includes/head');?>

<body>
    <?php $this->load->view('templates/includes/header'); ?>
    <?php $this->load->view($container); ?>
    <?php $this->load->view('templates/includes/footer'); ?>
    <?php $this->load->view('templates/includes/scripts'); ?>
</body>

</html>