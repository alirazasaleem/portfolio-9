<?php

if(!defined('CurrentPATH')){
    define('CurrentPATH', dirname(__FILE__) . '/');
}

require_once CurrentPATH . '../common/header.php';

if($pages && count($pages)>0){
    foreach($pages as $p){
        $file = CurrentPATH . "../2/" . $p['type'] . ".php";
        //echo $file;
        if(file_exists($file)){
            require $file;
        }
    }
}

require_once CurrentPATH . '../common/footer.php';
?>
