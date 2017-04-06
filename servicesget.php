<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    getCurrentIssues();

}

function getCurrentIssues(){

    global $link;

    $sql= "SELECT * FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }

    //Returning ARRAY
    echo json_encode($jsonData);

}