<?php

include("dbconfig.php");

//$link -> Database connection

if (isset($_POST["data"])) {

    $data = json_decode($_POST["data"],true);

    echo "From server data".$data;

}