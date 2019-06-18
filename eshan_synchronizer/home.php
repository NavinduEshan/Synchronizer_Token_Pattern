<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 6/17/2019
 * Time: 11:42 AM
 */
require_once 'token.php';
$val = $_POST["token"];
if(isset($_POST['updatepost'])){
    if(token::checkToken($val,$_COOKIE['SesT'])){
        echo "<h2> Valid request:  ".$_POST['updatepost']."</h2>";
    }
    else{
        echo "<h2> Invalid request(csrf token does not match) :  ".$_POST['updatepost']."</h2>";
    }
}
?>