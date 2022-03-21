<?php
namespace DB\model;
use DB\db;

class product extends db
{
    public function index(){
        $query='select * from products order by `created_at` desc';
      return mysqli_query($this->conn,$query);

    }


    public function create($name,$description,$price,$image){
        $query="INSERT INTO `products`(`name`, `description`, `price`, `image`) VALUES ('$name','$description','$price','$image')";
        $status=mysqli_query($this->conn,$query);

        if(!$status){
            return false;
        }
        return true;
    }

    public function delete($pid){
        $query="Delete from products where id='$pid'";
        $status=mysqli_query($this->conn,$query);

        if(!$status){
            return false;
        }
        return true;
    }
}