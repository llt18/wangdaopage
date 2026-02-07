<!DOCTYPE html>
<html>
<head>
  <style>
    *{
      
      padding:0;
      margin:0;
      
}
    body{
      background-color:#FFFFF0;
}
    li{
      list-style:none;
}
    .topdiv {
      position: relative;
      width:75%;
      height:50px;
      background-color:white;
      display:flex;
      justify-content:center;
      margin:0 auto;
      border-radius:10px;
}  
     .topdiv ul li {
         
        float:left;
        margin-left:10px;      
}
    .topdiv ul{
      display:flex;
      justify-content:center;
      align-items:center;
      
}
     .topdiv ul li {
        font-size:25px;
        
        
}
      .topdiv ul li a{
        text-decoration:none;
        
}    
      .logindiv{
         
        width:100px;
        height:50px;
        display:flex;
        position:absolute;
        right:15px;
         
          
}
        .logodiv{
            position:fixed;
            height:50px;
            width:100px;
            background-color:red;
}
         .userheaddiv{
            position:fixed;
            height:50px;
            width:125px;
            background-color:red;
            right:0px;
            top:0px;
}
          .userheaddiv ul{
              display:flex;
              justify-content:center;
}
          .userheaddiv ul li{
            float:left;
            margin-left:5px;
}

.worddiv {
   width:600px;
   height:450px;
   background-color:white; 
   margin:20px auto;
   
}

</style>
  <title>wangdaopage</title>
  <meta charset="utf-8">
</head>

<body>
  <div class="logodiv">
    <p>logo</p>  
</div>
  <div class="topdiv">
    <ul>
    <li> <a href="#">首页</a></li>
    <li><a href="#">学校新闻</a></li>
    <li><a href="#">教师名片</a></li>
    <li><a href="#">学习论坛</a><li>
   </ul> 
  
<div class="logindiv" >
  <ul>
    <li><button style="width:50px" onclick="alert('测试');">登陆</button></li>
    <a href="#" style="font-size:10px;">还没账号?点我注册</a>
  </ul>

</div>
   
</div>
</div>
  <div class="userheaddiv">
    <ul>
      <li><p>username</p></li>
      <li>img</li>
    </ul>
  </div>
<div class="worddiv"></div>
</body>
</html>
