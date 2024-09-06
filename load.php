<?php


//class auto load
function classAutoLoad(classname){
$directories=["contents","layouts","menus"];
foreach($directoriesAs $dir){
    $filname=dirname(__FILE__).DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR . $CLASSNAME .".PHP";
}
}
spl_autoload_register('classAutoLoad');
//create instance of all classes
$ObjLayouts =new layouts();
$ObjMenus = new menus();
$ObjHeadings =new headings();
 ?>