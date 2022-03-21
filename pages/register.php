<?php include "pages/includes/header.php ";?>
<section>
    <div class="card text-center" style="width: 450px; margin: 50px auto">
        <div class="card-header">
            <h1>Register Page</h1>
        </div>
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="userName">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="registerBtn" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</section>


<?php include "pages/includes/footer.php ";?>