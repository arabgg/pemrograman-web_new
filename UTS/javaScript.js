$(document).ready(function(){
    $('form').submit(function(e){
                    $('.form').fadeOut(1500);
                    setTimeout(function(){
                        location.href = "form.php";
                    }, 1500);
});
});
