<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 5/17/2019
 * Time: 2:07 PM
 */

if(isset($_POST['username'],$_POST['password'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    if($uname == 'kavi' && $pwd == 'tharu'){
        echo '<h3>Successfully logged in</h1>';

    }
    else{
        echo 'Invalid Credentials';
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CSRF protection using synchronized token pattern</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        $(this.document).ready(function(){

            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
                }


            };

            xhttp.open("GET", "csrftoken_generator.php", true);
            xhttp.send();

        });
    </script>
</head>

<body>
<form class="form" action="home.php" method="post">
    <div>
        <label for="username" class="text-white"><h4>Write Something<h4></label><br>
        <input type="text" name="updatepost">
    </div>
    <div>
        <input type="hidden" name="token" value="" id="token_to_be_added"/>
    </div>
    <div>
        <input type="submit"  value="updatepost">
    </div>
</form>
</body>

