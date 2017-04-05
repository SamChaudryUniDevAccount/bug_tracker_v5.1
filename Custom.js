//Working
$( document ).ready(function() {




});

$("#submitProblem").click(function(){

    var jsonObject = {};

    var inputDataArray = ($(".inputData").serializeArray());

    for (var i = 0; i < inputDataArray.length; i++){

        jsonObject[inputDataArray[i]['name']] = inputDataArray[i]['value'];

    }


    var data = JSON.stringify(jsonObject);

    //Date alerted from front end 5/04/2017
   // alert(data);

    $.ajax({

        "url": 'services.php',
        "type": 'POST',
        "data": {"data" : data},
        success: function(data) {

            if(data == true){

                alert("Thanks for your update it is done..")

            }

        }

    });

});







/*

Data Structure:

 {"Name":"Sam Chaudry","Department":"IT","BugID":"123","Priority":"High","Problem":" JSON API not working please check and amend\r\n\r\n                        "}

 $("#refresh").click(function(){


 $.ajax({

 "url": 'services.php',
 "type": 'GET',
 success: function(data) {

 alert(data);

 }

 });

 });


*/


