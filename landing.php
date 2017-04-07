<?php

include('session.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker: Homepage</title>
</head>
<body >
<div class="container-fluid">
    <h3 class = "headerText "id="headerText modal-title"> Bug Tracker: Homepage</h3>
    <div class="row">
        <div class="panel panel-default col-lg-6">
            <div class="panel-heading ">Fill out the form below with your issue</div>
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
                    <label for="comment">State your problem</label>
                    <textarea id="problem-area" name ="Problem"class="form-control inputData" rows="10" id="problem" >
                            JSON API not working please check and amend

                        </textarea>
                </div>
                <label for="comment">Got a picture of the problem? Click the upload button to add it.</label>
                <button id="upload" type="button" class="btn btn-success">Upload</button>
                <br/>
                <br/>
                <button id="submitProblem" type="submit" class="btn btn-default btn-lg  btn-block">Submit issue</button>
            </div>
        </div>
        <div class="panel panel-default col-lg-6">
            <div class="panel-heading ">
                <hp class="panel-title">Current Issues logged</hp>
                <button id="refresh" type="button" class="btn btn-danger">Refresh</button>
            </div>
            <div class="panel-body ">
                    <table>
                        <thead>
                        <th><span>Name</span></th>
                        <th><span>Department</span></th>
                        <th><span>Priority</span></th>
                        <th><span>Description of Problem</span>></th>
                        </thead>
                        <tbody id="issuesTable">
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</body>
<!-- JavaScript-->
<script src="jQuery.js"></script>
<script src="Custom.js"></script>
</html>

