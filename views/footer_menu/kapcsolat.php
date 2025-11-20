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
                    <button type="button" class="btn btn-primary" id="idopont" name="idopont" onclick="openCalendar()">Időpont foglalás</button>
                    <form method="post" action="" name="" name="calendar" id="calendar" class="shake" style="display:none;">
                        <div class="mb-3">
                            <div class="calendar-container">
                                <div class="calendar-header">
                                    <button type="button" id="prevMonth">&lt;</button>
                                    <h2 id="monthYear"></h2>
                                    <button type="button" id="nextMonth">&gt;</button>
                                </div>
                                <table class="calendar-table">
                                    <thead>
                                        <tr>
                                            <th>H</th>
                                            <th>K</th>
                                            <th>Sze</th>
                                            <th>Cs</th>
                                            <th>P</th>
                                            <th>Szo</th>
                                            <th>V</th>
                                        </tr>
                                    </thead>
                                    <tbody id="calendar-body"></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-3">
                            <select name="valasztas" id="valasztas" class="form-select radius-input">
                                <option value="" selected>Időpont választás</option>
                                <option value="8:30">8:30</option>
                                <option value="9:00">9:00</option>
                                <option value="9:30">9:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary" id="submit2" form="calendar" onclick="calendarForm()">Lefoglalás</button>
                        <div id="calendarSubmit"></div>
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