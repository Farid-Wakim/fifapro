<?php 
Require("../connections/DAL.php");
$Action_ID = $_GET["Action_ID"];

if ($Action_ID == "1"){ //Register

    $Full_Name = $_GET["Full_Name"];
    $Email_Address = $_GET["Email_Address"];
    $Phone_Number = $_GET["Phone_Number"];
    $Account_Type_ID = $_GET["Account_Type_ID"];
    $Password = $_GET["Password"];
    $PasswordHashed = hash('sha256', $Password);
    

    $Account_Insert_Query = "INSERT INTO `accounts_list`(`Email_Address`, `Phone_Number`, `Full_Name`, `Password`, `Account_Type_ID`, `Status_ID`) VALUES ('$Email_Address','$Phone_Number','$Full_Name','$PasswordHashed','$Account_Type_ID','1')";

    if(mysqli_query($connection, $Account_Insert_Query)){
        echo "User created";
    }else{
        echo "Failed to create user";
    }

}

if ($Action_ID == "2"){

        $Email_Address = $_GET["Email_Address"];
        $LoginPassword = $_GET["Password"];
        $LoginPasswordHashed = hash('sha256', $LoginPassword);
    
        $FetchedPassword = "SELECT ID, Password, Account_Type_ID FROM accounts_list WHERE Email_Address = '$Email_Address'";
    
        $FetchedPassword_Query = mysqli_query($connection,$FetchedPassword);
        $FetchedPassword_Data = mysqli_fetch_assoc($FetchedPassword_Query);
    
        if ($FetchedPassword_Data) {
            $Password = $FetchedPassword_Data['Password'];  
            $User_ID = $FetchedPassword_Data['ID'];
            $Account_Type_ID = $FetchedPassword_Data['Account_Type_ID'];
        } else {
            echo "No matching user found.";
        }
    
        if ( $LoginPasswordHashed == $Password) {
           // echo 'Password is correct!';
            session_start();
            $_SESSION['User_ID'] = $User_ID;
            echo $Account_Type_ID;
    
        } else {
            echo 'Invalid password!';
        }
    
       // echo hash('sha256', $LoginPassword);
       // echo $Password;
    
    
    
    


}






?>