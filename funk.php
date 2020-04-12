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





?>




