
$(document).ready(function(){
$("#login").click(function(){
var username = $("#username").val();
var password = $("#password").val();
// Checking for blank fields.
if( username =='' || password ==''){
    $('input[type="text"],input[type="password"]').css("border","2px solid red");
    $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
    alert("Please fill all fields...!!!!!!");
    }
    else {
          $.ajax({ 
            url: "http://localhost/Blogtest/index.php/UserController/login/",
            type : "post",
            dataType: "json",
            data : { username: username, password :password },  
            success: function(result){
                if(result.val ==1)
                {
                    window.location.replace("http://localhost/Blogtest/index.php/UserController/dashboard/"+result.ID);
                }
                else if(result.val == 2)
                {
                    alert('InCorrect Password');
                }
                else if(result.val == 3)
                {
                    alert('InCorrect User Name');
                }
                else if(result.val == 0)
                {
                    alert('InCorrect User credentials');
                }
               $("#username").val(''); 
               $("#password").val(''); 
        alert(result.val); 
    }
   });
    }
    });
});
        
        
//        
//    $.post("http://localhost/Blogtest/index.php/UserController/login/",{ username: username, password1:password},
//    function(data) {
//        
//        print_r(data);  
//        
//        if(data=='Invalid Email.......') {
//            $('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
//            $('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
//            alert(data);
//        }else if(data=='Email or Password is wrong...!!!!'){
//            $('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
//            alert(data);
//        } else if(data=='Successfully Logged in...'){
//            $("form")[0].reset();
//            $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
//            alert(data);
//        } else{
//            alert(data);
//        }
////    });
////   }
//  });
//});



function validatelogin()
{
    if($('input[name ="username"]').val()!='')
    $.ajax({url: "demo_test.txt", success: function(result){
        $("#div1").html(result);
    }});
    
    
    
    
    alert("login");
}
