$(document).ready(function(){

    var ws_general_url = "WS/";

    
    $("#button_register").click(function(){

    var Full_Name = $("#input_full_name").val().trim();
    var Email_Address = $("#input_email").val().trim();
    var Phone_Number = $("#input_phone_number").val().trim();
    var Account_Type_ID = $("#dropdown_account_types").val();
    var Password = $("#input_password").val().trim();
    var Password_Check = $("#input_password_check").val().trim();
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;



    if(Full_Name === "" || Email_Address === "" || Phone_Number === "" || Password === ""){


        alert("Please fill all the fields to proceed.");


    }else if(!emailPattern.test(Email_Address)){

        alert("Please enter a valid email.");

    }else if(Password != Password_Check){

        alert("Passwords do not match.");

    }else if(isNaN(Phone_Number)){

        alert("Please enter a valid phone number.");

    }else{
        add_new_account(Full_Name,Email_Address,Phone_Number,Account_Type_ID,Password);
    }

    });

function add_new_account(val1,val2,val3,val4,val5){

        $.ajax({
            url: ws_general_url + 'WS_Actions.php?',
            data:({Action_ID:"1",Full_Name:val1,Email_Address:val2,Phone_Number:val3,Account_Type_ID:val4,Password:val5}),
            type: 'GET',
            success: function(response) {
                alert(response);
             
            }
        });

    }



});