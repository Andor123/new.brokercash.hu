<?php
include('header.php');
?>
<div>
    <div class="admin-page-header">
        <div class="admin-page-header-inner">
            <div class="container">
                <p>
                    <a href="./">
                        <img src="../img/logo.png" alt="Kezdőlap" />
                    </a>
                </p>
                <?php
                if (isset($_SESSION['nev'])) {
                ?>
                <h1 class="section-title admin-page-title">Üdv, <?php echo $_SESSION['nev'] ?></h1>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <h2 class="center">Teendők</h2>
                    <hr>
                    <h3 class="center">Menűpontok<h3>
                    <h4 class="center">
                        <a href="./index.php?pg=create_menu">Új menűpont létrehozása</a>
                    </h4>
                    <h4 class="center">
                        <a href="./index.php?pg=edit1">Menűpont szerkesztése</a>
                    </h4>
                    <h4 class="center">
                        <a href="./index.php?pg=delete1">Menűpont törlése</a>
                    </h4>
                    <hr>
                    <h3 class="center">Oldalak<h3>
                    <h4 class="center">
                        <a href="./index.php?pg=create_page">Új oldal létrehozása</a>
                    </h4>
                    <h4 class="center">
                        <a href="./index.php?pg=edit">Weboldal tartalmának szerkesztése</a>
                    </h4>
                    <h4 class="center">
                        <a href="./index.php?pg=delete">Weboldal tartalmának törlése</a>
                    </h4>
                    <hr>
                    <h3 class="center">Slider</h3>
                    <h4 class="center">
                        <a href="./index.php?pg=slider">Slider tartalmának szerkesztése</a>
                    </h4>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('footer.php');
?>