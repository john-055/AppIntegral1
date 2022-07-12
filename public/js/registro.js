$(document).ready(function(){
    $('#icono').mousedown(function(){
    $('#password').removeAttr('type');
    $('#icono').addClass('bi bi-eye-slash').removeClass('bi bi-eye');
});
$('#icono').mouseup(function(){
    $('#password').attr('type', 'password');
    $('#icono').addClass('bi bi-eye').removeClass('bi bi-eye-slash');
});
});
$(document).ready(function(){
    $('#icono2').mousedown(function(){
    $('#password-confirm').removeAttr('type');
    $('#icono2').addClass('bi bi-eye-slash').removeClass('bi bi-eye');
});
$('#icono2').mouseup(function(){
    $('#password-confirm').attr('type', 'password');
    $('#icono2').addClass('bi bi-eye').removeClass('bi bi-eye-slash');
});
});