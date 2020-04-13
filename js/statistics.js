$(document).ready(function(){
    //alert("ready");
    $.get('classes/statisticsId.class.php', function(data){
      $('.parent').html(data);
    });
  });