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
        <div=""> 
            <ul>
                <?php
                    foreach ($names as $name) {
                        echo "<li>$name</li>";
                    }
                ?>
            </ul>

        </article>



        <h1> Task for the day 1</h1>

             <ul>
                <?php foreach ($task as $heading => $value) : ?>
                    <li>
                        <strong><?= ucwords($heading); ?>:</strong> <?= $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

        <h2> Task for the day 2</h2>
            
            <ul>
                <li>
                    <strong>Name: </strong> <?= $task2['title']; ?>
                </li>                        

                <li>
                    <strong>Due Date: </strong> <?= $task2['due']; ?>
                </li>  

                <li>
                    <strong>Personal Responsible: </strong> <?= $task2['assigned_to']; ?>
                </li>  

                <li>
                    <strong>Status: </strong> <?= $task2['completed'] ? 'Complete' : 'Incomplete'; ?>
                </li>  
            </ul> 
    </body>
</html>
