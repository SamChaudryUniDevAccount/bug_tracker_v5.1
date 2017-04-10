<?php

include('session.php');
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Bug Tracker: Homepage</title>

 <!-- CSS-->

 <link rel="stylesheet" href="bootstrap/bootstrap.css"  media="all">
 <link rel="stylesheet" href="bootstrap/bootstrap.css.map"  media="all">
 <link rel="stylesheet" href="bootstrap/bootstrap-grid.css"  media="all">
 <link rel="stylesheet" href="bootstrap/bootstrap-reboot.css"  media="all">
 <link rel="stylesheet" href="Styles.css" rel ="stylesheet" media="all">


</head>
<body >
<div class="container-fluid">
<div id="navBar">
        <a id="logOutLink" href="logout.php">Log out</a>
</div>
    <br/>
    <br/>
    <br/>
 <h3 id="LandingTitle"> Bug Tracker: Homepage</h3>
    <br/>
    <p>Welcome to Bug Tracker. Follow the instructions below to log your issue.</p>
    <div class="row">
  <div class="panel panel-default col-lg-6">
   <div class="panel-head ">Fill out the form below with your issue</div>
   <div class="panel-body ">
    <form class="form-horizontal">
     <div class="form-group">
      <label  class="col-sm-2 control-label labels">Name</label>
      <div class="col-sm-12">
       <input type="text" name ="Name" class=" inputData form-control" value="Sam Chaudry" >
      </div>
     </div>
     <div class="form-group">
      <label  class="col-sm-2 control-label labels"> Department</label>
      <div class="col-sm-12">
       <input type="text"  name ="Department" class=" inputData form-control" value="IT" >
      </div>
     </div>
     <div class="form-group">
      <label  class="col-sm-2 control-label labels"> Bug Id</label>
      <div class="col-sm-12">
       <input type="text" name="BugID" class=" inputData form-control" value="123" >
      </div>
     </div>
     <div class="form-group">
      <p  class="col-sm-2 control-label labels">Priority</p>
      <div class="col-sm-12">
       <input type="text" name="Priority" class=" inputData form-control" value="High" >
      </div>
     </div>
    </form>
    <div class="form-group">
     <label for="comment">State your problem: Keep it to 140 Characters. Thanks.</label>
     <textarea id="problem-area" name ="Problem"class="form-control inputData" rows="10" id="problem" >
                    </textarea>
    </div>
    <label for="comment">Already got it in a text file? Click the Choose File button to add it.</label>
        <input type="file" id="fileinput" />
    <br>
    <br/>
    <br/>
    <button id="submitProblem" type="submit" class="btn btn-success btn-lg  btn-block">Submit issue</button>
   </div>
  </div>
  <div class="panel panel-default col-lg-6">
   <div class="panel-heading ">
    <p class="panel-title">Current Issues logged</p>
       <p id="issuesCount"></p>
    <button id="refresh" type="button" class="btn btn-danger">Refresh</button>
   </div>
   <div class="panel-body ">
    <table class="table table-bordered">
     <thead>
     <th><span>Name</span></th>
     <th><span>Department</span></th>
     <th><span>Priority</span></th>
     <th><span>Description of Problem</span></th>
     </thead>
     <tbody id="issuesTable">
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">Panel with panel-primary class</div>
    <div class="panel-body">Panel Content</div>
</div>



</body>
<!-- JavaScript-->
<script src="jQuery.js"></script>
<script src="Custom.js"></script>
<script src="bootstrap/bootstrap.js"></script>

</html>