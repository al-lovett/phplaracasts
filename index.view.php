<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }

        </style>
    </head>
    <body>

        <ul>
        
            <?php foreach ($names as $name) :?>
                    
                <li><?= $name ?></li>

            <?php endforeach;?>
            
            <br>
            
            <?php
                foreach ($names as $name) {
                    echo "<li>$name</li>";

                }
            ?>
        </ul>


    </body>
</html>
