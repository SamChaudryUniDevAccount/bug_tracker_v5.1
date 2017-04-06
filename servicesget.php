<?php

if(isset($_GET['getCurrentIssues'])){

    echo "Get called successful";

    $sql = "SELECT * FROM bugs";

    //Empty array to hold results
    $rows = array();

    if(mysqli_query($link, $sql)){

        while($r = mysql_fetch($sql)) {

            $rows['currentIssues'][] = $r;


        }

    } else{

        echo mysqli_error($link) . "ERROR: Could not able to execute $sql. ";

    }


    echo json_encode($rows);


}