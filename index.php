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
    'title' => 'get nano chips removed step 8 in php practitioner',
    'due' => 'today',
    'assigned_to' => 'Al',
    'completed' => true 
]; // title, due, assigned_to, completed


$task2 =[
    'title' => 'cleanse white rabbit',
    'due' => 'someday',
    'assigned_to' => 'Al',
    'completed' => false
]; // title, due, assigned_to, completed

require 'index.view.php';
