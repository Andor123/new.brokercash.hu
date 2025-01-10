<?php
include('views/header.php');
include('views/navigation.php');
?>
<div>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">Provident gyorskölcsön</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">Kezdőlap</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <section id="blog-page" class="the-company animate__animated animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="tab nav-link active" href="./index.php?pg=provident">
                                <h2 class="blog-title loan-form-title">Provident</h2>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="tab nav-link" href="./index.php?pg=gyorskolcson">
                                <h2 class="blog-title loan-form-title">Személyi kölcsön</h2>
                            </a>
                        </li>
                    </ul>
                    <div class="genericForm">
                        <div class="post">
                            <div style="text-align:center;">
                                <iframe src="./banners/provident" width="640" height="340"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('views/footer.php');
?>