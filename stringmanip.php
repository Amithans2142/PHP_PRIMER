   <!DOCTYPE html> 
   <html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Primer- String manipulation</title>
   </head>
   <body>
   <?php
   $phrase1="Globe";
   $phrase2="Toyota";
   $location="mohali india";
   echo $phrase1." ".$phrase2;
   echo 'Upercase first letter:'.ucfirst($location).'<br/>';
   echo 'Upercase first letter of each word:'.ucwords($location).'<br/>';
   echo 'Uper case:'.strtoupper($location).'<br/>';
   echo 'Lower case:'.strtolower($location).'<br/>';
   echo 'Repeat string:'.str_repeat('a',10).'<br/>';
   echo 'Repeat String - Nested Function:'.strtoupper(str_repeat('a',10)).'<br/>';
   echo 'Get a Substring:'.substr($location,5,8).'<br/>';
    
   ?>
      
   </body>
   </html>