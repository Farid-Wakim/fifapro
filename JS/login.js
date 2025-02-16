$(document).ready(function(){

    var ws_general_url = "WS/";

    $("#button_login").click(function(){
    var Email_Address = $("#input_email").val().trim();
    var Password = $("#input_password").val().trim();

    if(Email_Address === "" || Password === ""){


        alert("Please fill all the fields to proceed.");


    }else {

        login(Email_Address,Password);

    }
    });

    function login(val1,val2){

        $.ajax({
            url: ws_general_url + 'WS_Actions.php?',
            data:({Action_ID:"2",Full_Name:val1,Email_Address:val1,Password:val2}),
            type: 'GET',
            success: function(response) {
                if(response == "1"){
                    window.location.href = "admin-main.php";
                } else {
                    window.location.href = "index.php";
                }
            }
        });

    }



});