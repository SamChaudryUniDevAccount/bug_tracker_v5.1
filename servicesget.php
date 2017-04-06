<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    echo "Get called successful";

    $sql= "SELECT * FROM bugs";

    $result=mysqli_query($link,$sql);



    echo $result;


}

