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
                <h1 class="section-title admin-page-title">Weboldal tartalmának törlése</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="delete_page" id="delete_page" class="shake">
                                <p>Az oldal törléséhez a <strong>Mentés</strong> gombra kell kattintani.</p>
                                <div class="mb-3">
                                    <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">
                                </div>
                                <button type="button" class="btn btn-primary" id="submit" form="delete_page" onclick="deletePage()">Mentés</button>
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