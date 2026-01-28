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
                <h1 class="section-title admin-page-title">Admin Bejelentkezés</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="login" id="login" class="shake">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Felhasználónév*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control radius-input" id="jelszo" name="jelszo" placeholder="Jelszó*" required>
                                </div>
                                <button type="submit" class="btn btn-primary" form="login">Belépés</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('footer.php');
?>