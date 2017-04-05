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

       //$sql = "INSERT INTO bugs (Name, Department, BugID, Priority,Problem) VALUES ('$name', '$department', '$bugid',$priority, '$problem')";

       //$result = $link->query($sql);

       //if($result > 0){

        //echo $result;

      //}



}