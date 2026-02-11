<?php 
error_reporting(E_ALL);
ini_set("display_errors",1);

session_start();
       $username=isset($_POST["username"]) ? $_POST["username"] : '';
       $password=isset($_POST["password"]) ? $_POST["password"] : '';
       $host='127.0.0.1';
       $user='wangdao';
       $pass='wangdao123';
       $data='WANGDAOPAGE';
       $conn=new mysqli($host,$user,$pass,$data);
       if($conn->connect_error){
         die("connect error" . $conn->connect_error);
       }
       $username=$conn->real_escape_string($username);
       $password=$conn->real_escape_string($password);
       $sql="SELECT * FROM WANGDAOUSER WHERE NAME= '$username' AND PASSWORD= '$password' ;";
       
       $result=$conn->query($sql);
       if($result->num_rows>0){
          $row=$result->fetch_assoc();
          $_SESSION["username"]=$row["NAME"];$_SESSION["islogin"]=true;header("Location: index.php");exit;
       }else{
       $_SESSION["islogin"]=false;
    
       header("Location: login.php");
      exit;
}
       $conn->close();

?>


