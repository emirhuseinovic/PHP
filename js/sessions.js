


document.getElementById("logButton").addEventListener('click', function(){
    $.post('classes/sessionHandler.class.php', 
       {logout:"da"},
       function(data){
           if(data==="closed"){
            document.getElementById("logButton").style.visibility="hidden";
        alert("Izlogovali ste se");

        window.top.location='index.main.html';
    }

else{
    alert("Error");
    
}



       }
       );
})



