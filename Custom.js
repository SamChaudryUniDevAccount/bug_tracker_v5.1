//Working
$( document ).ready(function() {

    //alert("JS Loaded in");

});

$("#submitProblem").click(function(){

    var jsonObject = {};

    var inputDataArray = ($(".inputData").serializeArray());

    for (var i = 0; i < inputDataArray.length; i++){

        jsonObject[inputDataArray[i]['name']] = inputDataArray[i]['value'];

    }


    var data = JSON.stringify(jsonObject);


   //Data alerted into Object


    $.ajax({

        "url": 'services.php',
        "type": 'POST',
        "data": {"data" : data},
        success: function(data) {

            // Do something with data that came back.

            alert(data);

        }

    });

});



/*

Data Structure:

 {"Name":"Sam Chaudry","Department":"IT","BugID":"123","Priority":"High","Problem":" JSON API not working please check and amend\r\n\r\n                        "}


//AJAX



*/


