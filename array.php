<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-Arrays</title>
</head>
<body>
    <?php
    $id=array(21,42,84);
    echo $id[2];
    echo "<p>$id[0]</p>";
    $size= count($id);
    echo "<p>Array Size:$size</p>";
    for($count=0; $count < $size; $count++){
        echo "<p>$id[$count]</p>";
    }
    ?>
    
</body>
</html>