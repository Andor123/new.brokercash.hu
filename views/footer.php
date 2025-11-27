            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 footer-widget load-hidden">
                            <p>
                                <a href="./">
                                    <img src="./img/logo.png" alt="Kezdőlap" />
                                </a>
                            </p>
                            <p>HITELIGÉNYLÉS GYORSAN EGYSZERŰEN</p>
                            <div class="social-links-bordered">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/brokercash.hu/" target="_blank"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 footer-widget load-hidden">
                            <ul class="nav flex-column">
                                <li class="nav-item tweet">
                                    <a class="nav-link" href="./index.php?pg=kapcsolat">Kapcsolat</a>
                                </li>
                                <li class="nav-item tweet">
                                    <a class="nav-link" href="./index.php?pg=rolunk">Rólunk</a>
                                </li>
                                <li class="nav-item tweet">
                                    <a class="nav-link" href="./index.php?pg=uzletszabalyzat">Üzletszabályzat</a>
                                </li>
                                <li class="nav-item tweet">
                                    <a class="nav-link" href="./pdf/panaszkezeles.pdf" target="_blank">Panaszkezelés</a>
                                </li>
                                <li class="nav-item tweet">
                                    <a class="nav-link" href="./index.php?pg=gyakran-ismetelt-kerdesek">GY.I.K.</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mapDiv" class="col-lg-6 col-md-12 footer-widget load-hidden">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5547.455795964405!2d19.047374614149103!3d47.51396133817969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc0eb700466d%3A0x8238466b357aece6!2sBudapest%2C+Katona+J%C3%B3zsef+u.+23a%2C+1137!5e0!3m2!1shu!2shu!4v1511383286783"
                                    width="100%" height="270" frameborder="0" style="border:0;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copyright-text">Copyright &copy; 2013-<?php echo date('Y'); ?> Brokercash Kft.</p>
                            </div>
                        <div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js" integrity="sha256-u0L8aA6Ev3bY2HI4y0CAyr9H8FRWgX4hZ9+K7C2nzdc=" crossorigin="anonymous"></script>
        <script src="./css/SlickNav/dist/jquery.slicknav.min.js"></script>
        <script>
            function function1() {
                document.getElementById("cegneve").style.display = "block";
            }
            function function2() {
                document.getElementById("cegneve").style.display = "none";
            }
            function lakastakarek1() {
                document.getElementById("lakastakarek1").classList.remove("active");
                document.getElementById("lakastakarek2").classList.add("active");
                document.getElementById("szerzodes").style.display = "none";
                document.getElementById("igenylo").style.display = "block";
            }
            function lakastakarek2() {
                document.getElementById("lakastakarek1").classList.add("active");
                document.getElementById("lakastakarek2").classList.remove("active");
                document.getElementById("szerzodes").style.display = "block";
                document.getElementById("igenylo").style.display = "none";
            }
            function lakastakarek3() {
                document.getElementById("lakastakarek2").classList.remove("active");
                document.getElementById("lakastakarek3").classList.add("active");
                document.getElementById("igenylo").style.display = "none";
                document.getElementById("kedvezmenyezett").style.display = "block";
            }
            function lakastakarek4() {
                document.getElementById("lakastakarek2").classList.add("active");
                document.getElementById("lakastakarek3").classList.remove("active");
                document.getElementById("igenylo").style.display = "block";
                document.getElementById("kedvezmenyezett").style.display = "none";
            }
            function lakastakarek5() {
                document.getElementById("lakastakarek3").classList.remove("active");
                document.getElementById("lakastakarek4").classList.add("active");
                document.getElementById("kedvezmenyezett").style.display = "none";
                document.getElementById("befejezes").style.display = "block";
            }
            function lakastakarek6() {
                document.getElementById("lakastakarek3").classList.add("active");
                document.getElementById("lakastakarek4").classList.remove("active");
                document.getElementById("kedvezmenyezett").style.display = "block";
                document.getElementById("befejezes").style.display = "none";
            }
            function cegalapitas1() {
                document.getElementById("cegalapitas1").classList.remove("active");
                document.getElementById("cegalapitas2").classList.add("active");
                document.getElementById("alapito").style.display = "none";
                document.getElementById("alapitando-ceg").style.display = "block";
            }
            function cegalapitas2() {
                document.getElementById("cegalapitas1").classList.add("active");
                document.getElementById("cegalapitas2").classList.remove("active");
                document.getElementById("alapito").style.display = "block";
                document.getElementById("alapitando-ceg").style.display = "none";
            }
            function cegalapitas3() {
                document.getElementById("cegalapitas2").classList.remove("active");
                document.getElementById("cegalapitas3").classList.add("active");
                document.getElementById("alapitando-ceg").style.display = "none";
                document.getElementById("kapcsolattarto").style.display = "block";
            }
            function cegalapitas4() {
                document.getElementById("cegalapitas2").classList.add("active");
                document.getElementById("cegalapitas3").classList.remove("active");
                document.getElementById("alapitando-ceg").style.display = "block";
                document.getElementById("kapcsolattarto").style.display = "none";
            }
            function cegalapitas5() {
                document.getElementById("cegalapitas3").classList.remove("active");
                document.getElementById("cegalapitas4").classList.add("active");
                document.getElementById("kapcsolattarto").style.display = "none";
                document.getElementById("befejezes").style.display = "block";
            }
            function cegalapitas6() {
                document.getElementById("cegalapitas3").classList.add("active");
                document.getElementById("cegalapitas4").classList.remove("active");
                document.getElementById("kapcsolattarto").style.display = "block";
                document.getElementById("befejezes").style.display = "none";
            }
            function contactBox1() {
                document.getElementById("contact-button").classList.add("show-quick-box");
                document.getElementById("question-button").classList.add("show-quick-box");
                document.getElementById("calculator-button").classList.add("show-quick-box");
                document.getElementById("contact-box").style.right = "0";
                document.getElementById("contact-box").style.width = "0";
                document.getElementById("contact-content").style.display = "none";
                document.getElementById("question-content").style.display = "none";
                document.getElementById("calculator-content").style.display = "none";
            }
            function contactBox2() {
                document.getElementById("contact-button").classList.remove("show-quick-box");
                document.getElementById("question-button").classList.add("show-quick-box");
                document.getElementById("calculator-button").classList.add("show-quick-box");
                document.getElementById("contact-box").style.right = "0";
                document.getElementById("contact-box").style.width = "200px";
                document.getElementById("contact-content").style.display = "block";
                document.getElementById("question-content").style.display = "none";
                document.getElementById("calculator-content").style.display = "none";
            }
            function contactBox3() {
                document.getElementById("contact-button").classList.add("show-quick-box");
                document.getElementById("question-button").classList.remove("show-quick-box");
                document.getElementById("calculator-button").classList.add("show-quick-box");
                document.getElementById("contact-box").style.right = "0";
                document.getElementById("contact-box").style.width = "250px";
                document.getElementById("contact-content").style.display = "none";
                document.getElementById("question-content").style.display = "block";
                document.getElementById("calculator-content").style.display = "none";
            }
            function contactBox4() {
                document.getElementById("contact-button").classList.add("show-quick-box");
                document.getElementById("question-button").classList.add("show-quick-box");
                document.getElementById("calculator-button").classList.remove("show-quick-box");
                document.getElementById("contact-box").style.right = "0";
                document.getElementById("contact-box").style.width = "250px";
                document.getElementById("contact-content").style.display = "none";
                document.getElementById("question-content").style.display = "none";
                document.getElementById("calculator-content").style.display = "block";
            }
            function closeCalculator() {
                document.getElementById("calculator-button").classList.add("show-quick-box");
                document.getElementById("contact-box").style.right = "0";
                document.getElementById("contact-box").style.width = "0";
                document.getElementById("calculator-container").style.display = "none";
                document.getElementById("calculator-content").style.display = "none";
            }
            function openCalendar() {
                document.getElementById("idopont").style.display = "none";
                document.getElementById("calendar").style.display = "block";
                document.getElementById("approved").style.display = "block";
            }
        </script>
        <script>
            window.onscroll = function() {navbarScroll()};

            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function navbarScroll() {
                if (window.scrollY >= sticky) {
                    navbar.classList.remove("affix-top");
                    navbar.classList.add("affix");
                } else {
                    navbar.classList.add("affix-top");
                    navbar.classList.remove("affix");
                }
            }
        </script>
        <script>
            ScrollReveal().reveal('.section-title', { easing: 'ease-in-out' });
            ScrollReveal().reveal('.service-item', { easing: 'ease-in-out' });
            ScrollReveal().reveal('.team-member', { easing: 'ease-in-out' });
            ScrollReveal().reveal('.progress-item', { easing: 'ease-in-out' });
            ScrollReveal().reveal('.client-item-wrapper', { easing: 'ease-in-out' });
            ScrollReveal().reveal('.footer-widget', { easing: 'ease-in-out' });
        </script>
        <script>
            function checkButton() {
                var adatVedelem = document.getElementById("adatvedelem");
                var errorMsg = document.querySelector(".has-error");
                if (adatVedelem.checked == true) {
                    errorMsg.style.display = "none";
                } else {
                    errorMsg.style.display = "block";
                }
            }
        </script>
        <script src="./js/script.js"></script>
        <script src="./js/script2.js"></script>
        <script src="./js/script3.js"></script>
        <script src="./js/script4.js"></script>
        <script src="./js/script5.js"></script>
        <script src="./js/script6.js"></script>
        <script src="./js/script7.js"></script>
        <script src="./js/script8.js"></script>
        <script src="./js/script9.js"></script>
        <script src="./js/script10.js"></script>
        <script src="./js/script11.js"></script>
        <script src="./js/calendar.js"></script>
    </body>
</html>