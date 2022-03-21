<?php include 'pages/includes/header.php'; ?>
<?php include 'pages/middleware/authMiddleware.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Add</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)) { ?>

                       <h2 class="text-success" <?php echo $message; ?><h2>

                        <?php  } ?>

                        <div >
                            <form action="action.php" id="commentForm" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/png|image/jpg" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
