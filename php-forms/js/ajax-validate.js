$(document).ready(function(){
    $("#submit").click(function(){
    var name = $("#name").val();
    var email = $("#email").val();
    var gender = $("#gender").val();
    var age = $("#age").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1='+ name + '&email1='+ email + '&gender1='+ gender + 'age1='+ age;
    if(name==''||email==''||gender==''||age=='')
    {
    alert("Please Fill All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    type: "POST",
    url: "ajaxsubmit.php",
    data: dataString,
    cache: false,
    success: function(result){
    alert(result);
    }
    });
    }
    return false;
    });
    });