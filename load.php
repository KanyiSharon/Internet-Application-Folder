<?php

require_once "user_details.php";

$Obj = new user_details();

$arr=["black","white","green","red"];

foreach($arr as $color){
print $color ."<br>";
}

print dirname(__FILE__);
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"];
print "<br>";
print "<br>";
print basename($_SERVER["PHP_SELF"]);
print "<br>";

//TO CHECK IF A FILE EXIST
IF(file_exists("index.php") AND is_readable("index.php")){
    print "File exists";
}else{
    print "File does not exist";
}
print "<br>";
?>