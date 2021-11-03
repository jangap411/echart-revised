<?php

require_once('../src/server.php');
if(empty($_SESSION['txt'])){
    header('location:../src/login.php');
}

/*
//--------------->
$id = $_SESSION['id'];*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jedidiah Angap">
    <title>TB eChart | Clinic CheckIn</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dropdown.css">
    <style>
        .qr {
            width: 600px;
            margin: 0 auto;
            margin-top: 5%;
        }
        </style>
</head>

<body>
    <!--<header>
        <div class="logo-container">
            <img src="../img/emblem.svg" alt="" onclick="window.location.href = '../index.php';">
            <h4><a href="../index.php">National Department of Health</a></h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="../index.php">Home</a></li>
                <li><a class="nav-link" href="../src/chart.php">My Chart</a></li>
                <li><a class="nav-link" href="index-qr.php">Clinic</a></li>
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
            <img src="../img/appbar.people.svg" alt="" onclick="alert('profile clicked')" ;>
        </div>
    </header>-->
    <header>
        <div class="logo-container">
            <img src="../img/emblem.svg" alt="" onclick="window.location.href = '../src/home.php';">
            <h4><a href="../src/home.php">National Department of Health</a></h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="../src/home.php">Home</a></li>
                <li><a class="nav-link" href="../src/chart.php">My Chart</a></li>
                <li><a class="nav-link" href="index-qr.php">Clinic</a></li>
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
                            echo " ";
                            echo $_SESSION['lname'];
                            unset($_SESSION['lname']);
                        ?>
                    </div> 
                <?php endif ?>
            </div>
            <div class="dropdown">
                <div class="products">

                    <button><img src="../img/appbar.people.svg" alt=""></button>
                    <ul>
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Exit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="presentation">
            <span class="qr">
                <h4>Heres your Registration Number</h4>
                    <h6>Use this to checkin to your <br>nearest Clinic to <br> pickup your medication</h6>
                    <!--<img src="qrcode.php?text=TB eChart&size=200" alt="QR Code" srcset="">-->
                    <img src="qrcode.php?text=<?php echo $_SESSION['txt'];?>" alt="QR Code" srcset=""> <!--'&size=200"--------qr code size not set-->
            </span>
                
            
            <!--<form action="qrcode.php" method="post">
                <input type="text" name="qrcode">
                <input type="submit" name="submit">
            </form>-->
            
            
                <!--<img class="big-circle" src="../img/big-eclipse.svg" alt="" />
                <img class="medium-circle" src="../img/mid-eclipse.svg" alt="" />
                <img class="small-circle" src="../img/small-eclipse.svg" alt="" />-->
            </section>
        </main>
    </body>

</html>