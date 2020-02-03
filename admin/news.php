<script>
      function signout(){
        location.href = "../admin/signout.php";
    }

    </script>
<?php
if(!isset($_SESSION['username'])){
    echo "<script>signout();</script>";
}
include_once('../con/con.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news add</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="author" placeholder="Author"><br>
        <input type="text" name="image" placeholder="image name"><br>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="content"></textarea><br>
        <textarea name="short" id="short" cols="30" rows="10" placeholder="short description"></textarea><br>
        <input type="text" name="keywords" placeholder="keywords separate by ;"><br>
        <input type="submit">
        <button class="btn btn-lg btn-secondary btn-block"  type="button" onclick="signout()">Sign out</button>
    </form>
   
</body>
</html>
<?php
 if(isset($_POST['title'])){
     $db=new DB();
     $conn = $db->connect();
     $sql="insert into news(imgurl,content,title,author,keywords,short) values('".$_POST['image']."','".$_POST['content']."','".$_POST['title']."','".$_POST['author']."','".$_POST['keywords']."','".$_POST['short']."')";
     if($db->set_data($conn,$sql)){
         echo "successful";
     }else{
        echo "error".mysqli_error($conn);
     }
     $db->disconnect($conn);

 }
 
?>