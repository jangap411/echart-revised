<?php
    //header and nav
    require_once 'server.php';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../style/style.css">
<link rel="stylesheet" href="../style/dropdown.css">

<header>
        <div class="logo-container">
            <img src="../img/emblem.svg" alt="" onclick="window.location.href = '../index.php';">
            <h4><a href="../index.php">National Department of Health</a></h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="home.php">Home</a></li>
                <li><a class="nav-link" href="./chart.php">My Chart</a></li>
                <li><a class="nav-link" href="../qr/index-qr.php">Clinic</a></li>
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

                    <button><img src="../img/appbar.people.svg" alt=""></button>
                    <ul>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Exit</a></li>
                        <li><a href="server.php?logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>