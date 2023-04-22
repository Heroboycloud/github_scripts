
<?php
 function securePassword ($password) 
{   $salt = substr(str_pad(dechex(mt_rand()),8,'0',STR_PAD_LEFT),-8);   $secured = $salt . hash('sha256',$password.$salt); 
return $secured; 
}
$user= securePassword("Azeez");
echo $user;

/* Next for comparing passwords */

function comparePassword($password,$stored_password) {  
    $salt = substr($stored_password,0,8);   $secured = $salt . hash('sha256',$password.$salt); 
return $stored_password == $secured; }
$used = comparePassword("Azeez",$user);
echo $used;
?>