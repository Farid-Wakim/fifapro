<?php
Require("connections/DAL.php");
session_start();
$User_ID = $_SESSION["User_ID"];
$User_Data_Query = "SELECT Full_Name FROM accounts_list WHERE ID = $User_ID";
$User_Data_Result = mysqli_query($connection,$User_Data_Query);
$User_Row = mysqli_fetch_assoc($User_Data_Result);

$User_Name = $User_Row["Full_Name"];







?>

<!DOCTYPE html>
<html>

<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

        <link href="style.css" rel="stylesheet">
</head>

<body>

        <div class="p-3 title text-center display-1">FIFAPRO</div>
     <?php   if(isset($_SESSION["User_ID"])){

include("navbar-session.php");

}?>

        <div class="container">


                <h1>Hello <?php echo $User_Name; ?></h1> 
                <div class="row">
                        <div class="col-sm-12 col-md-6">
                                <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                                
                                                <h4><select name="team" id="teamSelect">
                                                        <option value="team1">team1</option>
                                                        <option value="team2">team2</option>
                                                        <option value="team3">team3</option>
                                                </select><button class="btn btn-danger" type="submit">Change</button></h4>
                                                <img src="resources/images/team-fcb.jpg" class="img img-fluid">
                                        </div>
                                </div>

                                <h4 class="py-3">Next Match</h4>
                                <img src="resources/images/team-fcb.jpg" class="img img-fluid w-25 d-inline">
                                <h4  class="p-3 d-inline">VS</h4>
                                <img src="resources/images/team-fcb.jpg" class="img img-fluid w-25 d-inline">
                                <h4 class="pt-3">Current Tournaments</h4>
                                <ul>
                                        <li>Tournament 1</li>
                                        <li>Tournament 2</li>
                                </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                                <h4> <select name="formation" id="formationSelect">
                                        <option value="formation1">formation1</option>
                                        <option value="formation2">formation2</option>
                                        <option value="formation3">formation3</option>
                                </select><button class="btn btn-danger" type="submit">Change</button></h4>
                                <img class="img w-75" src="./resources/images/formation442.png" alt="" srcset="">
                                Add All player names here
                        </div>
                </div>
        </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</body>

</html>