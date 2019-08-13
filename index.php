<?php 


//require("exercise.php");

//values = text / string or number/int
// vriables

$name           ="raghunath";
$age            = 32;
$contry         ="INDIA";
$password       ='password';
$minpassword    =8;



if (strlen($password)< ($minpassword)){

     // echo "password is less the minimum requirments";
}else{
//echo "your name is ".$name ."and your password is ".$password. " and its correct , you are ".$age."year old from ".$contry." ";
} 

// CONDITIONAL STATMENT
// HOW THEY ARE USED
/*
$win = 1;
$logged_in = 1;

if($win == 2){
    echo " i will buy a car";
 } else {
    echo "you didnot win ride a bike to college";
}*/



/*
if ($logged_in = 1){
    header("Location: account.php");
}else if {
    include('login.php');
}else{
    echo "Session expired";
}
*/


// CONCEPT OF ARRAY

// normal array
/*
$user = array ("raghu","bangalore","bachalore",38);

echo $user[0];*/

//associative array

/*
$account = array ("fullname"=> "raghunath","place"=>"bangalore","age"=>32);

echo $account["place"]
*/

    
  /*$rows = mysqli_fetch_array($results);  
    
    echo $rows['names'];*/

// advance concep of php LOOPING

//$users =array("fullname"=>"raghunath","nasnalty"=>"indian","address"=>"bangalore","age"=>18);

/*
foreach($users as $user){
    echo $user;
}
*/

//echo $performer_name;

//alloud_user($user_allowed,$user_old);




    
?>

<?php

include('DBconnection.php');


$query= "INSERT INTO users(id,email,password,full_name,spending_amt); values('NULL','sujamul@yahoo.com','123','sujamal','36800')";

   $run_query = mysqli_query($connection,$query);
   

/*

if($run_query){
    
    echo "Query inserted ";
}else{
    
    echo "data not insted";
}

mysqli_close($connection);

*/



/*
$query_update = "UPDATE users set full_name ='pulki_roy',email ='pul@gmail.com' Where id = 1";

$query_update= mysqli_query($connection,$query_update);*/


$query_select = "SELECT * from user";
$run_query = mysqli_query($connection,$query_select);

$result = mysqli_fetch_array($run_query,MYSQL_NUM);

if($result){
    
    echo $result['full_name'];
}else{
    
    echo 
}

//mysqli_close($connection);



?>






























