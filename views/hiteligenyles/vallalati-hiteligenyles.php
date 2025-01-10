<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Hiteligénylés</h1>
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
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="tab nav-link" href="./index.php?pg=lakossagi-hiteligenyles">
                                <h2 class="blog-title loan-form-title">Lakossági hitel</h2>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="tab nav-link active" href="./index.php?pg=vallalati-hiteligenyles">
                                <h2 class="blog-title loan-form-title">Vállalati hitel</h2>
                            </a>
                        </li>
                    </ul>
                    <div class="genericForm">
                        <div class="post">
                            <p>Kérem töltse ki az alábbi űrlapot, lehetőség szerint minél több adatot adjon meg, hogy kollégáink teljeskörű tájékoztatást tudjanak adni az Ön részére. Tájékoztatásunk és ajánlatunk teljesen díjmentes. Igénylését követően felvesszük Önnel a kapcsolatot.</p>
                            <form method="post" action="" name="vallalati-hiteligenyles" id="vallalati-hiteligenyles" class="shake">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cegalapitas" id="cegvan" value="true" onclick="function1()" checked>
                                    <label class="form-check-label" for="cegvan">
                                        Rendelkezem saját céggel
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cegalapitas" id="cegnincs" value="false" onclick="function2()">
                                    <label class="form-check-label" for="cegnincs">
                                        Most szeretnék céget alapítani
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Teljes név*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefonos elérhetőség*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Email elérhetőség*" required>
                                </div>
                                <div class="mb-3" id="cegneve">
                                    <input type="name" class="form-control radius-input" id="cegnev" name="cegnev" placeholder="Cég neve">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="hitelosszeg" name="hitelosszeg" placeholder="Hitel összege">
                                </div>
                                <div class="mb-3">
                                    <select id="hitelcel" name="hitelcel" class="form-select radius-input" required>
                                        <option value="" selected>A hitel célja</option>
                                        <option value="Szabad felhasználású hitel">Szabad felhasználású hitel</option>
                                        <option value="Mikrohitel">Mikrohitel</option>
                                        <option value="Beruházási hitel">Beruházási hitel</option>
                                        <option value="Forgóeszköz hitel">Forgóeszköz hitel</option>
                                        <option value="Folyószámla hitel">Folyószámla hitel</option>
                                        <option value="NHP">NHP</option>
                                        <option value="Birtokfeljesztési hitel">Birtokfeljesztési hitel</option>
                                        <option value="Agrár Széchenyi Kártya">Agrár Széchenyi Kártya</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select id="ingatlan" name="ingatlan" class="form-select radius-input">
                                        <option value="" selected>Van-e bevonható ingatlanfedezet</option>
                                        <option value="Igen">Igen</option>
                                        <option value="Nem">Nem</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea rows="11" class="form-control flat-input" id="uzenet" name="uzenet" placeholder="Egyéb üzenet számunkra"></textarea>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="adatvedelem" name="adatvedelem" onclick="checkButton()" required>
                                    <label class="form-check-label" for="adatvedelem">
                                        Hozzájárulok, és felhatalmazom a Brokercash Kft. (Jogosult) hogy a rám vonatkozó bank-, értékpapír, - biztosítási-, pénztár-, üzleti titoknak, valamint személyes adatnak (továbbiakban együtt: Adatok) minősülő információkat és/vagy adatokat adatkezelés – ideértve az adatkezelések összekapcsolását is – és nyilvántartás céljára, a Brokercash Kft a szerződéses viszonyban és titoktartási kötelezettség alatt álló partnerei, megbízottjai részére továbbítsa. Felmentem a Jogosultat hogy a titoktartási kötelezettségét ebben a körben fenntartsa.
                                        <br>
                                        A Brokercash Kft. kijelenti, hogy a fenti adatok kezelését a mindenkori hatályos adatvédelmi törvények szerint végzi.
                                    </label>
                                    <div class="help-block has-error">Kérjük pipálja be ezt a mezőt.</div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="hirlevel" name="hirlevel" checked>
                                    <label class="form-check-label" for="hirlevel">
                                        Szeretnék feliratkozni a Brokercash Kft. hírlevél szolgálatára
                                    </label>
                                </div>
                                <button type="button" class="btn btn-primary" id="submit" form="vallalati-hiteligenyles" onclick="vallalatiForm()">Küldés</button>
                                <div id="msgSubmit"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar">
                        <div class="popular-post widget">
                            <h4 class="widget-title">Vállalati hitelek</h4>
                            <ul>
                                <?php
                                    $sql = "SELECT page_url, page_title FROM site_pages WHERE main_menu_id='2'";
                                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            echo '<li><a class="dropdown-item" href="./index.php?pg=' . $row['page_url'] . '">' . $row['page_title'] . '</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
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