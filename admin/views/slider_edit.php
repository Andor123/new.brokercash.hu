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
                <h1 class="section-title admin-page-title">Slider tartalmának szerkesztése</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="slider_edit" id="slider_edit" class="shake">
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = mysqli_real_escape_string($connection, $_GET['id']);

                                    $sql = "SELECT id, title, content FROM carousel WHERE id = '$id'";
                                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <div class="mb-3">
                                                <input type="name" class="form-control radius-input" id="name" name="name" value="<?php echo $row['title']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <textarea rows="11" class="form-control flat-input" id="content" name="content" value="<?php echo $row['content']; ?>"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                            </div>
                                            <button type="button" class="btn btn-primary" id="submit" form="slider_edit" onclick="sliderEdit()">Mentés</button>
                                            <div id="msgSubmit"></div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
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