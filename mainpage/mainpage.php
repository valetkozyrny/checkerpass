<?php
include "../includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Checker Project</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="../includes/footer.css">
    <link rel="stylesheet" href="../includes/header.css">

</head>
<body>
<main class="page">
    <section class="hero">
        <div class="hero-text">
            <h1>Password Checker Project</h1>
            <p class="subtitle">
                A simple web project about password strength, privacy, and practical work with PHP and JavaScript.
            </p>
            <a href="../checker/checkerhtml.php" class="try-btn">Try it</a>
        </div>

        <div class="hero-image">
            <img src="unnamed.jpg" alt="Password Checker Preview">
        </div>
    </section>

    <section class="about">
        <h2>About the Project</h2>

        <p>
            I developed this project to strengthen my practical skills in PHP and JavaScript, with additional use of HTML and CSS.
            I was inspired by a similar concept I discovered online, and I found the idea both engaging and valuable.
            A password security checker seemed like an interesting project because it combines usability with an important real-world topic digital security.
        </p>

        <p>
            The project is designed to be simple for users: all they need to do is enter a password and receive feedback on how secure it is.
            Importantly, none of the passwords entered into the form are stored in a database or shared anywhere.
            Thanks to the use of AJAX, the data is handled securely during the evaluation process, which helps protect user privacy.
        </p>

        <p>
            In the future, I would like to continue improving this project and eventually turn it into a more advanced, professional web application.
            My plans include developing a more sophisticated password evaluation system and potentially adding smart suggestions for stronger alternative passwords related to the user’s original input.
        </p>
    </section>

    <section class="info">
        <div class="info-card">
            <h3>Purpose</h3>
            <p>
                This project helped me practice real interaction between frontend and backend in a simple and useful format.
            </p>
        </div>

        <div class="info-card">
            <h3>Technologies</h3>
            <p>
                The project uses HTML, CSS, JavaScript, PHP, and AJAX for dynamic password evaluation.
            </p>
        </div>

        <div class="info-card">
            <h3>Future Plans</h3>
            <p>
                I want to improve the checking system and make the application more advanced and professional in the future.
            </p>
        </div>
    </section>
</main>

<?php
include "../includes/footer.php"
?>
</body>
</html>