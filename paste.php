<!-- <header>    -->

<!-- 
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
        <!-- </header>     -->
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
            </ul> -->
        </header>



        <section>
<?php        
        
$myArray = array("Rob", "Kirsten", "Tommy", "Ralphie");

$myArray[] = "Katie";

print_r($myArray);

echo $myArray[3];

echo "<br><br>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "yoghurt";

$anotherArray[5] = "coffee";

$anotherArray["myFavouriteFood"] = "ice cream";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array(
    
    "France" => "French", 
    "USA" => "English", 
    "Germany" => "German");

unset($thirdArray["France"]);

print_r($thirdArray);

echo sizeof($thirdArray);

?>