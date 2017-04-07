//Working
$( document ).ready(function() {


    getCurrentIssuesFromDatabase();


});




$("#refresh").click(function(){


    $('#issuesTable tr').remove();

     getCurrentIssuesFromDatabase();

});


$("#fileinput").change(function(evt){


    var file = evt.target.files[0];

    var reader = new FileReader();

    reader.onload = function(e) {

        fileContent = reader.result;

        console.log(fileContent);

    }

    reader.readAsText(file.files[0]);


});


function getCurrentIssuesFromDatabase () {

    $.ajax(
        {

            type:'GET',
            url:'servicesget.php',
            data:"getCurrentIssues",
            success: function(data){

                updateTableIssuesTable(data);


            }

        });


}


function updateTableIssuesTable(data) {

    var tableRow;

    var dataObjectParsed = $.parseJSON(data);

    for (var x = 0; x < dataObjectParsed.length; x++) {


        tableRow = $('<tr/>');

        tableRow.append("<td><span> " + dataObjectParsed[x].Name + "</span></td>");

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


    $.ajax({

        "url": 'servicespost.php',
        "type": 'POST',
        "data": {"updateBugsTable" : data},
        success: function(data) {


            if(data == true){

                alert("Records have been updated with issues..Thanks. ")

            }else{

                alert("System error this is not working. ")

            }



        }

    });

});









