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


function updateTableIssuesTable(data) {

    var tableRow;

    var dataObjectParsed = $.parseJSON(data);

    for (var x = 0; x < dataObjectParsed.length; x++) {


        tableRow = $('<tr/>');

        tableRow.append("<td>   " + dataObjectParsed[x].Name + "     </td>");

        tableRow.append("<td><span>   " + dataObjectParsed[x].Department + "   </span></td>");

        tableRow.append("<td><span>" + dataObjectParsed[x].Priority + "  </span></td>");

        tableRow.append("<td><span>    " + dataObjectParsed[x].Problem + "    </span></td>");

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







