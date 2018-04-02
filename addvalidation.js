$(function() { 
    
    $('#firstname').blur(function(){
       if( $(this).val() == "") {
           $('#label1').css('color', 'red');
       } else if ( $(this).val != ""){
           $('#label1').css('color', 'green');
       };
    });

    $('#lastname').blur(function(){
       if( $(this).val() == "") {
           $('#label2').css('color', 'red');
       } else if ( $(this).val != ""){
           $('#label2').css('color', 'green');
       };
    });
    
});