<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Partnereket keresünk</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">Kezdőlap</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div id="partner-form" class="the-company animate__animated animate__fadeIn">
        <section id="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="post">
                            <?php
                            $sql = "SELECT page_content FROM site_pages WHERE page_title='Partnereket keresünk'";
                            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)) {
                                    echo $row['page_content'];
                                }
                            }
                            ?>
                            <div class="genericForm">
                                <form method="post" action="" name="partner" id="partner" class="shake">
                                    <div class="mb-3">
                                        <input type="name" class="form-control radius-input" id="nev" name="nev" placeholder="Teljes név*" required>
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
                                    <button type="button" class="btn btn-primary" id="submit" form="partner" onclick="partnerForm()">Küldés</button>
                                    <div id="msgSubmit"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
include('views/footer.php');
?>