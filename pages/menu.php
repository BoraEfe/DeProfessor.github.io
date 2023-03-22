<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="../menuToggle.js"></script>
    <script src="https://kit.fontawesome.com/a2d23ebfd3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-content">
        <img class="michelin1" src="/Images/michelin.png">
        <img class="michelin2" src="/Images/michelin.png">
        <img class="michelin3" src="/Images/michelin.png">
        <div class="header-li">
            <ul>
                <li>MENU</li>
            </ul>
        </div>
        <div class="foldmenu" onclick="toggleMenu()">
            <img class="menu-icon" src="Images/menu-icon.svg" with="30px" height="40px">
        </div>
        <div id="slideMenu">
            <p class="menuButtonText" onclick="location.href='../index.php'">home</p>
            <p class="loginButtonText" onclick="location.href='/pages/inlog.php'">inloggen</p>
        </div>
        <div class="header-box-title">
            De Professor
        </div>
        <div class="header-box">
        </div>
    </div>
    <nav class=menu-itemlist>


    </nav>
    <div class="menu-body">
        <div class=itembox>
            <div class="itembox-info">
                <i class="fa-solid fa-plus fa-1x"></i>
            </div>
        </div>

    </div>
    </div>
</body>

</html>