<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js.js" defer></script>
    <link rel="stylesheet" href="checker.css">
    <title>Chekerpass</title>
</head>
<body>
<div class="wrapper">
    <div class="card">
        <h1>Password Checker</h1>
        <p class="subtitle">
            This form works with AJAX, so you don’t need to submit your password.
        </p>

        <form id="formocka" name="formocka" method="post" action="checkerlogika.php">
            <label for="pass">Show me your password to find weakness</label>
            <input type="text" name="pass" id="pass">
        </form>

        <div id="password-result">
            <p id="paragraph"></p>

            <div class="strength-bar" id="strength-bar">
                <div id="strength-fill" class="strength-fill"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php
