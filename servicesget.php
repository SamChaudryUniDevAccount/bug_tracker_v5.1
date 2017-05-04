<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    getCurrentIssues();


}elseif(isset($_GET['getListOfUsersLoggedIssuesWithDepartment'])){



    getListOfUsersLoggedIssuesWithDepartment();


}elseif(isset($_GET['getNumberofIssuesLogged'])){


    getNumberofIssuesLogged();


}elseif(isset($_GET['getListOfUsersWhoLoggedBugs'])){


    getListOfUsersWhoLoggedBugs();


}elseif(isset($_GET['getListOfDepartmentsWithIssues'])){


    getListOfDepartmentsWithIssues();


}elseif(isset($_GET['getIssuesLoggedWithTheirIDs'])){


    getIssuesLoggedWithTheirIDs();


}elseif(isset($_GET['testAPICall'])){


    testAPICall();


}


function testAPICall(){

    echo "hello";

}



function getIssuesLoggedWithTheirIDs(){

    global $link;

    $sql= "SELECT BugID, Problem FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo json_encode($jsonData);


    }else{

        $dataNotFound = 204;

        echo $dataNotFound;

    }


}




function getListOfDepartmentsWithIssues(){

    global $link;

    $sql= "SELECT Department FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo json_encode($jsonData);


    }else{

        $dataNotFound = 204;

        echo $dataNotFound;

    }



}




function getListOfUsersWhoLoggedBugs(){

    global $link;

    $sql= "SELECT Name FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo json_encode($jsonData);


    }else{

        $dataNotFound = 204;

        echo $dataNotFound;

    }


}




function getNumberofIssuesLogged(){

    global $link;

    $sql= "SELECT *  FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo count($jsonData);


    }else{

        $dataNotFound = 204;

        echo $dataNotFound;

    }



}






function getListOfUsersLoggedIssuesWithDepartment(){

    global $link;

    $sql= "SELECT Name, Department FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo json_encode($jsonData);


    }else{

        $dataNotFound = 204;

        echo $dataNotFound;

    }


}




function getCurrentIssues(){

    global $link;

    $sql= "SELECT * FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo json_encode($jsonData);


    }else{

        $dataNotFound = 204;

        echo $dataNotFound;

    }



}