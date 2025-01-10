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
                <h1 class="section-title admin-page-title">Új menűpont létrehozása</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="create_menu" id="create_menu" class="shake">
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="name" name="name" placeholder="A menűpont neve">
                                </div>
                                <button type="button" class="btn btn-primary" id="submit" form="create_menu" onclick="createMenu()">Mentés</button>
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
include('footer.php');
?>