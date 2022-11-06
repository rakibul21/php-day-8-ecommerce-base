<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($categories as $category) { ?>
            <div class="col-md-4 mb-4">
                <a href="action.php?page=category-product&&category_id=<?php echo $category['id'] ?>">
                    <div class="card">
                        <img src="assets/img/<?php echo $category['image']; ?>" alt="" height="300">
                        <div class="card-img-overlay"> </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
