<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brokercash Kft.</title>
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/lovelo?styles=25962" rel="stylesheet">
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/SlickNav/dist/slicknav.css">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/custom.css">
        <link rel="stylesheet" href="./css/nav-menu.css">
        <link rel="stylesheet" href="./css/carousel-slider.css">
        <link rel="stylesheet" href="./css/social.css">
        <link rel="stylesheet" href="./css/services.css">
        <link rel="stylesheet" href="./css/accordion.css">
        <link rel="stylesheet" href="./css/blog.css">
        <link rel="stylesheet" href="./css/orange.css">
        <link rel="stylesheet" href="./css/buttons.css">
        <link rel="stylesheet" href="./css/responsive.css">
        <link rel="stylesheet" href="./css/cookie.css">
        <link rel="stylesheet" href="./css/calendar.css">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            function onSubmit(token) {
                var contactEmail = document.getElementById("contact-email");
                contactEmail.addEventListener('click', function() {
                    if (grecaptcha.execute()) {
                        var response = grecaptcha.getResponse();
                        var text = "";
                        if (response.length == 0) {
                            contactEmail.querySelector("span").innerHTML = "E-mail cím";
                            return false;
                        } else {
                            contactEmail.querySelector("span").innerHTML = "info@brokercash.hu";
                            return true;
                        }
                    }
                });
            }
            function onSubmit2(token) {
                var contactTel = document.getElementById("contact-tel");
                contactTel.addEventListener('click', function() {
                    if (grecaptcha.execute()) {
                        var response = grecaptcha.getResponse();
                        var text = "";
                        if (response.length == 0) {
                            contactTel.querySelector("span").innerHTML = "Telefonszám";
                            return false;
                        } else {
                            contactTel.querySelector("span").innerHTML = "+36-70-607-9403";
                            return true;
                        }
                    }
                });
            }
        </script>
    </head>
    <body>
        <div id="consentBox">
            <img src="./img/logo.png" alt="Logo">
            <div id="container consentContent">
                <header id="consentHeader">
                    Sütik: A választás az Öné
                </header>
                <p>
                    Sütiket használunk, hogy weboldalunk jól működjön az Ön számára, és hogy folyamatosan fejleszteni tudjuk azt.
                    <br>
                    Az oldal működéséhez szükséges sütik mindig be vannak kapcsolva.
                    <br>
                    További információk megtalálhatók <a href="./pdf/adatvedelmi_nyilatkozat.pdf" target="_blank">itt</a>.
                </p>
                <div class="buttons">
                    <button class="consentButton">
                        Sütik elfogadása
                    </button>
                    <button class="rejectButton">
                        Elutasítás
                    </button>
                </div>
            </div>
        </div>
        <div id="app">