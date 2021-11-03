<?php
//login form

//$text = $_SESSION['txt'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/form.css">
    <title>TB eChart | Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src=".../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../style/animations.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="../img/emblem.svg" alt="" onclick="window.location.href = 'index.php';">
            <h4><a href="./index.php">National Department of Health</a></h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="#" onclick="alert('Please Login');">My Chart</a></li>
                <li><a class="nav-link" href="#" onclick="alert('Please Login');">Clinic</a></li>
            </ul>
        </nav>
        <div class="cart">
            <img src="../img/appbar.people.svg" alt="" style="color: red;">
        </div>
    </header>

    <section class="presentation">

    </section>
    <main>
        <section class="">
            <div class="form">
                <form action="./server.php" class="login-form" method="POST">
                    <h1>Login</h1>

                    <!--<div class="txtb">
                        <input type="text" name="lname">
                        <span data-placeholder="Last Name"></span>
                    </div>-->
                    <div class="txtb">
                        <input type="text" name="number">
                        <span data-placeholder="Registration Number"></span>
                    </div>

                    <input type="submit" class="logbtn" value="Login" name="login-btn">

                    <div class="bottom-text">
                        <!--
                            Don't have account? <a href="#">Sign Up</a>
                            <input type="submit" class="logbtn" value="Login" onclick="window.location.href = '../index.html';">
                        -->
                    </div>
                </form>
                <script>
                    $(".txtb input").on("focus", function () {
                        $(this).addClass("focus");
                    });

                    $(".txtb input").on("blur", function () {
                        if ($(this).val() == "")
                            $(this).removeClass("focus");
                    });
                </script>
            </div>
        </section>

        <!--
    <img class="big-circle" src="../img/big-eclipse.svg" alt="" />
    -->

        <img class="big-circle" src="../img/big-eclipse.svg" alt="" />
        <img class="medium-circle" src="../img/endtb_logo.svg" alt="" />
        <img class="small-circle" src="../img/small-eclipse.svg" alt="" />
    </main>

</body>

</html>