<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Kapcsolat</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">Kezdőlap</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <h3 class="small-title">Kérdése van? Küldjön nekünk üzenetet</h3>
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="kapcsolat" id="kapcsolat" class="shake" enctype="multiple/form-data">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Név*" required />
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefonszám*" required/>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Email cím*" required />
                                </div>
                                <div class="mb-3">
                                    <textarea rows="11" class="form-control flat-input" id="uzenet" name="uzenet" placeholder="Üzenet"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control radius-input" id="dokumentum" name="dokumentum" placeholder="Dokumentum" />
                                </div>
                                <button type="button" class="btn btn-primary" id="submit" form="kapcsolat" onclick="kapcsolatForm()">Küldés</button>
                                <div id="msgSubmit"></div>
                            </form>
                        </div>
                    </div>
                    <h3>Online konzultáció</h3>
                    <div class="btn btn-primary" id="idopont" name="idopont" onclick="openCalendar()">Időpont foglalás</div>
                    <form method="post" action="" name="" name="naptar" id="naptar" class="shake" style="display:none;">
                        <div class="calendar">
                            <iframe src="https://calendar.google.com/calendar/embed?src=58e52f88074965c4dc176005006b1d745d9cf4f4c3059c92e58f1e22a261dbe2%40group.calendar.google.com&ctz=Europe%2FBelgrade" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <h3 class="small-title">Elérhetőségeink</h3>
                    <div class="contact-info-wrapper">
                        <div class="contact-item-wrapper preset-bg">
                            <h4 id="contact-email">
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email cím</span>
                                <button class="g-recaptcha btn btn-primary" data-sitekey="6LdnQlsqAAAAAErMGSzajQPkVM1fmotT5arRrRls" data-callback="onSubmit" data-size="invisible">Felfedés</button>
                            </h4>
                            <h4 id="contact-tel">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Telefonszám</span>
                                <button class="g-recaptcha btn btn-primary" data-sitekey="6LdnQlsqAAAAAErMGSzajQPkVM1fmotT5arRrRls" data-callback="onSubmit2" data-size="invisible">Felfedés</button>
                            </h4>
                            <h4>
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>1137 Budapest, Katona József utca 23/A</span>
                            </h4>
                        </div>
                        <div class="contact-item-wrapper dark-bg">
                            <h4>
                                <i class="bi bi-clock"></i>
                                <span>Hétköznapokon 8:00 - 18:00 között</span>
                            </h4>
                            <h4>
                                <i class="bi bi-question-circle"></i>
                                <span>Hívjon minket bizalommal.</span>
                            </h4>
                            <h4>
                                <i class="bi" style="margin-left:28px;"></i>
                                <span>Kérjen visszahívást vagy küldjön üzenetet.</span>
                            </h4>
                            <div style="text-align:center;">
                                <div class="btn btn-primary" onclick="contactBox3()">Visszahívást kérek</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('views/footer.php');
?>