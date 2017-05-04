<?php

include("dbconfig.php");

if(isset($_GET['getCurrentIssues'])){


    getCurrentIssues();


}elseif(isset($_GET['getListOfUsersLoggedIssuesWithDepartment'])){



    getListOfUsersLoggedIssuesWithDepartment();


}elseif(isset($_GET['getNumberofIssuesLogged'])){


    getNumberofIssuesLogged();


}elseif(isset($_GET['getListOfUsersLoggedIssued'])){






}









function getNumberofIssuesLogged(){

    global $link;

    $sql= "SELECT * Department FROM bugs";

    $result = mysqli_query($link,$sql);

    $jsonData = array();

    while($row = mysqli_fetch_assoc($result)) {

        $jsonData[] = $row;

    }


    if(count($jsonData) > 0){

        echo json_encode(count($jsonData));


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