<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Személyi kölcsön</h1>
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
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="tab nav-link" href="./index.php?pg=provident">
                                <h2 class="blog-title loan-form-title">Provident</h2>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="tab nav-link active" href="./index.php?pg=gyorskolcson">
                                <h2 class="blog-title loan-form-title">Személyi kölcsön</h2>
                            </a>
                        </li>
                    </ul>
                    <div id="other-quick-loan">
                        <div class="genericForm">
                            <div class="post">
                                <p style="text-align:center;">
                                    <strong>Esküvő, családi nyaralás, iskolakezdés, váratlan kiadás?</strong>
                                    <br>
                                    Vagy csak egyszerűen készpénzre van szüksége?
                                    <br>
                                    Megoldás lehet Önnek a <strong>szabad felhasználású kölcsön.</strong>
                                    <br>
                                    30 000 - 440 000 Ft
                                    <br>
                                    42, 57, 76, 112 hetes futamidő
                                    <br>
                                    kezes és fedezet nélkül
                                    <br>
                                    szabad felhasználású
                                    <br>
                                    a törlesztőrészletek a teljes futamidő alatt változatlanok, nincs árfolyam- vagy kamatkockázat
                                    <br>
                                    a kölcsön folyósítása és a heti törlesztőrészletek megfizetése banki átutalás útján történik
                                    <br>
                                    Az igénylés feltételei:
                                    <br>
                                    legalább 18 éves életkor
                                    <br>
                                    bejelentett magyarországi lakcím
                                    <br>
                                    igazolt rendszeres jövedelem
                                    <br>
                                    érvényes azonosító okmány
                                    <br>
                                    saját vagy közös tulajdonú lakossági bankszámla (kivéve, ha az ügyfél az Otthoni Szolgáltatás igénybe veszi)
                                </p>
                                <form method="post" action="" name="gyorskolcson" id="gyorskolcson" class="shake">
                                    <div class="mb-3">
                                        <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Név*" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="name" class="form-control radius-input" id="szuletesi-nev" name="szuletesi-nev" placeholder="Születési név">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control radius-input" id="szuletesi-hely-ido" name="szuletesi-hely-ido" placeholder="Születési hely, idő">
                                    </div>
                                    <div class="mb-3">
                                        <input type="name" class="form-control radius-input" id="anyja-neve" name="anyja-neve" placeholder="Anyja neve">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control radius-input" id="lakcim" name="lakcim" placeholder="Lakcím">
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefonszám*" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Email cím*" required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea rows="11" class="form-control flat-input" id="uzenet" name="uzenet" placeholder="Üzenet"></textarea>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="true" id="adatvedelem" name="adatvedelem" onclick="checkButton()" required>
                                        <label class="form-check-label" for="adatvedelem">
                                            Elfogadom az <a href="./pdf/adatvedelmi_nyilatkozat.pdf" target="_blank">adatvédelmi nyilatkozatot</a>
                                        </label>
                                        <div class="help-block has-error">Kérjük pipálja be ezt a mezőt.</div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="true" id="hirlevel" name="hirlevel" checked>
                                        <label class="form-check-label" for="hirlevel">
                                            Szeretnék feliratkozni a Brokercash Kft. hírlevél szolgálatára
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="submit" form="gyorskolcson" onclick="gyorskolcsonForm()">Küldés</button>
                                    <div id="msgSubmit"></div>
                                </form>
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