<?php
/**
 * Created by PhpStorm.
 * User: Zagham
 * Date: 8/4/16
 * Time: 4:04 AM
 */
if(!defined('CurrentPATH')){
    define('CurrentPATH', dirname(__FILE__) . '/');
}

require_once CurrentPATH . '../common/header.php';

//if(isset($_GET['page']) && !empty($_GET['page']) && file_exists(CurrentPATH . $_GET['page'].".php")){
if(isset($ctype) && !empty($ctype) && file_exists(CurrentPATH . $ctype . ".php")){
    require_once CurrentPATH . $ctype .".php";
}else{
	load_404_page();
    //require_once CurrentPATH . "home.php";
}

require_once CurrentPATH . '../common/footer.php';
?>
