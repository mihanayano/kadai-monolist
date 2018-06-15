<?php

  date_default_timezone_set('Asia/Tokyo');
  $now_hour=(int)date("H");
  
  function greeting($hour){
      $result="";
      
      if(7<=$hour&&$hour<12){
          $result="おはよう";
      }
      elseif(12<=$hour&&$hour<19) {
          $result="こんにちは";
      }
      else{
          $result="こんばんは";
      }
  
      return $result;


  }
 
 ?>
 
 <!DOCTYPE html>
 <html lang="ja">
     <head>
         <meta charset="UTF-8">
         <title> タイトル</title>
     </head>
     <body>
         <p>
          今は<?php print $now_hour; ?>時です。
         </p>
         <p>
         <?php print greeting($now_hour); ?>
         </p>
     </body>
     
 </html>

