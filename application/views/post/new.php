<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>New Post</title>
    </head>
    <body>
        <?php echo form_open('post/create'); ?>
            <label for='title'>Title</label>
            <input type='input' name='title'/><br />

            <label for='content'>Content</label><br />
            <textarea name='content'></textarea><br />

            <input type='submit' name='submit' value='create post' />
        </form>
    </body>
</html>
