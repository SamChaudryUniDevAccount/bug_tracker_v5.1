/**
 * Created by SamChaudry on 09/04/2017.
 */
$( document ).ready(function() {


 showLoginModal();


    $.ajax(
        {

            type:'POST',
            url:'servicespost.php',
            data:{id:"GV123"},
            success: function(data){

                updateTableIssuesTable(data);


            }

        });



});

function showLoginModal () {

    $("#loginModal").modal({
        show: true,
        backdrop: 'static'
    });


}