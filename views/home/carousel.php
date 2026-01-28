<div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
    </div>
    <div class="carousel-inner">
        <?php
        $sql = "SELECT id, title, content FROM carousel";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="carousel-item <?php if ($row['id'] == 1) { ?>active<?php } ?>">
                    <div class="carousel-caption">
                        <h2><?php echo $row['title']; ?></h2>
                        <?php echo $row['content'] ?>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <button class="carousel-control-prev carousel-control left" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
            <i class="bi bi-chevron-left"></i>
        </span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-control right" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
            <i class="bi bi-chevron-right"></i>
        </span>
        <span class="visually-hidden">Next</span>
    </button>
</div>