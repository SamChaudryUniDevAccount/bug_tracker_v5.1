<?php
/**
 * Created by PhpStorm.
 * User: SamChaudry
 * Date: 21/03/2017
 * Time: 18:44
 */

include('dbconfig.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($link,"select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){

    header("location:index.php");

}else{

  echo "Session Manager";

}