<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 6/17/2019
 * Time: 11:43 AM
 */
class token {

    public static function checkToken($token,$sessionIdentifier){


        echo " Token: $sessionIdentifier ";

        $myfile = fopen("Tokenstore.txt", "r") or die("Unable to open file!");
        list($tok,$sid) = explode(",",chop(fgets($myfile)),2); // chop() is a must because fgets() returns new line character
        fclose($myfile);
        if($tok == $token){
            if($sessionIdentifier == $sid ) {
                return true;
            }
        }
    }
}
?>