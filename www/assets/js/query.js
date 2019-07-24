

$('#submit-message').click(function(e) {
      //alert($(this).val());
      //alert(e.which);

    if (e.which==13) {
       //alert('enter is pressed');
       $('#message_form').submit();
    }
    
    });

$('#submit-email').click(function(e) {
      //alert($(this).val());
      //alert(e.which);

    if (e.which==13) {
       //alert('enter is pressed');
       $('#subscribe_form').submit();
    }
    
    });

    $('#message_form').submit(function() {
        // body...
        
          var email=$('#mes-email').val();
          var name=$('#mes-name').val();
          //var subject=$('#contact_subject').val();
          var message=$('#mes-text').val();
          
          
        // var group_id=<?php echo $_REQUEST['group_id'];?>;
        
        $.post('database/php/contact.php?contact=1',{email:email,name:name,message:message},function(response){
        
           if (response.includes("wrong")) {
                document.getElementById('message_form').reset();
                launch_toast2();
            

          }else if(response==1) {
            launch_toast1();
             document.getElementById('message_form').reset();
          }else{
            alert("You have entered wrong information");
            launch_toast2();
          }

        });
        return false;
          // not refress the webpage  ,without it will refress the page

       });




 $('#subscribe_form').submit(function() {
        // body...
          var name=$('#reg-name').val();
          var email=$('#reg-email').val();
          

        $.post('database/php/contact.php?subscribe=1',{name:name,email:email},function(response){
        
           if (response.includes("wrong")) {
                document.getElementById('subscribe_form').reset();
            launch_toast2();
            

          }else if(response==1) {
             launch_toast1();
             document.getElementById('subscribe_form').reset();
          }else{
           launch_toast2();
          }

        });
        return false;
          // not refress the webpage  ,without it will refress the page

       });
