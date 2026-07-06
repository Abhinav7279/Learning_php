<?php
// function UserDetail(){
//     echo "<h2>User Details</h2>";
// }
// function UserDtails(){
//     userDetail();
//     echo "Hello User";
//     echo "<br>";
//     echo "User name is Abhinav";
//     echo "<br>";
//     echo "User email is abhinav@123.com";
//     echo "<br>";
//     echo "user age is 24";
//     echo "<br>";
//     echo "user phone number is 1234567890";
//     echo "<hr />";
// }
// UserDtails();

?>

<?php
//Parameterized Function
function sum($a,$b){
    echo $a+$b;
    echo "<br>";
    
    }
sum(10,20);
sum(100,300);

function userDetails($name, $color){
    echo "<h1 style='color:$color'>$name</h1>";
    echo "<br>";
}

userDetails("Abhinav","red");
userDetails("Anand","green");


?>