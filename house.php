<!DOCTYPE html>
<html>
<head>
 
   <meta charset="utf-8">
   <title>prototype</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="main.js"></script>
 
     <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
 
</head>
 
<body>

   <div class="top">
   <div class="top_line"></div>
   <p id="clock1" class="top_time"></p>
   <p id="clock2" class="top_time"></p>
   </div>
   <div class="cont_left cont">   
      <h1>P</h1>
      <p>온도</p>
      <p>
        <!-- php파일 다운로드 -->

        <?php
          $content = file_get_contents('http://192.168.0.100/data/temperature');
          echo $content;
        ?>
        C°          
      </p>
      <p>습도</p>
      <p>
        <?php
          $content1 = file_get_contents('http://192.168.0.100/data/humidity');
          echo $content1;
        ?>
        %
      </p>
   </div>
    
   <div class="cont_right cont" onclick="but();" >
      <h1>야외</h1>
      <p> Gwang-Ju</p>
      <p> <span id="temperature-celcius"></span></p>
       <p><span id='humidity'></span></p>
       <p><span id='overall'></span></p>
   </div>
    
   <div class="bottom_line">
   </div>

</body>
 
<script type="text/javascript">
   function but() {
       alert("!!");
    }
        
   function check_pm(num){
      if (num > 12){
         return "오후 " + (num - 12)
      }
      else{
         return "오전 " + num 
      }
   }
   
   function clock() {
   var d = new Date();
    var currentDate = d.getFullYear() + "년 " + ( d.getMonth() + 1 ) + "월 " + d.getDate() + "일";
    var currentTime = check_pm(d.getHours()) + "시 " + d.getMinutes() + "분 " + d.getSeconds() + "초";
    var result = document.getElementById("clock1");
    // 문단 나눌려고 두개로 나눔
    var result2 = document.getElementById("clock2");
    result.innerHTML =  currentDate + " " ;
    result2.innerHTML = currentTime + " " ;
    }
 
   function init() {
       clock();
       setInterval(clock,1000);
    }
 
   init();
     
</script>
 
</html>  
 