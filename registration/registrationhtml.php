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
<form name="formocka" id="formocka" method="post" novalidate>
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
</form>
</body>
</html>
