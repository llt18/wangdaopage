<?php 
session_start();

?>
<!doctype html>
<html>
<head></head>
<body>
   <?php 
       
       $username=isset($_POST["username"]) ? $_POST["username"] : '';
       $password=isset($_POST["password"]) ? $_POST["password"] : '';
       $host='127.0.0.1';
       $user='root';
       $pass='';
       $data='WANGDAOUSER';
       $conn=new mysqli($host,$user,$pass,$data);
       if($conn->connect_error<0){
         die("connect error",$conn->connect_error);
       }
       $username=$conn->real_escape_string($username);
       //$password=$conn->real_escape_string($password);
       $sql="SELECT * FROM WANGDAOUSER WHERE NAME= '$username';";
       
       $result=$conn->query($sql);
       if($result->num_rows>0){
          $row=$result->fetch_assoc();
          if($username == $row['NAME'] && $password == $row['PASSWORD']){
            $_SESSION["islogin"]=false;
            $_SESSION["username"]=$username;$_SESSION["password"]=$password;
            echo "<script>alert('login successfuly');window.location.href='index.php';</script>";
          }else{
            $_SESSION["islogin"]=false;
          }
       }else{
         $_SESSION["islogin"]=false;
         
echo "<script>alert('login error!');
         history.back();</script>";
       }
       $conn->close();

?>

</body>
</html>
