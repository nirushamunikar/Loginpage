<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username=='nirusha' && $password=="123"){
    echo "welcome ".$username." to our page.";
}
else{
    header('Location:user.php');
}

?>