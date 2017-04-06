<?php


include("dbconfig.php");

if (isset($_POST["updateBugsTable"])) {


    updateBugsTable();

}


function updateBugsTable() {


    $data = json_decode($_POST["updateBugsTable"],true);global $link;

   global $name;
   global $department;
   global $bugid;
   global $priority;
   global $problem;

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
    // echo "From server...".$name.$department.$bugid.$priority.$problem;

    //Write to database and monitor response Table is called: bugs
    //Columns: Name,Department,BugID,Priority,Problem

    $sql = "INSERT INTO bugs (Name, Department, BugID, Priority,Problem) VALUES ('$name', '$department', '$bugid','$priority', '$problem')";

    //$result = $link->query($sql);

    //echo "Value from the result query is..".$result;

    if(mysqli_query($link, $sql)){

        $isSuccesful = true;

        echo $isSuccesful;

    } else{

        echo mysqli_error($link) . "ERROR: Could not able to execute $sql. ";

    }

}







