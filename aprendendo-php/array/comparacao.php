<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
//arr1 == arr2 true
//arr1 === arr2 true

$arr3 = ['idade' => 20,'idade' => 'Maria' ];

/*
arr1 == arr3 true
arr1 === arr3 false
arr1 != arr3 false

*/
$arr4 = ['idade' => '20','idade' => 'Maria' ];
// arr1 == arr3 true
?>