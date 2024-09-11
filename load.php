<?php

function classAutoLoad($classname)
{
    $directories = ["contents", "layouts", "menus"];

    
    foreach($directories as $dir)
    {
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";

        if(file_exists($filename) AND is_readable($filename))
        {
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

// Objects of all classes
$ObjLayouts = new layouts();
$ObjMenus = new menus();
$ObjHeadings = new headings();
$ObjContents = new contents();