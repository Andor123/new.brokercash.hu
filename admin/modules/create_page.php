<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $main_menu = mysqli_real_escape_string($connection, $_POST['main_menu']);
    $url = mysqli_real_escape_string($connection, $_POST['url']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $content = mysqli_real_escape_string($connection, $_POST['content']);

    $sql = "INSERT INTO site_pages (main_menu_id, page_url, page_title, page_content) 
        VALUES ('$main_menu', '$url', '$name', '$content')";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $mfile = "../modules/" . $url . ".php";
    $module_file = fopen($mfile, "w") or die("Unable to open file");
    $txt = "<?php
    include_once('views/" . $url . ".php');
    ?>";
    fwrite($module_file, $txt);
    fclose($module_file);

    $vfile = "../views/" . $url . ".php";
    $view_file = fopen($vfile, "w") or die("Unable to open file");
    $query = "SELECT page_content FROM site_pages WHERE page_title='" . $name . "'";
    $txt2 = '<?php
    include("views/header.php");
    include("views/navigation.php");
    ?>
    <div>
        <div class="page-header">
            <div class="page-header-inner">
                <div class="container">
                    <h1 class="section-title page-title">' . $name . '</h1>
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
                        $sql = "'. $query .'";
                        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {
                                echo $row["page_content"];
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
    include("views/footer.php");
    ?>';
    fwrite($view_file, $txt2);
    fclose($view_file);

    $html = "";
    $html .= "<div class='message-box color-info'>";
    $html .= "<i class='bi bi-check-circle'></i>";
    $html .= "<span>Sikeresen hozzálett adva az új oldal.</span>";
    $html .= "</div>";

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once('views/create_page.php');
?>