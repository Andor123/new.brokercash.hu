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
                <h1 class="section-title admin-page-title">Menűpont szerkesztése</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="edit_menu" id="edit_menu" class="shake">
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = mysqli_real_escape_string($connection, $_GET['id']);

                                    $sql = "SELECT id, main_menu_name FROM site_main_menu WHERE id = '$id'";
                                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <div class="mb-3">
                                                <input type="name" class="form-control radius-input" id="name" name="name" value="<?php echo $row['main_menu_name']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                            </div>
                                            <button type="button" class="btn btn-primary" id="submit" form="edit_menu" onclick="editMenu()">Mentés</button>
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