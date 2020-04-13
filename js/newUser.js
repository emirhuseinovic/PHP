

    $(document).ready(function(){
        $('.button').on('click', function(){
            var nameFlag;
            var surnameFlag;
            var emailFlag;
            var usernameFlag;
            var passwordFlag;
            


        if($('#name').val().length==0){
        $('#nameRt').text("Morate unijeti ime").css('color', 'crimson');

        }if($('#name').val().length>0){
            $('#nameRt').hide();
            nameFlag=true;

        }
        if($('#surname').val().length==0){
            $('#surnameRt').text("Morate unijeti prezime").css('color', 'crimson');

        }if($('#surname').val().length>0){
            $('#surnameRt').hide();
            surnameFlag=true;

        }
        if($('#email').val().length==0){
        $('#emailRt').text("Morate unijeti email").css('color', 'crimson');

        }if($('#email').val().length>0){
            $('#emailRt').hide();
            emailFlag=true;

        }
        if($('#username').val().length==0){
        $('#usernameRt').text("Morate unijeti korisničko ime").css('color', 'crimson');

        }if($('#username').val().length>0){
            $('#usernameRt').hide();
            usernameFlag=true;

        }
        if($('#password').val().length==0){
        $('#passwordRt').text("Morate unijeti korisničku šifru").css('color', 'crimson');

        }if($('#password').val().length>0){
            $('#passwordRt').hide();
            passwordFlag=true;

        }
            var name=$('#name').val();
            var surname=$('#surname').val();
            var email=$('#email').val();
            var username=$('#username').val();
            var password=$('#password').val();

            if(nameFlag && surnameFlag && emailFlag && usernameFlag && passwordFlag){
            $.post( "classes/createUser.class.php", {namef: name, surnamef: surname, emailf: email, usernamef: username, passwordf: password}, function(data){
           if(data=="occupied"){ 
            $('#passwordRt').show().text("Korisničko ime je zauzeto").css('color', 'crimson');
            die;
               
                
            }else if (data!=" "){
                $.post( "classes/createUserEntry.class.php", {namef: name, surnamef: surname, emailf: email, usernamef: username, passwordf: password}, function(data){
                    
                    window.top.location='results.php';
                });
                
                
            }
        }); 

            }
    

        
    });
    });
    

