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
                <h1 class="section-title admin-page-title">Weboldal tartalmának szerkesztése</h1>
            </div>
        </div>
    </div>
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 animate__animated animate__fadeIn">
                    <div class="genericForm">
                        <div class="post">
                            <form method="post" action="" name="edit_page" id="edit_page" class="shake">
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = mysqli_real_escape_string($connection, $_GET['id']);

                                    $sql = "SELECT id, main_menu_id, page_url, page_title, page_content FROM site_pages WHERE id = '$id'";
                                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <div class="mb-3">
                                                <select id="main_menu" name="main_menu" class="form-select radius-input">
                                                    <option value="0" <?php if ($row['main_menu_id'] == 0) { ?>selected<?php } ?>>Főmenű opció</option>
                                                    <?php
                                                    $sql2 = "SELECT id, main_menu_name FROM site_main_menu";
                                                    $result2 = mysqli_query($connection, $sql2) or die(mysqli_error($connection));
                                                    if (mysqli_num_rows($result2) > 0) {
                                                        while ($row2 = mysqli_fetch_array($result2)) {
                                                            ?>
                                                            <option value="<?php echo $row2['id']; ?>" <?php if ($row2['id'] == $row['main_menu_id']) { ?>selected<?php } ?>>
                                                                <?php echo $row2['main_menu_name']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <input type="name" class="form-control radius-input" id="url" name="url" value="<?php echo $row['page_url']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <input type="name" class="form-control radius-input" id="name" name="name" value="<?php echo $row['page_title']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <textarea rows="11" class="form-control flat-input" id="content" name="content" value="<?php echo $row['page_content']; ?>"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                            </div>
                                            <button type="button" class="btn btn-primary" id="submit" form="edit_page" onclick="editPage()">Mentés</button>
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