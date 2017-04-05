<?php


//{"Name":"Sam Chaudry","Department":"IT","BugID":"123","Priority":"High","Problem":" JSON API not working please check and amend"}


include("dbconfig.php");

//$link -> Database connection

if (isset($_POST["data"])) {

    $data = json_decode($_POST["data"],true);

    echo "Data has hit the backend....".$data;



}