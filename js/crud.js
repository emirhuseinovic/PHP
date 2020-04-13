$(document).ready(function () {
    $(".parent").load("classes/resultsHandler.class.php");
    $('.wrapperMod').css('display', 'none');
    $('.wrapperDel').css('display', 'none');

    $('#add').on('click', function(){
      $('.parent').css('opacity',0.2);
     $('.wrapperMod').css('display','block');
     // 03.03.2020. adding ajax functionality

     $('#pButton').on('click', function(){
       //alert("Working");
       var name=$('#name').val();
       var surname=$('#surname').val();
       var cgName=$('#cgName').val();
       var cgSurname=$('#cgSurname').val();
       var dob=$('#date').val();
       var diagnose=$('#diagnose').val();
       var famillyStatus=$('#famillyStatus').val();
       var internat=$('#internat').val();
       

       $.post('classes/dataEntryControler.class.php', 
       {name:name, surname:surname, cgName:cgName, cgSurname:cgSurname, dob:dob, diagnose:diagnose, famillyStatus:famillyStatus, internat:internat},
       function(data, status){
        alert("Podatak je unešen u bazu podataka");
       }
       );

       $(".parent").load("classes/resultsHandler.class.php");
       
     })




    });

    $('#close').on('click', function(){
     $('.wrapperMod').css('display','none');
     $('.parent').css('opacity',0.8);
    });


  $(".textField").on("keyup", function(){
    var values=$(".textField").val();
   $.post("classes/searchFieldHandler.class.php",
   {suggest: values}, function(suggest, status){
     $(".parent").html(suggest);
   }
   
   );
   

  });

  //delete

  $("#del").on("click", function(){
    
    $('.wrapperDel').css('display', 'block');
    $('.parent').css('opacity',0.2);
  });


  $('#closeDel').on('click', function(){
     $('.wrapperDel').css('display','none');
     $('.parent').css('opacity',0.8);
    });

  $('.delButton').on('click', function(){
    var dataDel=$('.idDel').val();
    if(dataDel>0){
    var msg=confirm("Da li ste sigurni da želite izbrisati podatak?");
    if(msg){
      //post method

    $.post('classes/deleteEntryHandler.class.php', 
    {value:dataDel}, function(value,status){

    });
      alert("Podatak je izbrisan iz baze podataka");
    }else{
      
    }
    }else{
      alert("Molimo unesite vrijednost u polje ID");
    }
  });
  






  //sorting

  $('#filterButton').on('click', function(){
  var selection=$('.selection').val();
  var order=$('.order').val();
  $.post("classes/sortHandler.class.php",
   {selected: selection, ascdesc: order}, function(data, status){
     $(".parent").html(data);
   }
   
   );
 
  });
    
    





    });
  
   
  
