$(document).ready(function() {

    $(".btn-login").click( function() {

        var username = $("#username").val();
        var password = $("#password").val();

        console.log(username);
        console.log(password);

        if(username.length == "") {

            Swal.fire({
                type: 'warning',
                title: 'Oops...',
                text: 'Username Wajib Diisi !'
            });

        }

    });

});