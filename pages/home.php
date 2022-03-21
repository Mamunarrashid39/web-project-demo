<?php include 'pages/includes/header.php'; ?>
<section class="py-5 bg-light">
    <div class="col-md-10 mx-auto">
        <div class="row">
            <?php
            if (mysqli_num_rows($products) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($products)) { ?>
                    <div class="col-lg-4 col-sm-6 col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <img src='<?php echo $row['image'] ?>' class="img-fluid overflow-hidden w-100"
                                     style="height:10rem" alt="">
                                <h2><?php echo $row["name"] ?></h2>
                                <p> Price: BDT <?php echo $row["price"] ?> tk</p>
                                <p><?php echo $row["description"] ?></p>
                                <form method="post" action="action.php">
                                    <input type="hidden" name="cart_id" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="add_to_cart" class='btn btn-info align-self-end'><span>Add to
                                            Cart</span> <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px;width: 20px" class="d-inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php };
            } else {
                echo "No Product Found";
            } ?>

        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>
