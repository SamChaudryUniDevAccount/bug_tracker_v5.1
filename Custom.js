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


    alert("" + data);


    console.log(data);



});



/*

Data Structure:

 $.ajax({

 "url": 'Services.php',
 "type": 'POST',
 "data": {"points" : data},
 success: function(data) {

 // Do something with data that came back.

 alert(data);

 }

 });
*/


