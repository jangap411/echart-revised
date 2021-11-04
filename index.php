<?php

    include_once './src/server.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/dropdown.css">
    <title>TB eChart | Home</title>
</head>

<body>
<header>
        <div class="logo-container">
            <img src="./img/emblem.svg" alt="" onclick="window.location.href = './index.php';">
            <h4><a href="index.php">National Department of Health</a></h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="./src/login.php">My Chart</a></li>
                <li><a class="nav-link" href="./src/login.php">Clinic</a></li>
                <li>
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="cart">
            <!--<img src="./img/appbar.people.svg" alt="" onclick="alert('profile clicked')" ;>-->
            <div>
                <?php if (isset($_SESSION['lname'])): ?>
                    <div class="msg">
                        <?php
                            //echo $_SESSION['txt'];
                            echo $_SESSION['fname'];
                            echo $_SESSION['lname'];
                            unset($_SESSION['lname']);
                        ?>
                    </div> 
                <?php endif ?>
            </div>
            <div class="dropdown">
                <div class="products">
                    <!--<button><img src="C:/Users/Jedidiah Angap/Documents/Visual Studio 2017/Projects/TBeChartApp/TBeChart/images/indsex.png" alt=""></button>-->
                    <button><img src="./img/appbar.people.svg" alt=""></button>
                    <ul>
                        <li><a href="./src/login.php">LOGIN</a></li>
                        <!--<li><a href="#">Music Streaming</a></li>
                        <li><a href="#">Consulting Help</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!--this is comment-->
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    <h1>PNG National Tuberculosis Control Program <span class="filt">eChart</span></h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, rerum?
                    </p>
                </div>
                <div class="cta">
                    <button class="cta-select" onclick="window.location.href = './src/chart.php';">My Chart</button>
                    <button class="cta-add" onclick="window.location.href = './src/login.php';">LOGIN</button>
                </div>
            </div>
            <div class="cover">       
                <img src="./img/lung.png" alt="matebook" srcset="">
            </div>
        </section>

        <img class="big-circle" src="./img/big-eclipse.svg" alt="" />
        <img class="medium-circle" src="./img/mid-eclipse.svg" alt="" />
        <img class="small-circle" src="./img/small-eclipse.svg" alt="" />
    </main>

</body>

</html>
