<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    echo "Get called successful";

    $sql= "SELECT * FROM bugs";

    $result=mysqli_query($link,$sql);

    // Fetch all
    mysqli_fetch_all($result,MYSQLI_ASSOC);

    // Free result set
     mysqli_free_result($result);

    echo json_encode(  mysqli_free_result($result));


}

