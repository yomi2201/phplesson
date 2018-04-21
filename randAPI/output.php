<html>
<body>
  <?php
    echo "今日の";
    echo (htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));
    echo "の運勢は";
  ?>

  <?php
    $day=date('j');
    $daylength=(int)"$day";
  ?>

  <?php
    $str=(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));
    $strlength=strlen($str);
   ?>

   <?php
     $result=($day+$strlength+6) % 6 ;

     if($result==1){
       echo ("小吉です");
     }elseif ($result==4){
       echo ("末吉です");
     }elseif ($result==5){
       echo ("吉です");
     }elseif ($result==3){
       echo ("中吉です");
     }elseif ($result==0){
       echo ("末吉です");
     }else{
       echo ("凶です");
   } ?>
</body>
</html>
