<?php
require_once('../con/con.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Register</title>
    <link rel="icon" 
      type="image/png" 
      href="/img/twists.png">
</head>
<body>
    <form action="../admin/admin-reg.php" method="POST"> 
    <input type="text" name="username" class="form-control" placeholder="username">
    <input type="password" name="password" class="form-control" placeholder="password">
    <input type="password" name="confirmpasswors" class="form-control" placeholder="password">
    <input type="submit" value="Login" class="btn float-right login_btn">
    </form>
    <?php
    if($_POST['password']==$_POST['confirmpasswors'])
        $hashedpw=make_password_hashed($_POST['password']);
        $sql="insert into admin(username,password) values('".$_POST['username']."','".$hashedpw."')";
        $db = new DB();
        $conn = $db->connect();
        $db->set_data($conn,$sql);
        function make_password_hashed($pass){
            return md5(sha1($pass));
        }
    ?>
</body>
</html>