<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    echo "Get called successful";

    $sql= "SELECT * FROM bugs";

    $result = mysqli_query($link,$sql);

    $encode = array();

    while($row = mysqli_fetch_assoc($result)) {

        $encode[] = $row;

    }

    //Returning ARRAY
    echo json_encode($encode);;

}

