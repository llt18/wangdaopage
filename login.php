<!doctype html>
<html>
<head></head>
<body>
  <?php 
$username=$_POST["username"];
if(!isset($username)){
  echo "<script>alert('you dont enter username');</script>";
    
}
$password=$_POST["password"];
if(!isset($password)){
  echo "<script>alert('you dont enter password');</script>";
}_
     $host='localhost';
     $user='root';
     $pass='';
     $data='wangdaouser';
     $conn=new mysqli($host,$user,$pass,$data);
     if($conn->connect_error){
       die("mysql error!");
     }
     $sql="SELECT NAME,EMAIL,PASSWORD FROM WANGDAOUSER WHERE NAME=" .$username ."AND PASSWORD" . $password;
     $result=$conn->query($sql);
     if(!$result){
       echo "<script>alert('login error');</script>";
       $_POST["username"]='';
       $_POST["password"]=''; 
     }else{
       echo "login successly" ;
     }
?>


</body>
</html>
