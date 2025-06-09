<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="images/Logo.png" class="logo">
            <nav>
            <ul id="menulist">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="services.php">Services</a></li>

                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" onclick="togglemenu()">
        </div>
    </div>


    <script>
        var menulist = document.getElementById("menulist");
        menulist.style.maxHeight = "0px";
        function togglemenu() {
            if (menulist.style.maxHeight == "0px") {
                menulist.style.maxHeight = "130px";
            }
            else {
                menulist.style.maxHeight = "0px";
            }
        }

    </script>
</body>

</html>