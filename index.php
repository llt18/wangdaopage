<!DOCTYPE html>
<html>
<head>
  <style>
    html{
      width:800px;
      height:600px;
      margin:0 auto;
      
}    

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
   overflow:auto;
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
    <li><button style="width:50px" onclick="window.location.href='login.html'">登陆</button></li>
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
<div class="worddiv">
<h1 style="text-align:center;">学校简介</h1>
<img src="wangdaoimg001.jpeg" style="width:100px;height:100px;margin-left:10px;">
<p style="float:left;">望道中学是浙江省义乌市城西街道的一所公立初级中学，位于圣寿路666号，成立于2011年9月，由原夏演初中与东河初中合并组建，市政府投资8000万元兴建。学校占地120亩，配备教学楼、实验楼等设施，现有40个教学班、1293名学生及104名教职工。2022年实施扩建工程，由义乌市广丰建设工程有限公司以2638.67万元中标[3][4]。该校以《共产党宣言》首译者陈望道命名，2020年8月增挂“浙大教科附属学校”品牌，并与复旦大学附属中学结为姊妹学校[1]。办学期间获浙江省级荣誉8项、金华市级9项、义乌市级27项，其数字化赋能教师发展案例入选全国《教师数字化学习报告（2023）》[2]。学校以“清明政风、清净校风、清正教风、清新学风”为建设目标，传承“好学力行”精神[1]。</p>

</div>
</body>
</html>
