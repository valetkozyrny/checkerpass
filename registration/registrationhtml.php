<?php
include "ValidatorRegistr.php";
$validate = "";
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $validate = new Validate($_POST);

    $validate->required('email');
    $validate->email('email');
    $validate->emailminlenght('email', 4);
    $validate->comparepasswords('password', 'passwordtwo');
    $validate->required('password');
    $validate->required('passwordtwo');




}





?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
<form name="formocka" id="formocka" action="registrationhtml.php" method="post" novalidate>
    <label for="email"> Email: </label>
    <input type="email" minlength="3" maxlength="25" name="email" id="email">


    <label for="password"> Password: </label>
    <input type="password" name="password" minlength="5" maxlength="25">

    <label for="passwordtwo"> Rewrite your password: </label>
    <input type="password" name="passwordtwo" minlength="5" maxlength="25">

    <label for="osobe"> About you</label>
    <input type="text" name="osobe">

    <label for="submit">  </label>
    <input name="submit" type="submit">

    <ul>
        <?php
        if ($validate) {
            if ($validate->hasErrors()) {
                $errors = $validate->getErrors();
                foreach ($errors as $error){
                    echo "<li>$error</li>";
                }
            }
            }
        ?>
    </ul>
</form>
</body>
</html>
