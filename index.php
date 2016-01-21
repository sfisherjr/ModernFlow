<!DOCTYPE>
<html>

<head>
    <title>Vapor Venue</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="nav-container">
        <ul class="nav-list">
            <li class="nav-item"><a id="nav_home" href="#">Home</a></li>
            <li class="nav-item"><a id="nav_juice" href="#">E-Liquid</a></li>
            <li class="nav-item"><a id="nav_mods" href="#">Mods</a></li>
            <li class="nav-item"><a id="nav_contact" href="#">Find Us</a></li>
        </ul>
    </div>

    <div id="logo-page" class="alt-page-1">
        <span class="mid-helper"></span>
        <img src="img/logo.png" width="50%" />
    </div>

    <div id="juice-page" class="alt-page-2">
    </div>

    <div id="mod-page" class="alt-page-1">
    </div>

    <div id="final-page" class="alt-page-2">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/clickscroll.js"></script>
    <script type="text/javascript">
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();

        if (scroll > 0)
        {
            $(".nav-container").addClass("scrolling");
        }
        else if (scroll <= 0)
        {
            $(".nav-container").removeClass("scrolling");
        }
    });
    </script>
</body>

</html>
