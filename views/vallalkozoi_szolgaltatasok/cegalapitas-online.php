<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Cégalapítás</h1>
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
                            <p>Kérem töltse ki az alábbi űrlapot, lehetőség szerint minél több adatot adjon meg, hogy kollégáink teljeskörű tájékoztatást tudjanak adni az Ön részére. Tájékoztatásunk és ajánlatunk teljesen díjmentes. Igénylését követően felvesszük Önnel a kapcsolatot.</p>
                            <ul class="nav nav-tabs nav-fill form-step-header">
                                <li class="nav-item">
                                    <a class="nav-link active" id="cegalapitas1">
                                        <span class="stepNumber">1</span>
                                        <span class="stepDesc">
                                            <span>Alapító</span>
                                            <br>
                                            <small>Alapító adatai</small>
                                        </span>
                                    </a>
                                    <a class="nav-link" id="cegalapitas2">
                                        <span class="stepNumber">2</span>
                                        <span class="stepDesc">
                                            <span>Alapítandó cég</span>
                                            <br>
                                            <small>Alapítandó cég adatai</small>
                                        </span>
                                    </a>
                                    <a class="nav-link" id="cegalapitas3">
                                        <span class="stepNumber">3</span>
                                        <span class="stepDesc">
                                            <span>Kapcsolattartó</span>
                                            <br>
                                            <small>Kapcsolattartó adatai</small>
                                        </span>
                                    </a>
                                    <a class="nav-link" id="cegalapitas4">
                                        <span class="stepNumber">4</span>
                                        <span class="stepDesc">
                                            <span>Befejezés</span>
                                            <br>
                                            <small>Igénylés elküldése</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <form method="post" action="" name="alapito" id="alapito" class="shake">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Név*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Email cím*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefonszám*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="szuletsi-nev" name="szuletesi-nev" placeholder="Születési név">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="lakcim" name="lakcim" placeholder="Lakcím (írányítószámmal)">
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
                                    <input type="text" class="form-control radius-input" id="igazolvany-szam" name="igazolvany-szam" placeholder="Személyi igazolvány száma">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="lakcimkartya" name="lakcimkartya" placeholder="Lakcímkártya száma">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szemelyi-szam" name="szemelyi-szam" placeholder="Személyi száma">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="adoazonosito" name="adoazonosito" placeholder="Adóazonosító jel">
                                </div>
                                <button type="button" id="next1" class="btn btn-primary" onclick="cegalapitas1()">Tovább</button>
                            </form>
                            <form method="post" action="" name="alapitando-ceg" id="alapitando-ceg" class="shake" style="display:none;">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="cegnev" name="cegnev" placeholder="Cégnév">
                                    <div>
                                        Elérhetőség ellenőrzése: <a href="https://www.e-cegjegyzek.hu/" target="_blank">e-cegjegyzek.hu</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szekhely" name="szekhely" placeholder="Székhely címe">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="telephely" name="telephely" placeholder="Telephely">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="tevekenyseg" name="tevekenyseg" placeholder="Főtevékenység">
                                    <div>
                                        Segítség itt: <a href="https://teaorszamok.hu/" target="_blank">teaorszamok.hu</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="egyeb" name="egyeb" placeholder="Egyéb tevékenység">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="szemelyek" name="szemelyek" placeholder="Hány személyes a kft?">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="torzstoke" name="torzstoke" placeholder="Törzstöke összege">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="ceg-email" name="ceg-email" placeholder="Cég email címe">
                                </div>
                                <div class="mb-3">
                                    <select id="adozasi-forma" name="adozasi-forma" class="form-select radius-input">
                                        <option value="" selected>Adózási forma</option>
                                        <option value="Általános adózás">Általános adózás</option>
                                        <option value="Alanyi adómentes">Alanyi adómentes</option>
                                        <option value="Tárgyi adómentes">Tárgyi adómentes tevékenységtől függően</option>
                                        <option value="Egyéb">Egyéb speciális adózási forma</option>
                                    </select>
                                </div>
                                <button type="button" id="prev1" class="btn btn-primary" onclick="cegalapitas2()">Vissza</button>
                                <button type="button" id="next2" class="btn btn-primary" onclick="cegalapitas3()">Tovább</button>
                            </form>
                            <form method="post" action="" name="kapcsolattarto" id="kapcsolattarto" class="shake" style="display:none;">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev2" name="nev2" placeholder="Kapcsolattartó neve">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email2" name="email2" placeholder="Kapcsolattartó email">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon2" name="telefon2" placeholder="Kapcsolattartó telefonszám">
                                </div>
                                <div class="mb-3">
                                    <textarea rows="11" class="form-control flat-input" id="megjegyzes" name="megjegyzes" placeholder="Megjegyzés"></textarea>
                                </div>
                                <button type="button" id="prev2" class="btn btn-primary" onclick="cegalapitas4()">Vissza</button>
                                <button type="button" id="next3" class="btn btn-primary" onclick="cegalapitas5()">Tovább</button>
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
                                <button type="button" id="prev3" class="btn btn-primary" onclick="cegalapitas6()">Vissza</button>
                                <button type="button" id="submit" class="btn btn-primary" onclick="cegalapitasForm()">Küldés</button>
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