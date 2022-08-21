$(document).ready(function () {
    $("#myfile").change(function () {
        var fileName = $("#myfile")[0].files[0].name;
        $("#showName").text(fileName);
        $("#showName").removeClass("none").addClass("show");
    })
})