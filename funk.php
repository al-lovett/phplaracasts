<?php





// an array
$animals = ['dog','cat'];

// 
function dumper($one, $two, $three){

    var_dump($one, $two, $three);

}

// echo '<pre>';
// dumper('first place', 'safespace', 'outer space');
// echo '</pre>';

function dd($data) {

    echo'<pre>';
    die(var_dump($data));
    echo '</pre>';


}


// dd($animals);

$myArray = array("Rob", "Rick", "Morty", "Al");

$myArray[] = "Bird Person";

print_r($myArray);

echo $myArray[3];

echo "<br><br>";

$anotherArray[0] = "SCP-0001";

$anotherArray[1] = "SCP-21";

$anotherArray[2] = "SCP-305";

$anotherArray[3] = "SCP-1482";

$anotherArray["The Foundation"] = "Special Parsec Divison";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array(

  "France" => "French",
  "USA" => "English",
  "Botswanna" => "Setswana");

unset($thirdArray["USA"]);

print_r($thirdArray);

echo sizeof($thirdArray);



?>




