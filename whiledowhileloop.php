<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer- While/Do-While loops</title>
</head>
<body>
    <h1>While loop</h1>
    <?php
    //infinite
    // $grade=0;
    // while($grade<10){
    //     echo '<p>Less Than 10</p>';
    // }
$grade=0;
while($grade<10){
    echo '<p>Globe Toyota</p>';
    $grade++;
}
echo'Thank You';
    ?>
    <h1>Do-While loop</h1>
    <?php
    $grade=0;
    do{
        echo'<p>Globe Toyota</p>';
        $grade++;
    }while ($grade<10);
    echo 'Thank You';

    ?>
</body>
</html>