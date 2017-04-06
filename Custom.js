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

                alert(data);


            }

        });


});








/*

 */


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

        "url": 'services.php',
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

 //{"Name":"Sam Chaudry","Department":"IT","BugID":"123","Priority":"High","Problem":" JSON API not working please check and amend\r\n\r\n                        "}






