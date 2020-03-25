<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" / >

    </head>
    <body>
        <header>   
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

                <br>
                <p>List of Animals</p>
                <br>


                <?php foreach ($animals as $animal) :?>

                    <li><?= $animal ?></li>

                <?php endforeach;?>

                <br>

                <?php
                    foreach ($animals as $animal) {
                        echo "<li>$animal</li>";

                    }
                ?>



            </ul>
            
            <ul>
                <?php foreach ($person as $key => $feature)  : ?>

                    <li><strong><?= $key; ?></strong><br> <?= $feature; ?></li>

                <?php endforeach; ?>


            </ul>

            <h1> Task for the day</h1>

            <!-- <ul>
                <?php foreach ($task as $heading => $value) : ?>
                    <li>
                        <strong><?= ucwords($heading); ?>:</strong> <?= $value; ?>
                    </li>
                <?php endforeach; ?>

            </ul> -->

            <ul>
                <li>
                    <strong>Name: </strong> <?= $task['title']; ?>
                </li>                        

                <li>
                    <strong>Due Date: </strong> <?= $task['due']; ?>
                </li>  

                <li>
                    <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
                </li>  

                <li>
                    <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
                </li>  
            </ul>
        </header>
    </body>
</html>
