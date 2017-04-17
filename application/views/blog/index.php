<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Food Blog</title>
  </head>
  <body>
    <h1>Food Blog</h1>
    <?php foreach ($posts as $post) {?>
        <h3><?php echo $post['title']; ?></h3>
        by <?php echo $post['author']; ?>
        <br><br>
        <?php echo $post['content']; ?>
        <br><br>
    <?php } ;?>
  </body>
</html>
