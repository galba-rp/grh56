//checking if user emil exists without reloading page

function registrationCheck() {
    let signup_email = $('#sign_up_email').val();
    $.ajax({
        url: 'indexUser.php',
        type: 'POST',
        data: {
            signup: 1, //key for checking if request exists
            email: signup_email,
        },
        success: function (response) {
            if (response == "ok") {
                userSignUp();
            } else {
                $("#upEmailRequired").html(response);
            }
        }
    })
}