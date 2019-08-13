<?php

$performer_name      ="raghunath";
$hight               ="5 inches tall";
$users               ="audience";

$user_allowed        =16;
$user_child          =17;
$user_old            =50;

$attendee            ="A person comming to show";


$comedi_show = array("performer"=>"$performer_name","performerhight" =>"$hight", "Age allowed"=> "$user_allowed");

// two condition to satisfay


function alloud_user($user_allowed,$user_old){

if("$user_allowed" <=18 && "$user_allowed">=46){
    echo "your 18 above and allowed to attend the show <br><br>";
} elseif("$user_old" >=50){
    
    echo "you are 50 year old and your allowed to attend the show wait in the car<br><br> ";
}else{
    echo "your not 18 kid play with your friends";
}
}


alloud_user($user_allowed,$user_old);


echo $comedi_show['performerhight'];

echo "<br><br>";


?>



<?php
echo $comedi_show['performerhight'];

?>






