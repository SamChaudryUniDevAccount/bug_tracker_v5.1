<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    echo "Get called successful";

    $sql= "SELECT * FROM bugs";

    $result=mysql_query($sql);

    if ($result){

        $i=0;

        $return =[];

        while($row = mysql_fetch_array($result, MYSQL_NUM)){

            $rows[] = $row;

        }

        echo json_encode($rows);

    }else{

        echo "ERROR";

    }

}

