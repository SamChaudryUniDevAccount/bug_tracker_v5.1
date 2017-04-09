/**
 * Created by SamChaudry on 09/04/2017.
 */
$( document ).ready(function() {

    showLoginModal ()


});

function showLoginModal () {

    $('#loginModal').modal('show');
    $('#loginModal').modal({backdrop: 'static', keyboard: false})


}