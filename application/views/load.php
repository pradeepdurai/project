<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 

    $this->load->view('includes/head');
    $this->load->view('includes/header');
    $this->load->view($view);
    $this->load->view('includes/footer');
    
    ?>
</body>
</html>