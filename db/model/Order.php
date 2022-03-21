<?php

namespace DB\model;

use DB\db;

class Order extends db
{
    public function make_order($first_name, $last_name, $email, $division, $city, $zip, $address, $terms, $discount = 0)
    {
        $uid = $_COOKIE['u_id'];
        try {
            $total_query = "SELECT SUM(products.price) as total from cart INNER JOIN products on products.id=cart.product_id where u_id='$uid'";
            $cart_query = "SELECT product_id,quantity from cart where u_id='$uid'";

            $res = mysqli_query($this->conn, $total_query);

            $total = mysqli_fetch_assoc($res)['total'];

            $query = "INSERT INTO `orders`(`first_name`, `last_name`, `email`, `division`, `city`, `zip`, `address`, `terms`, `total`, `discount`) VALUES ('$first_name','$last_name', '$email', '$division', '$city', '$zip', '$address', $terms, $total, $discount)";
            $status = mysqli_query($this->conn, $query);

        } catch (\Exception $exception) {
            echo "<pre>";
            print_r($exception);
            echo "</pre>";
        }

        if ($status) {
            $cart = new Cart();
            if ($cart->delete()) {
                return true;
            }
        }
        return false;
    }
}