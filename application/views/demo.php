<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo base_url();?>
    <a href="<?php echo site_url('abouts');?>">about</a>
    <?php echo anchor('demos/about','About us', 'title="about our company"')?>
</body>
</html>