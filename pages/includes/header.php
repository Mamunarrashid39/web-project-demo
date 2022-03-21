<?php
session_start();
if (isset($_SESSION) && isset($_SESSION['id'])) {
    $login = $_SESSION['id'];
    $user = $_SESSION['user'];
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <style>
        .img {
            position: relative;
            width: 100px;
            height: 100px;

        }

        .smart {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img img {
            width: 100%;
            height: 100%;
            background-position: top center;
            background-size: cover;
            overflow: hidden;
            border-radius: 50%;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark share">
    <div class="container ">
        <div class="img rounded-circle">
            <img src="assets/img/mamun_logo.jpg" class="img-fluid" alt="">

            <a href="action.php?pages=home" class="navbar-brand smart">mamun </a>

        </div>
        <ul class="navbar-nav me-auto">
            <?php
            $cart = new \DB\model\Cart();
            $carts = $cart->cart_list();
            if (count($carts) > 0) { ?>
            <li class="nav-item mr-2"><a href="action.php?pages=cart"
                                         class="nav-link btn btn-secondary">

                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px;width: 20px" class="d-inline"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>

                </a></li>
            <?php } ?>
            <?php if (isset($login)) { ?>

                <li class="nav-item"><a href="action.php?pages=view-products" class="nav-link">View Product</a></li>
                <li class="nav-item"><a href="action.php?pages=admin_order" class="nav-link">Order</a></li>
                <li class="nav-item"><a href="action.php?pages=add_product" class="nav-link">Add Product</a></li>
                <li class="nav-item"><span class="nav-link text-info">Hello! <?php echo $user; ?></span></li>
                <li class="nav-item"><a href="action.php?pages=logout" class="nav-link btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px;width: 20px" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </a></li>
            <?php } else {?>
                <li class="nav-item  mr-2"><a href="action.php?pages=login" class="nav-link btn btn-danger">Login</a>
                </li>
                <li class="nav-item"><a href="action.php?pages=registration" class="nav-link btn btn-outline-success">Sign-up</a>
                </li>

            <?php } ?>

        </ul>

    </div>

</nav>