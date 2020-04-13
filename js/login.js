$(document).ready(function(){
    $('#login').on('click', function(){
       var username=$('#username').val();
        var password=$('#password').val();
        var usernameFlag;
        var passwordFlag;
       
       
        
       
       if($('#username').val().length==0){
            $('#responseTextU').text("Morate unijeti korisničko ime").css('color', 'crimson');

        }if($('#username').val().length>0){
            $('#responseTextU').text("");
            usernameFlag=true;

        }
        if($('#password').val().length==0){
            $('#responseTextP').text("Morate unijeti šifru").css('color', 'crimson');

        }if($('#password').val().length>0){
            $('#responseTextP').text("");
            passwordFlag=true;

        }
        if(usernameFlag && passwordFlag){
            $.post( "classes/loginControler.class.php", { usernameF: username, passwordF: password }, function(data){
            if(data=='succes'){
                window.top.location='results.php';
            }else{
                $('#responseTextP').text("Korisničko ime ili šifra nisu tačni").css('color', 'crimson');
            }
        }); 

        }
       
});
});