<?php

//Index Array

// $users = ["krunalsinh", "Raj", "Dev", "Ram", "peter"];

// for($user=0; $user<count($users); $user++){
//     echo $users[$user];
//     echo "<br/>";
// }

// Associative Array

// $userDetails = ["name" => "Krunalsinh", "age" => 21, "city" => "Surendranagar", "mail" => "abc@gmail.com", "state" => "Gujrat"];
// // echo $userDetails["name"];

// foreach($userDetails as $key => $data){
//     echo $key. " is ". $data;
//     echo "<br/>";
// }

// Multidimensional Array

$users = [
    [1, "Krunalsinh", "krunalsinh124@gmail.com"],
    [2, "Raj", "raj12@gmail.com"],
    [3, "Ram", "ram23@gmail.com"]
];

// echo "<pre>";
// print_r($users);
// echo "<pre>";


for($i=0; $i<count($users); $i++){    
    for($j=0; $j<count($users[$i]); $j++){
        echo $users[$i][$j];
        echo "<br/>";
    }  
}

?>