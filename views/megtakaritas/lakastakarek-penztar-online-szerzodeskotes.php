<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Lakástakarékpénztár</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">Kezdőlap</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <section id="blog-page" class="the-company animate__animated animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="genericForm">
                        <div class="post">
                            <ul class="nav nav-tabs nav-fill form-step-header">
                                <li class="nav-item">
                                    <a class="nav-link active" id="lakastakarek1">
                                        <span class="stepNumber">1</span>
                                        <span class="stepDesc">
                                            <span>Szerződés</span>
                                            <br>
                                            <small>Szerződés adatai</small>
                                        </span>
                                    </a>
                                    <a class="nav-link" id="lakastakarek2">
                                        <span class="stepNumber">2</span>
                                        <span class="stepDesc">
                                            <span>Igénylő</span>
                                            <br>
                                            <small>Igénylő adatai</small>
                                        </span>
                                    </a>
                                    <a class="nav-link" id="lakastakarek3">
                                        <span class="stepNumber">3</span>
                                        <span class="stepDesc">
                                            <span>Kedvezményezett</span>
                                            <br>
                                            <small>Kedvezményezett adatai</small>
                                        </span>
                                    </a>
                                    <a class="nav-link" id="lakastakarek4">
                                        <span class="stepNumber">4</span>
                                        <span class="stepDesc">
                                            <span>Befejezés</span>
                                            <br>
                                            <small>Szerződés elküldése</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <form method="post" action="" name="szerzodes" id="szerzodes" class="shake">
                                <div class="mb-3">
                                    <select id="befizetes" name="befizetes" class="form-select radius-input">
                                        <option value="" selected>Befizetés módja</option>
                                        <option value="Csoportos">Csoportos beszedési megbízással</option>
                                        <option value="Kézpénzutalás">Kézpénzutalási megbízással</option>
                                        <option value="Egyéb">Egyéb módon</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select id="megtakaritas" name="megtakaritas" class="form-select radius-input">
                                        <option value="" selected>Megtakarítás típusa</option>
                                        <option value="Hozam plusz">Hozam plusz</option>
                                        <option value="Hitel plusz">Hitel plusz</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select id="futamido" name="futamido" class="form-select radius-input">
                                        <option value="" selected>Megtakarítás futamideje</option>
                                        <option value="45 hónap">45 hónap</option>
                                        <option value="57 hónap">57 hónap</option>
                                        <option value="72 hónap">72 hónap</option>
                                        <option value="96 hónap">96 hónap</option>
                                        <option value="120 hónap">120 hónap</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select id="osszeg" name="osszeg" class="form-select radius-input">
                                        <option value="" selected>Megtakarítás összege</option>
                                        <option value="2000 Ft">2000 Ft</option>
                                        <option value="2500 Ft">2500 Ft</option>
                                        <option value="3000 Ft">3000 Ft</option>
                                        <option value="3500 Ft">3500 Ft</option>
                                        <option value="4000 Ft">4000 Ft</option>
                                        <option value="4500 Ft">4500 Ft</option>
                                        <option value="5000 Ft">5000 Ft</option>
                                        <option value="5500 Ft">5500 Ft</option>
                                        <option value="6000 Ft">6000 Ft</option>
                                        <option value="6500 Ft">6500 Ft</option>
                                        <option value="7000 Ft">7000 Ft</option>
                                        <option value="7500 Ft">7500 Ft</option>
                                        <option value="8000 Ft">8000 Ft</option>
                                        <option value="8500 Ft">8500 Ft</option>
                                        <option value="9000 Ft">9000 Ft</option>
                                        <option value="9500 Ft">9500 Ft</option>
                                        <option value="10000 Ft">10000 Ft</option>
                                        <option value="10500 Ft">10500 Ft</option>
                                        <option value="11000 Ft">11000 Ft</option>
                                    </select>
                                </div>
                                <button type="button" id="next1" class="btn btn-primary" onclick="lakastakarek1()">Tovább</button>
                            </form>
                            <form method="post" action="" name="igenylo" id="igenylo" class="shake" style="display:none;">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Név*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="szuletsi-nev" name="szuletesi-nev" placeholder="Születési név">
                                </div>
                                <div class="mb-3">
                                    <select id="nem" name="nem" class="form-select radius-input">
                                        <option value="" selected>Neme</option>
                                        <option value="Férfi">Férfi</option>
                                        <option value="Nő">Nő</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="anyja-neve" name="anyja-neve" placeholder="Anyja születési neve">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szuletesi-hely" name="szuletesi-hely" placeholder="Születési hely">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szuletesi-ido" name="szuletesi-ido" placeholder="Születési ido">
                                </div>
                                <div class="mb-3">
                                    <select id="okmany-tipus" name="okmany-tipus" class="form-select radius-input">
                                        <option value="" selected>Azonosító okmány típusa</option>
                                        <option value="Személyi igazolvány">Személyi igazolvány</option>
                                        <option value="Jogosítvány">Jogosítvány</option>
                                        <option value="Útlevél">Útlevél</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="okmany-szam" name="okmany-szam" placeholder="Azonosító okmány száma">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="okmany-hatosag" name="okmany-hatosag" placeholder="Azonosító okmány kiállító hatóság">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="adoazonosito" name="adoazonosito" placeholder="Adóazonosító jel">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="allampolgarsag" name="allampolgarsag" placeholder="Állampolgárság">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="lakcimkartya" name="lakcimkartya" placeholder="Lakcímkártya száma">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefonszám*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Email cím*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="lakcim" name="lakcim" placeholder="Lakcím (írányítószámmal)">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="levelezesi-cim" name="levelezesi-cim" placeholder="Levelezési cím (írányítószámmal)">
                                </div>
                                <button type="button" id="prev1" class="btn btn-primary" onclick="lakastakarek2()">Vissza</button>
                                <button type="button" id="next2" class="btn btn-primary" onclick="lakastakarek3()">Tovább</button>
                            </form>
                            <form method="post" action="" name="kedvezmenyezett" id="kedvezmenyezett" class="shake" style="display:none;">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev2" name="nev2" placeholder="Név">
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="szuletsi-nev2" name="szuletesi-nev2" placeholder="Születési név">
                                </div>
                                <div class="mb-3">
                                    <select id="nem2" name="nem2" class="form-select radius-input">
                                        <option value="" selected>Neme</option>
                                        <option value="Férfi">Férfi</option>
                                        <option value="Nő">Nő</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="anyja-neve2" name="anyja-neve2" placeholder="Anyja születési neve">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szuletesi-hely2" name="szuletesi-hely2" placeholder="Születési hely">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szuletesi-ido2" name="szuletesi-ido2" placeholder="Születési ido">
                                </div>
                                <div class="mb-3">
                                    <select id="okmany-tipus2" name="okmany-tipus2" class="form-select radius-input">
                                        <option value="" selected>Azonosító okmány típusa</option>
                                        <option value="Személyi igazolvány">Személyi igazolvány</option>
                                        <option value="Jogosítvány">Jogosítvány</option>
                                        <option value="Útlevél">Útlevél</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="okmany-szam2" name="okmany-szam2" placeholder="Azonosító okmány száma">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="okmany-hatosag2" name="okmany-hatosag2" placeholder="Azonosító okmány kiállító hatóság">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="adoazonosito2" name="adoazonosito2" placeholder="Adóazonosító jel">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="allampolgarsag2" name="allampolgarsag2" placeholder="Állampolgárság">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="lakcimkartya2" name="lakcimkartya2" placeholder="Lakcímkártya száma">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon2" name="telefon2" placeholder="Telefonszám">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email2" name="email2" placeholder="Email cím">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="lakcim2" name="lakcim2" placeholder="Lakcím (írányítószámmal)">
                                </div>
                                <div class="mb-3">
                                    <select id="hozzatartozo" name="hozzatartozo" class="form-select radius-input">
                                        <option value="" selected>Hozzátartozói minőség</option>
                                        <option value="Gyermek">Gyermek</option>
                                        <option value="Unoka">Unoka</option>
                                        <option value="Testvér">Testvér</option>
                                        <option value="Házastárs">Házastárs</option>
                                        <option value="Élettárs">Bejegyzett élettárs</option>
                                        <option value="Szűlő">Szűlő</option>
                                        <option value="Nagyszülő">Nagyszülő</option>
                                        <option value="Örökbefogadott">Örökbefogadott, mostoha, nevelt gyermek</option>
                                        <option value="Örökbefogadó">Örökbefogadó, mostoha, nevelőszülő</option>
                                        <option value="Egyéb">Egyéb</option>
                                    </select>
                                </div>
                                <button type="button" id="prev2" class="btn btn-primary" onclick="lakastakarek4()">Vissza</button>
                                <button type="button" id="next3" class="btn btn-primary" onclick="lakastakarek5()">Tovább</button>
                            </form>
                            <form method="post" action="" name="befejezes" id="befejezes" class="shake" style="display:none;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="hirlevel" name="hirlevel" checked>
                                    <label class="form-check-label" for="hirlevel">
                                        Szeretnék feliratkozni a Brokercash Kft. hírlevél szolgálatára
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="adatvedelem" name="adatvedelem" onclick="checkButton()" required>
                                    <label class="form-check-label" for="adatvedelem">
                                        Elfogadom a Brokercash adatvédelmi szabályzatot és szerződés feltételeket
                                    </label>
                                    <div class="help-block has-error">Kérjük pipálja be ezt a mezőt.</div>
                                </div>
                                <button type="button" id="prev3" class="btn btn-primary" onclick="lakastakarek6()">Vissza</button>
                                <button type="button" id="submit" class="btn btn-primary" onclick="lakastakarekForm()">Küldés</button>
                                <div id="msgSubmit"></div>
                            </form>
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