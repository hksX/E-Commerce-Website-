<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
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
        <div>
    </div>

    <div class="row">
        <div class="col-1">
            <h2>Hi <br> World</h2>
            <p>Lorem ipsum m.</p>
            <h4>4399389</h4>
            <button class="button">Explore
                <img src="images/arrow.png" alt="">
            </button>
        </div>


        <div class="col-2">
            <img src="images/Headphones.png" class="controller">
            <div class="color-box"></div>
            <p>Shop with US!</p>
        </div>
    </div>
    </div>

    <div class="flex-con">
        <div class="flex-box">
            <p>“The best way to predict the future is to invent it.” <br><br> - Alan Kay</p>
        </div>
        <div class="flex-box">
            <p>“Innovation distinguishes between a leader and a follower.” <br> <br> - Steve Jobs</p>
        </div>
        <div class="flex-box">
            <p>“The only way to do great work is to love what you do.” <br> <br> - Steve Jobs</p>
        </div>
    </div>

    

    <script>
        var menulist = document.getElementById("menulist");
        menulist.style.maxHeight = "0px";

        function togglemenu() {
            if (menulist.style.maxHeight == "0px") {
                menulist.style.maxHeight = "130px";
            } else {
                menulist.style.maxHeight = "0px";
            }
        }
    </script>
    </div>
</body>

</html>