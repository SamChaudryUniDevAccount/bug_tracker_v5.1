//Working
$( document ).ready(function() {


    getCurrentIssuesFromDatabase();


});




$("#refresh").click(function(){


    $('#issuesTable tr').remove();

     getCurrentIssuesFromDatabase();

});



$("#fileinput").change(function(evt){

    uploadTextFile();

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


    $('#issuesCount').text("Number of issues logged in the system are: " + dataObjectParsed.length);

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

                alert("Please check your inputs. Keep your problems to more than 150 characters. ");

            }



        }

    });

});


function uploadTextFile(){

    var bugFile = document.getElementById('fileinput');

    var problemArea = document.getElementById('problem-area');

    var file = bugFile.files[0];

    var textTypeInFile = /text.*/;

    if (file.type.match(textTypeInFile)) {

        var reader = new FileReader();

        reader.onload = function(e) {

            problemArea.innerText = reader.result;

            $('fileinput[type="file"]').val(null);
        }

        reader.readAsText(file);

    } else {

        alert("File format invalid. Please check it and try again.")
    }

}




