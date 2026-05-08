<?php

//simple Function
function userDetails(){
    echo "User name is KRUNALSINH";
    echo "<br/>";
    echo "User age is 21";
    echo "<br/>";
    echo "User email is parmarkrunalsinh37@gmail.com";
    echo "<br/>";
}

userDetails();

?>

<?php

//Nested function

function dummy(){
    echo "<h1>User Details</h1>";
}

function userDetails(){
    dummy();
    echo "User name is KRUNALSINH";
    echo "<br/>";
    echo "User age is 21";
    echo "<br/>";
    echo "User email is parmarkrunalsinh37@gmail.com";
    echo "<hr/>";
}

userDetails();


?>


<?php

//Function with parameters

function addition($a, $b){
    echo $a + $b;
    echo "<br/>";
}


addition(20,30);
addition(50,90);
addition(30, -50);

?>

<?php

//Function with return statements

function getUser(int $id){
    if($id <= 0){
        return "Invalid Id";
    }

    $name = "Krunalsinh";
    $email = "krunalsinh13@gmail.com";

    return ["name" => $name, 
            "email" => $email];
}


$user = getUser(1);
echo "Your name is ". $user["name"]. " and your email id is " .$user["email"] ;

?>

