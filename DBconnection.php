<?php

$server    ="localhost";
$username  ="root";
$password  ="";
$database  ="cur_app";

//$connection = mysqli_connect($server,$username,$password,$database);

/*if($connection){
    echo " connection successfull";
}else{
    
    echo "connection is failed " . mysqli_error($connection);
    
    die($connection);
}*/


try{
    $connection = mysqli_connect($server,$username,$password,$database);
    
 if($connection){
    // echo "Database connected sussessfully";
 } 
}catch(Exception $errormessage){
    
    echo $errormessage-> GetMessege();
}

?>
