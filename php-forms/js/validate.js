$(function(){
    $("form[name='submit']").validate({
        rules:{
            name:"required",
            email:{
                required=true,
                email:true
            },
            gender:"required",
            age:"required"
        },
        messages:{
            name:"please provide your name",
            email:"please enter your email with proper format",
            gender:"please specify your gender",
            age:"please enter your beautifull age"
        },
        submitHandler:function(form){
            form.submit();
        }
    }
    );
    $.ajax({
        type: 'POST',
        url: 'submit.php',
        data: $('form').serialize(),
        
        success: function () {
          alert('form was submitted');
        }
      });
});