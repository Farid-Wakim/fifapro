<?php
Require("../connections/DAL.php");
$Action_ID = $_GET["Action_ID"];


if ($Action_ID == "1"){


    $Fetch_All_Account_Types_Query = "SELECT ID, Name FROM Account_Types_List";
    
    $Account_Types_Query = mysqli_query($connection,$Fetch_All_Account_Types_Query);
    $Account_Types_Data = array();

    while ($row = mysqli_fetch_assoc($Account_Types_Query)) {
        $Account_Types_Data[] = $row;
    }
    echo json_encode($Account_Types_Data);


}




















?>