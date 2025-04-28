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
                            <a class="tab nav-link active" href="./index.php?pg=lakossagi-hiteligenyles">
                                <h2 class="blog-title loan-form-title">Lakossági hitel</h2>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="tab nav-link" href="./index.php?pg=vallalati-hiteligenyles">
                                <h2 class="blog-title loan-form-title">Vállalati hitel</h2>
                            </a>
                        </li>
                    </ul>
                    <div class="genericForm">
                        <div class="post">
                            <p>Töltse ki az adatlapot, kollégáink díjmentesen elkészítik a legjobb hitelajánlatot és felveszik Önnel a kapcsolatot.</p>
                            <form method="post" action="" name="lakossagi-hiteligenyles" id="lakossagi-hiteligenyles" class="shake" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <select id="hitelcel" name="hitelcel" class="form-select radius-input" required>
                                        <option value="" selected>A hitel célja</option>
                                        <option value="Ingatlan vásárlás">Ingatlan vásárlás</option>
                                        <option value="Szabadfelhasználás">Szabadfelhasználás</option>
                                        <option value="Adóságrendezés">Adóságrendezés</option>
                                        <option value="Korszerűsítés">Korszerűsítés/bővítés/felújítás</option>
                                        <option value="Hitelkiváltás">Hitelkiváltás</option>
                                        <option value="Lízing">Lízing</option>
                                        <option value="Támogatott lakáshitel">Támogatott lakáshitel</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control radius-input" id="hitelosszeg" name="hitelosszeg" placeholder="Mekkora hitelösszegre van szüksége?">
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Név*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control radius-input" id="telefon" name="telefon" placeholder="Telefon*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Email cím*" required>
                                </div>
                                <div class="mb-3">
                                    <textarea rows="11" class="form-control flat-input" id="uzenet" name="uzenet" placeholder="Milyen szolgáltatás érdekli, mire szeretne hitelt felvenni?"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control radius-input" id="dokumentum" name="dokumentum" placeholder="Dokumentum">
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
                                <button type="button" class="btn btn-primary" id="submit" form="lakossagi-hiteligenyles" onclick="lakossagiForm()">Küldés</button>
                                <div id="msgSubmit"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar">
                        <div class="popular-post widget">
                            <h4 class="widget-title">Lakossági hitelek</h4>
                            <ul>
                                <?php
                                    $sql = "SELECT page_url, page_title FROM site_pages WHERE main_menu_id='1'";
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