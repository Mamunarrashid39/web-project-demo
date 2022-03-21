<?php include 'pages/includes/header.php'; ?>
<section class="py-5 bg-light">
    <div class="col-md-10 mx-auto">
        <h1>Cart</h1>
        <div class="row">
            <?php
            if (count($carts) > 0) {
                // output data of each row
                foreach ($carts as $cart) { ?>
                    <div class="col-lg-4 col-sm-6 col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <img src='<?php echo $cart->image ?>' class="img-fluid overflow-hidden w-100"
                                     style="height:10rem" alt="">
                                <h2><?php echo $cart->name ?></h2>
                                <p> Price: BDT <?php echo $cart->price ?> tk</p>
                                <p><?php echo $cart->description ?></p>
                                <p>Quantity: <?php echo $cart->quantity ?></p>
                            </div>
                        </div>
                    </div>
                <?php };
            } else {
                echo "No Product Found";
            } ?>
            <div class="card mt-5">
                <div class="card-header bg-dark text-white">
                    <h4>Order Now:</h4>
                    <p>Please Fill Up Location</p>
                </div>
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="action.php" method="post">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input name="first_name" type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input name="last_name" type="text" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Division</label>
                            <div class="input-group has-validation">
                                <select name="division" id="" class="form-control">
                                    <option value="" selected disabled>Please Select Division</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattogram">Chattogram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Sylhet">Sylhet</option>

                                </select>

                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">City</label>
                            <input name="city" type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">Zip</label>
                            <input name="zip" type="text" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="validationCustom05" class="form-label">Full Address</label>
                            <textarea name="address" class="form-control" id="validationCustom05" required rows="5"></textarea>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="terms" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" name="oder_now" type="submit">Order Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>
