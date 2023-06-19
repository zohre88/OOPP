<?php 
//session start

use Admin\Category;
use database\CreateDB;
use database\Database;

session_start();

// config
define('BASE_PATH', __DIR__);
define('CURRENT_DOMAIN', currentDomain().'/php-project');
define('DISPLAY_ERROR', true);
define('DB_HOST', 'localhost');
define('DB_NAME', 'php-project');
// define('DB_NAME', 'exam');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

require_once 'database/Database.php';
require_once 'database/CreateDB.php';
require_once 'activities/Admin/Admin.php';
require_once 'activities/Admin/Category.php';
require_once 'activities/Admin/Post.php';
require_once 'activities/Admin/Banner.php';
// $db= new CreateDB();
// $db->run();
// $db = new Database();
// helpers
function protocol(){
    return stripos($_SERVER['SERVER_PROTOCOL'],'https')===true ? 'https://':'http://';
}

function currentDomain(){
    return protocol().$_SERVER['HTTP_HOST'];
}
// uri('admin/categories', 'Category', 'index')
// uri('admin/categories/store', 'Category', 'store', 'POST')
function uri($address, $class, $method, $requestMethod = 'GET'){
  // current url array
    $currentUrl= explode('?', currentUrl())[0];
    $currentUrl= str_replace(CURRENT_DOMAIN, '', $currentUrl);
    $currentUrl = trim($currentUrl, '/ ');
    $currentUrlArray = explode('/',$currentUrl);
    $currentUrlArray = array_filter($currentUrlArray);
  // address url array
    $address = trim($address, '/ ');
    $addressArray = explode('/',$address);
    $addressArray = array_filter($addressArray);

    if(sizeof($currentUrlArray)!== sizeof($addressArray) || $requestMethod != methodFeild()){
        return false;
    }

    $parameters = [];

    for($i = 0; $i <sizeof($currentUrlArray); $i++){
        if($addressArray[$i][0]== "{" && $addressArray[$i][strlen($addressArray[$i])-1] =="}" ){
            array_push($parameters, $currentUrlArray[$i]);
        }elseif($currentUrlArray[$i] !== $addressArray[$i]){
            return false;
        }
    }

    if(methodFeild() == 'POST'){
        $request = isset($_FILES)? array_merge( $_POST, $_FILES): $_POST;
        $parameters = array_merge([$request],$parameters);
    }
    $object= new $class;
    call_user_func_array(array($object, $method), $parameters);
    exit();

}
// admin/category/edit/{id}
// admin/category/edit/5
// uri('admin/categories', 'Category', 'index');


function asset($src){
    $domain = trim(CURRENT_DOMAIN, '/ ');
    $src = $domain .'/'.trim($src, '/');
    return $src;
}

function url($url){
    $domain = trim(CURRENT_DOMAIN, '/ ');
    $url = $domain .'/'.trim($url, '/');
    return $url;
}

function currentUrl(){
    return currentDomain(). $_SERVER['REQUEST_URI'];
}

function methodFeild(){
    return $_SERVER['REQUEST_METHOD'];
}

function displayError($displayError){
    if($displayError){
        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL);
    }else{
        ini_set('display_errors',0);
        ini_set('display_startup_errors',0);
        error_reporting(0);
    }
}
displayError(DISPLAY_ERROR);
global $flashMessage;
if(isset($_SESSION['flash_message'])){
    $flashMessage = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
function flash($name, $value = null){
    
    if($value === null){
        global $flashMessage;
        $message = isset($flashMessage[$name]) ? $flashMessage[$name] : '';
        return $message;
    }else{
        $_SESSION['flash_message'][$name]= $value;
    }
    
}
// function redirect($url){
//     header('location:'. trim(BASE_URL, '/ '). '/'.trim($url,'/ '));
// }
function dd($var){
    echo '<pre>';
    var_dump($var);
    exit;
}

// category route:
uri('admin/categories', 'Admin\Category', 'index');
uri('admin/categories/create', 'Admin\Category', 'create');
uri('admin/categories/store', 'Admin\Category', 'store', 'POST');
uri('admin/categories/edit/{id}', 'Admin\Category', 'edit');
uri('admin/categories/update/{id}', 'Admin\Category', 'update', 'POST');
uri('admin/categories/delete/{id}', 'Admin\Category', 'delete');
// posts route
uri('admin/posts','Admin\Post','index');
uri('admin/posts/create','Admin\Post','create');
uri('admin/posts/store','Admin\Post','store', 'POST');
uri('admin/posts/edit/{id}','Admin\Post','edit');
uri('admin/posts/update/{id}','Admin\Post','update', 'POST');
uri('admin/posts/delete/{id}','Admin\Post','delete');
uri('admin/posts/selected/{id}','Admin\Post','selected');
uri('admin/posts/breaking-news/{id}','Admin\Post','breakingNews');
// banner
uri('admin/banners', 'Admin\Banner', 'index');
uri('admin/banners/create', 'Admin\Banner', 'create');
uri('admin/banners/store', 'Admin\Banner', 'store', 'POST');
uri('admin/banners/edit/{id}', 'Admin\Banner', 'edit');
uri('admin/banners/update/{id}', 'Admin\Banner', 'update', 'POST');
uri('admin/banners/delete/{id}', 'Admin\Banner', 'delete');


echo '404 - not found';


