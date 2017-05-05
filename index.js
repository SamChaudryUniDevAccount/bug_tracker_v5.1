/**
 * Created by SamChaudry on 09/04/2017.
 */
$( document ).ready(function() {


 showLoginModal();


    $.ajax(
        {

            type:'POST',
            url:'servicespost.php',
            data:{bugId:"WH123"},
            success: function(data){



            }

        });



});

function showLoginModal () {

    $("#loginModal").modal({
        show: true,
        backdrop: 'static'
    });


}