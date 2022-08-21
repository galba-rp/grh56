$(document).ready(() =>{
    $(".dropdown").click(()=> {
        $('#drop').show(1000)
    });
    $("#drop").mouseleave(() =>{
        $('#drop').hide(1000)
      });
});