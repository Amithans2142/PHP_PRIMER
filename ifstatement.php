<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-If Statements</title>
</head>
<body>
    <h3 style="color:red"></h3>
    <?php
    $grade=55;
    if($grade>=50){
        echo '<h3 style="color: green">You Have Passed</h3>';
    } 
    else {
        echo '<h3  style="color: red">You Have Failed</h3>';
    }
    $grade='B';
    if($grade=='A'){
        echo '<h2  style="color: green"> Excellent</h2>';
    } 
    elseif ($grade=='B'){
        echo '<h2  style="color: blue">Average</h2>';
    }
    else
    echo'<h2  style="color: red">Failed</h2>';
    ?>
</body>
</html>