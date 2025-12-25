@extends('template.default')

@section('title', 'my view')
@section('content')

<h1>My view</h1>
<?php
    echo 'My View Content';
    echo '<br>';
    echo 'Line 2';

?>
<br>
<?php
$myval ="Hello PHP";
?>
<br>
<?php
echo $myval;

# การสร้าง Array ใน PHP
$myarry2 = [1,2,3,4];

?>
<?php
$myarry4 = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    0,
    1
];
// print_r($myarry4);

// foreach ($myarry4 as $key => $value) {
//     echo "<br>Key:. $key . "Value: " . $value";

// }

// function myFunction(){
//     return "My Function called";
// }

?>

@endsection
