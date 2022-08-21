$(document).ready(function () {
    $("#connect").click(function () {
        $("#modal_box").show();
    });
    $("#create_account").click(function () {
        $("#modal_box").hide();
        setTimeout(function () {
            $("#signin_box").show();
        }, 200);
    });
    $("#lost_password").click(function () {
        $("#modal_box").hide();
        setTimeout(function () {
            $("#forgot_pass").show();
        }, 200);
    })
    $(".fa").click(function () {
        $("#modal_box").hide();
        $("#signin_box").hide();
        $("#forgot_pass").hide();
    });
    // $("#moreInfoGeneral").click(function () {
    //     $("#moreInfoGeneral").show();
    // });
    // $(".moreInfo").hideModal(() => {
    //     $("#modal_box").hide();
    // })


});