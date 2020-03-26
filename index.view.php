<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" / >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">

    </head>
    <body>
        <header>  
            <ul>
                
                <?php foreach ($names as $name) :?>
                                    
                        <li><?= $name ?></li>

                <?php endforeach;?>
               
            </ul>            
        </header>
        <section> 

            <?php
                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }
            ?>

        </section>
    </body>
</html>
