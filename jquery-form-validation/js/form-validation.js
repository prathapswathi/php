$(function ()
{
    $("form[name='registration']").validate({
        rules:{
            firstname: "required",
            lastname: "required",
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength:5
            }
        },
        messages:{
            firstname:"please enter your firstname",
            lastname:"please enter your lastname",
            password:{
                required:"please provide your password",
                minlength:"the password contain minimun 5 charector"
            },
            email:"please provide a email"
        },
        submitHandler:function(form){
            form.submit();
        }
    });
});