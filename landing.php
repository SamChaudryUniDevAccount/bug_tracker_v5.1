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

    <link rel="stylesheet" href="Styles.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
    <div id="navBar">
        <a id="logOutLink" href="logout.php">Log out</a>
    </div>
    <br/>
    <br/>
    <br/>
    <h3 id="LandingTitle"> Bug Tracker: Homepage</h3>
    <br/>
    <p class="textStyles">Welcome to Bug Tracker. Follow the instructions below to log your issue or view them with the
        most recent at the bottom of the table.</p>
    <p class="textStyles" id="issuesCount"></p>
    <br/>
    <div class="row">
        <!-- Bugs Submission Table-->
        <div class="col-lg-6">
        <div class="panel panel-success">
            <div id="bugPannelStyles" class="panel-heading">1. Fill out the form below with your issue</div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 c labelsLanding">Name</label>
                        <div class="col-sm-12">
                            <input type="text" name="Name" class=" inputData form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 labelsLanding"> Department</label>
                        <div class="col-sm-12">
                            <input type="text" name="Department" class=" inputData form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2  labelsLanding"> Bug ID</label>
                        <div class="col-sm-12">
                            <input type="text" name="BugID" class=" inputData form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="col-sm-2  labelsLanding">Priority</p>
                        <div class="col-sm-12">
                            <input type="text" name="Priority" class=" inputData form-control" value="">
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <label class="labelsLanding" for="comment">State your problem: Keep it to 140 Characters. Thanks.</label>
                    <textarea id="problem-area" name="Problem" class="form-control inputData" rows="5" id="problem"></textarea>
                </div>
                <label class="labelsLanding" for="comment">Got it in a text file? Upload it from the 'Choose' button</label>
                <input type="file" id="fileinput"/>
                <br>
                <br/>
                <br/>
                <button id="submitProblem" type="submit" class="btn btn-success btn-lg  btn-block">Submit issue</button>
            </div>

       </div>
       </div>

        <!-- Bugs Table-->
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading issuesPannel">2. Current Issues. Click Refresh to see latest at the bottom.
                    <button id="refresh" type="button" class="btn btn-primary">Refresh</button>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th><span class="columnNameStyles">Name</span></th>
                        <th><span class="columnNameStyles">Department</span></th>
                        <th><span class="columnNameStyles">Priority</span></th>
                        <th><span class="columnNameStyles">Description of Problem</span></th>
                        </thead>
                        <tbody id="issuesTable">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>











    </div>
</div>

</body>
<!-- JavaScript-->
<script src="jQuery.js"></script>
<script src="Custom.js"></script>
<script src="bootstrap/bootstrap.js"></script>

</html>