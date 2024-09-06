<?php


//class auto load
function classAutoLoad(classname){
$directories=["contents","layouts","menus"];
foreach($directoriesAs $dir){
    $filname=dirname(__FILE__).DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR . $CLASSNAME .".PHP";
}
}
spl_autoload_register('classAutoLoad');
//layouts
require_once"layout\layouts.php";

$ObjLayouts= new layouts();
require_once "user_details.php";
//Menues
require_once "menues/menues.php";
$ObjMenu= new menus();
//User Details
$Obj = new user_details();

//

// foreach($arr as $color){
// print $color ."<br>";
// }

// print dirname(__FILE__);
// print "<br>";
// print "<br>";
// print $_SERVER["PHP_SELF"];
// print "<br>";
// print "<br>";
// print basename($_SERVER["PHP_SELF"]);
// print "<br>";

// //TO CHECK IF A FILE EXIST
// IF(file_exists("index.php") AND is_readable("index.php")){
//     print "File exists";
// }else{
//     print "File does not exist";
// }
// print "<br>";
 ?>