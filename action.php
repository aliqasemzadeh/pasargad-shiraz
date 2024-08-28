<?php
$sumInput = 0;
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$sumInput = $num1 + $num2;
var_dump($sumInput);

/*
echo "_POST";
print_r($_POST);
echo "<br />";
echo "_GET";
print_r($_GET);
echo "<br />";
echo "_SERVER";
print_r($_SERVER);
echo "<br />";
echo "_COOKIE";
print_r($_COOKIE);
echo "<br />";
echo "_SESSION";
print_r($_SESSION);
echo "<br />";
echo "_REQUEST";
print_r($_REQUEST);
echo "<br />";

$array = [
    'name' => 'Ali',
    'lastname' => 'Qasemzadeh',
    'grades' => [
        'Programing' => '20',
        'Math' => 19,
        'Python' => 5,
    ]
];

//var_dump($array);

$sum = 0;
$sum += $array['grades']['Math'] + $array['grades']['Programing'];

$string = "";
$sum = $array['grades']['Math'] . $array['grades']['Programing'];
echo $sum;
$array2 = [];
*/
