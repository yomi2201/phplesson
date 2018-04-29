<html>
<body>
  <?php
    echo '今日の'.
      $name = htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES).
      'の運勢は';

    $day = (int) date('j');
    $strlength = strlen($name);
    $result = ($day + $strlength + 6) % 6;

    switch (true) {
      case $result === 1:
       echo('小吉です');
       break;
      case $result === 0:
      case $result === 4:
       echo('末吉です');
       break;
      case $result === 5:
        echo('吉です');
        break;
      case $result === 3:
        echo('中吉です');
        break;
      default:
       echo('凶です');
    }
  ?>
</body>
</html>
