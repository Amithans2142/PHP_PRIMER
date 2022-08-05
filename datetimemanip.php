<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer- Date and Time manipulation</title>
</head>
<body>
    <?php
    $datennow=getdate();
    echo "Today's Date:<br/>";
    echo $datennow['mday'].'<br/>';
    echo $datennow['mon'].'<br/>';
    echo $datennow['year'].'<br/>';
    echo "Today's Date:".$datennow['mday']. '/' .$datennow['mon']. '/' .$datenow['year'];
    ?>
    
</body>
</html>