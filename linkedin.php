<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Functions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <?php

      // function say_hello() {
      //   echo "Hello World <br/>";
      // }

      // say_hello(); - calls the function

     /* function say_hello_to($word) {
        echo "Hello {$word} <br/>";
      }

      say_hello_to("worlds");
      */
      function say_hello_to($word) {
        echo "Hello {$word} <br/>";
      }

      $name = "John Doe";
      say_hello_to($name);

      ?>
    
    <script src="" async defer></script>
  </body>
</html>