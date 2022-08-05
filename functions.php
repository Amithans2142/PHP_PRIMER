<?php include 'include/header.php'?>

<body>
    <?php
    function GlobeToyota(){
        echo 'Globe Toyota <br/>';  
        echo 'Mohali<br/>';
        echo '9Phase<br/>';
      }
       GlobeToyota();
       echo'<hr/>';
       GlobeToyota();

       echo '<hr/>';
       function addFunction($num1,$num2){
        $sum=$num1+$num2;
        // $num2=$num2+1;
        echo "The Sum of $num1 and $num2 is: $sum <br/>";
       }
       function ChangeNumber(&$num){
        $num=$num+10;

       }
       function returnProduct($num1, $num2){
        $prod=$num1 * $num2;
        return $prod;

       }
       $num=21;
       addFunction(21,42);
       addFunction(42,$num);
       addFunction("21",'42');
       ChangeNumber($num);
       echo $num.'<br/>';
       $return_value= returnProduct(10,200);
       echo $return_value.'<br/>';
    ?>
    
</body>
</html>