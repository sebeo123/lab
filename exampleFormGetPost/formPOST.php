<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - xử lý form với GET</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Cổng đăng ký thông tin đăng nhập</h1>
        <form method="post" action="1.php">
            <input type="text" name="username" value="" placeholder="đăng nhập"/><br/> <br/>
            <input type="post" name="password" value="" placeholder="mật khẩu"/><br/> <br/>
            <input type="submit" name="btn" value="đăng nhập">
        </form>
        <?php
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if(!$password || !$username){
            echo 'bạn đăng nhập chưa đủ thông tin';
        }else if($password != 'admin' || $username != 'admin'){
            echo 'thông tin đăng nhập bị sai';
        }else{
            echo 'đăng nhập thành công!';
        }
        ?>
    </body>
</html>