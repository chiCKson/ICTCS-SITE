<?php
session_start();

require_once('../con/con.php'); 

function make_password_hashed($pass){
    return md5(sha1($pass));
}
if(isset($_SESSION['username'])){
    require_once('../admin/news.php'); 
}else{
    if(isset($_POST['username'])){
        $sql="select password from admin where username='".$_POST['username']."'";
        $password_hashed=make_password_hashed($_POST['password']);
        $db = new DB();
      
        $conn = $db->connect();
        $result=$db->get_data($conn,$sql);
        $row =mysqli_fetch_assoc($result);
        if($password_hashed==$row['password']){
            $_SESSION['username']=$_POST['username'];
            setcookie("username", $_POST['username'], time() + (86400 * 30), "/");
         
            require_once('../admin/news.php'); 
        }else{
            echo "passowrd wrong";
        }
        
        $db->disconnect($conn);
    }else{
        echo '<script>location.href = "../admin/signout.php"</script>';
    }
    
}

?>

