<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>PHP Primer- Switch Statements</title>
</head>
<body>
    <?php
    $grade='A'; 
   switch($grade){

       case 'A':
        echo '<h1 style="color: green">Excellent</h1>';
        break;
        case 'B':
            echo '<h1 style="color: blue">Average</h1>';
            break;
            case 'C':
                echo '<h1 style="color: red">Failed</h1>';
                break;
                default:
                echo '<h1 style="color: red">Failed</h1>';
                break;
   }
    ?>
    
</body>
</html>