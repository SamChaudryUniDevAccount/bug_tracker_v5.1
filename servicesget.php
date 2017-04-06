<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    echo "Get called successful";

    $sql = "SELECT * FROM bugs";

    $result = mysql_query($query);

    $rows = array();

    while($r = mysql_fetch($result)){


        $rows[] = array('data' => $r);
    }

// now all the rows have been fetched, it can be encoded
    echo json_encode($rows);





}

/*
 *
 *
 */