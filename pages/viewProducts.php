<?php include "pages/includes/header.php ";?>
<?php include 'pages/middleware/authMiddleware.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php
            if (mysqli_num_rows($products) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($products)) {?>
                    <div class="col-lg-4 col-md-3 col-sm-6 col-12 mt-3">
                        <img src='<?php echo $row['image'] ?>' class="img-fluid overflow-hidden w-100" style="height:10rem" alt="">
                        <h2><?php echo $row["name"] ?></h2>
                        <p> Price: BDT <?php echo $row["price"] ?> tk</p>
                        <p><?php echo $row["description"] ?></p>
                        <form method="post" action="action.php">
                            <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="delete_product_by_admin" class='btn btn-danger align-self-end'>
                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px;width: 20px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                <?php };
            } else {
                echo "No Product Found";
            } ?>
         </div>
    </div>
</section>
<?php include "pages/includes/footer.php"; ?>