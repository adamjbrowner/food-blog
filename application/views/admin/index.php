<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
    </head>
    <body>
        Welcome, <?php echo $username; ?><br />
        <?php echo form_open('post/new') ?>
        <a title='new post' href='<?php echo base_url('post/new'); ?>'>New post</a>
    </body>
</html>
