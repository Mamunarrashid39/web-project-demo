<?php

if(isset($_SESSION)&& isset($_SESSION['id']))
{
    $login = $_SESSION['id'];

}
if(!isset($login)){
    header('Location: action.php?pages=login');
}
?>