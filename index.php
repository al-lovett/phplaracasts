<?php


$names = [
    'Joe',
    'Rob',
    'Chris',
    'Todd',
    'Al'

];


$animals = [
    'Bird',
    'Cat',
    'Dog',
    'Hamster',

];



$person = [
    'age' => 31,
    'hair' => 'blonde',
    'career' => 'web developer'
];


$person['name'] = 'SCP-001';

unset($person['age']);


// die(var_dump($person));

$task =[
    'title' => 'get nano chips removed',
    'due' => 'today',
    'assigned_to' => 'Al',
    'completed' => true 
]; // title, due, assigned_to, completed

require 'index.view.php';
