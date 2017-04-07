//Working
$( document ).ready(function() {




});




$("#refresh").click(function(){


    $.ajax(
        {

            type:'GET',
            url:'servicesget.php',
            data:"getCurrentIssues",
            success: function(data){

                updateTableIssuesTable(data);


            }

        });


});

//{"Name":"Sam Chaudry","Department":"IT","BugID":"123","Priority":"High","Problem":" JSON API not working please check and amend\r\n\r\n                        "}


function updateTableIssuesTable(data) {

    var tableRow;

    for (var x = 0; x < data.length; x++) {

        tableRow = $('<tr/>');

        tableRow.append("<td>" + data[i].Name + "</td>");

        tableRow.append("<td><span>" + data[i].Department + "</span></td>");

        tableRow.append("<td>" + data[i].Priority + "</td>");

        tableRow.append("<td><span>" + data[i].Problem + "</span></td>");


        $('#issuesTable').append(tableRow);
    }

}







$("#submitProblem").click(function(){

    var jsonObject = {};

    var inputDataArray = ($(".inputData").serializeArray());

    for (var i = 0; i < inputDataArray.length; i++){

        jsonObject[inputDataArray[i]['name']] = inputDataArray[i]['value'];

    }


    var data = JSON.stringify(jsonObject);

    //Date alerted from front end 5/04/2017
    alert(data);

    $.ajax({

        "url": 'servicespost.php',
        "type": 'POST',
        "data": {"updateBugsTable" : data},
        success: function(data) {


            if(data == true){

                alert("Records have been updated with issues..Thanks. ")

            }else{


                //Alternative

            }



        }

    });

});









//Data Structure:







