<header id="header-wrap">
    <div id="roof">
        <div class="container">
            <div class="row">
                <div class="quick-contacts col-lg-8 col-md-12">
                    <span class="info">
                        <i class="bi bi-geo-alt-fill"></i>
                        <a id="map" href="#mapDiv" rel="nofollow">1137 Budapest, Katona József utca 23/A</a>
                    </span>
                    <span class="info">
                        <i class="bi bi-telephone-fill"></i>
                        <a id="tel" href="tel:+36-70-607-9403" rel="nofollow">+36-70-607-9403</a>
                    </span>
                    <span class="info">
                        <i class="bi bi-envelope-fill"></i>
                        <a id="mail" href="mailto:info@brokercash.hu" rel="nofollow">info@brokercash.hu</a>
                    </span>
                </div>
                <div class="social-links col-lg-4 d-none d-sm-none d-md-none d-lg-block">
                    <a href="#" class="social-link" title="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/brokercash.hu/" class="social-link" title="Facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav id="navbar" class="navbar navbar-default navbar-plain affix-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img src="./img/logo.png" alt="Kezdőlap" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column" id="navbarContent">
                <ul class="navbar-nav">
                    <?php
                    $sql = "SELECT id, main_menu_name FROM site_main_menu";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $row['main_menu_name'] ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                        $id = $row['id'];
                                        $sql2 = "SELECT page_url, page_title FROM site_pages WHERE main_menu_id='$id'";
                                        $result2 = mysqli_query($connection, $sql2) or die(mysqli_error($connection));
                                        if (mysqli_num_rows($result2) > 0) {
                                            while($row2 = mysqli_fetch_array($result2)) {
                                                echo '<li><a class="dropdown-item" href="./index.php?pg=' . $row2['page_url'] . '">' . $row2['page_title'] . '</a></li>';
                                            }
                                        }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="quick-menu-box">
            <a href="tel:+36-70-607-9403" class="quick-call" rel="nofollow">
                <i class="bi bi-telephone-fill"></i>
            </a>
            <div id="contact-box" class="quick-contact-box quick-box" style="right: 0; width: 0; background-color: rgb(221, 221, 221);">
                <div id="contact-content" class="quick-contact-content quick-box-content" style="display:none;">
                    <i class="bi bi-x" onclick="contactBox1()"></i>
                    <h2 class="blog-title">Elérhetőségeink</h2>
                    <p>
                        <i class="bi bi-envelope-fill"></i>
                        <span>info@brokercash.hu</span>
                    </p>
                    <p>
                        <i class="bi bi-telephone-fill"></i>
                        <span>+36-70-607-9403</span>
                    </p>
                    <p>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>1137 Budapest, Katona József utca 23/A</span>
                    </p>
                    <div style="text-align:center;">
                        <a class="btn btn-primary" href="./index.php?pg=kapcsolat">Írjon nekünk</a>
                    </div>
                </div>
                <div id="question-content" class="quick-question-content quick-box-content" style="display:none;">
                    <i class="bi bi-x" onclick="contactBox1()"></i>
                    <div id="callBackForm" class="animate__animated animate__fadeIn">
                        <div class="genericForm">
                            <div class="post">
                                <p>Töltse ki az adatlapot, kollégáink felveszik Önnel a kapcsolatot.</p>
                                <form method="post" action="" name="question" id="question" class="shake">
                                    <div class="mb-3">
                                        <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Név*" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefonszám*" required>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="submit" form="question" onclick="questionForm()">Visszahívást kérek</button>
                                    <div id="msgSubmit2"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="calculator-content" class="quick-calculator-content quick-box-content" style="display:none;">
                    <i class="bi bi-x" onclick="contactBox1()"></i>
                    <div id="loanCalculator" class="animate__animated animate__fadeIn">
                        <div class="genericForm">
                            <div class="post">
                                <form method="post" action="" name="calculator" id="calculator" class="shake">
                                    <div class="mb-3 withTrigger">
                                        <input type="number" class="form-control radius-input" id="hitelosszeg" name="hitelosszeg" placeholder="Hitelösszeg">
                                        <span class="triggerText">Ft</span>
                                    </div>
                                    <div class="mb-3 withTrigger">
                                        <input type="number" class="form-control radius-input" id="futamido" name="futamido" placeholder="Futamidő">
                                        <span class="triggerText">hónap</span>
                                    </div>
                                    <div class="mb-3 withTrigger">
                                        <input type="number" class="form-control radius-input" id="kamat" name="kamat" placeholder="Kamat">
                                        <span class="triggerText">%</span>
                                    </div>
                                    <div class="mb-3">
                                        <select id="tipus" name="tipus" class="form-select radius-input">
                                            <option value="" selected>Típus</option>
                                            <option value="Lineáris">Lineáris</option>
                                            <option value="Annuitásos">Annuitásos</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="submit" form="calculator" onclick="calculatorForm()">Számol</button>
                                    <div id="msgSubmit3"></div>
                                </form>
                            </div>
                        </div>
                        <div id="calculator-container" class="hidden calculator-result-container">
                            <div class="calculator-result-content">
                                <i class="bi bi-x" onclick="closeCalculator()"></i>
                                <div id="calculator-result" class="calculator-result-scroller"></div>
                                <div class="bottom-text">*Az összegek tájékoztató jellegűek, 
                                    a számított összegek függenek a befizetett összeg nagyságától, és idejétől is. 
                                    Előtörlesztés esetén a kamatok is csökkennek. Változó kamatozású konstrukció 
                                    esetén a kamat mértéke a mindenkori jegybanki kamattal együtt változik.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact-button" class="open-quick-box show-quick-box" onclick="contactBox2()">
                    <i class="bi bi-file-person-fill"></i>
                    <div class="quick-box-active-indicator"></div>
                </div>
                <div id="question-button" class="open-quick-box quick-question show-quick-box" onclick="contactBox3()">
                    <i class="bi bi-question-circle"></i>
                    <div class="quick-box-active-indicator"></div>
                </div>
                <div id="calculator-button" class="open-quick-box quick-calculator show-quick-box" onclick="contactBox4()">
                    <i class="bi bi-calculator-fill"></i>
                    <div class="quick-box-active-indicator"></div>
                </div>
            </div>
        </div>
    </nav>
</header>