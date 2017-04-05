<?php


//{"Name":"Sam Chaudry","Department":"IT","BugID":"123","Priority":"High","Problem":" JSON API not working please check and amend"}

include("dbconfig.php");

//$link -> Database connection

if (isset($_POST["data"])) {


    $data = json_decode($_POST["data"],true);


    echo $data;

    $name;
    $department;
    $bugid;
    $priority;
    $problem;

    foreach ($data as $key=>$value) {

        if ($key == "Name") {

            $name = $value;


        }elseif ($key == "Department"){

            $department =  $value;


        }elseif ($key == "BugID"){

            $bugid =  $value;


        }elseif ($key == "Priority"){

            $priority =  $value;


        }elseif ($key == "Problem"){

            $problem =  $value;


        }

    }

    //Echo from outside the for loop
    echo "From server...".$name.$department.$bugid.$priority.$problem;

    //Write to database and monitor response Table is called: bugs
    //Columns: Name,Department,BugID,Priority,Problem

    $sql = "INSERT INTO bugs (Name, Department, BugID, Priority,Problem) VALUES ('Sam', 'IT', '123','High', 'API Not Working')";

    //$result = $link->query($sql);

    //echo "Value from the result query is..".$result;

    if(mysqli_query($link, $sql)){

        echo "Records inserted successfully.";

    } else{

        echo mysqli_error($link) . "ERROR: Could not able to execute $sql. ";

    }









//Second GET Service call
}elseif ((isset($_GET))){

    $sql = "SELECT * FROM bugs";

    $resultFromQuery = $link->query($sql);

    //Emoty array to hold results
    $rows = array();

    while($r = mysql_fetch($resultFromQuery)) {

        $rows['currentIssues'][] = $r;


    }


    echo json_encode($rows);

}