<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
    </head>
    <body>
        <?php echo (isset($error) ? $error : "") ; ?>
        <?php echo form_open('admin/checkDatabase'); ?><br>
            <label for='username'>Username</label>
            <input type='input' name='username'/><br>

            <label for'password'>Password</label>
            <input type='password' name='password'/><br>
            <input type='submit' name'submit' value='submit'/>
        </form>
    </body>
</html>
