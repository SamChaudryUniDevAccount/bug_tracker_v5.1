/**
 * Created by SamChaudry on 09/04/2017.
 */
$( document ).ready(function() {


    $("#loginModal").modal({
        show: true,
        backdrop: 'static'
    });


});

function showLoginModal () {

    $('#loginModal').modal('show');
    $('#loginModal').modal({backdrop: 'static', keyboard: false})


}