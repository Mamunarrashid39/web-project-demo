<?php

namespace DB\model;

use DB\db;

class Cart extends db
{
    public function cart_list()
    {
        if(isset($_COOKIE['u_id'])) {
            $uid = $_COOKIE['u_id'];
            $result = [];
            $cart_all = "select * from cart inner join products on cart.product_id = products.id where `u_id`='$uid'";
            $res = mysqli_query($this->conn, $cart_all);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    array_push($result, (object)$row);
                }
                return $result;
            }
        }
        return [];
    }

    public function add_to_cart($postid)
    {
        $uid=$_COOKIE['u_id'];
        $cart_find_query = "select * from cart where product_id=$postid and u_id='$uid'";
        $res = mysqli_query($this->conn, $cart_find_query);
        if (mysqli_num_rows($res) > 0) {
            $post = mysqli_fetch_assoc($res);
            $update_quantity = (int)$post['quantity'] + 1;
            $update_cart_query = "update cart set `quantity`='$update_quantity' where `product_id`=$postid";
            $res = mysqli_query($this->conn, $update_cart_query);
            return true;
        } else {
            $update_cart_query = "insert into `cart` (`product_id`, `quantity`,`u_id`) values ('$postid',1,'$uid')";
            $res = mysqli_query($this->conn, $update_cart_query);
            return true;
        }
        return false;

    }
    public function delete(){
        $uid=$_COOKIE['u_id'];
        $cart_find_query = "Delete from cart where u_id='$uid'";
        $res = mysqli_query($this->conn, $cart_find_query);
        if($res){
            setcookie('u_id',null,time()-60*60*24);
            return true;
        }
        return false;
    }

}