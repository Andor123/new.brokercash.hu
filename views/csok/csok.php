<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">CSOK</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">Kezdőlap</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <section id="content-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 the-company animate__animated animate__fadeIn">
                    <?php
                    $sql = "SELECT page_content FROM site_pages WHERE page_title='CSOK'";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo $row['page_content'];
                        }
                    }
                    ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animate__animated animate__fadeIn">
                    <div class="btn btn-primary" onclick="contactBox3()">Visszahívást kérek</div>
                    <a class="btn btn-primary" href="./index.php?pg=kapcsolat">Kérem</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('views/footer.php');
?>