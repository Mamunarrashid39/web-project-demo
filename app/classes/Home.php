<?php


namespace App\classes;


class Home
{
    public function index()
    {
        header("location:action.php?pages=home");
    }

}