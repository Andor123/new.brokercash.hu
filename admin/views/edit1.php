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
                    <h2 class="center">A szerkesztendő menűpontok listája</h2>
                    <?php
                    $sql = "SELECT id, main_menu_name FROM site_main_menu";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="center">
                        <a href="./index.php?pg=edit_menu&id=<?php echo $row['id']; ?>"><?php echo $row['main_menu_name']; ?></a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('footer.php');
?>