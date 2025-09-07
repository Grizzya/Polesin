<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Polesin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>



    </style>
</head>
<body>

    <header class="header-wrapper">
        <div class="top-bar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}">
                <img src="{{ asset('images/PolishingTULISAN.png') }}">
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=61578227744281&locale=id_ID" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6281399355590" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/polesinbali" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="nav-bar">
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/services') }}">Service</a></li>
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=6281399355590" target="_blank">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

</body>
</html>
