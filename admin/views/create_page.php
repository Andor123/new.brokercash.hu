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
                <h1 class="section-title admin-page-title">Új oldal létrehozása</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="create_page" id="create_page" class="shake">
                                <div class="mb-3">
                                    <select id="main_menu" name="main_menu" class="form-select radius-input">
                                        <option value="0">Főmenű opció</option>
                                        <?php
                                        $sql = "SELECT id, main_menu_name FROM site_main_menu";
                                        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['main_menu_name']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="url" name="url" placeholder="Az oldal URL-je">
                                </div>
                                <div class="mb-3">
                                    <input type="name" class="form-control radius-input" id="name" name="name" placeholder="Az oldal neve">
                                </div>
                                <div class="mb-3">
                                    <textarea rows="11" class="form-control flat-input" id="content" name="content" placeholder="Az oldal tartalma"></textarea>
                                </div>
                                <button type="button" class="btn btn-primary" id="submit" form="create_page" onclick="createPage()">Mentés</button>
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