<?php
Require("connections/DAL.php");
session_start();




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
        <?php if(isset($_SESSION["User_ID"])) {include("navbar-session.php");}?>


        <div class="container">

                <h1>The following tournaments are occuring:</h1>
                <h3>NameOfTournament</h3>
                <h2><div class="row">
                        <div class="col-sm-12 col-md-2">
                                
                                <h2>16s</h2>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                <div class="m-5"></div>
                                <div class="card">test</div>
                                <div class="card">test</div>
                                
                        </div>
                        <div class="col-sm-12 col-md-2">
                                <h2>Quarter</h2>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
                                <div class="m-4"> </div>
                                <div class="card">test</div>
          
                        </div>
                        <div class="col-sm-12 col-md-2">
                                <h2>Semi</h2>
                                <div class="card">test</div>
                                <div class="m-3"> </div>
                                <div class="card">test</div>
                                <div class="m-3"> </div>
                                <div class="card">test</div>
                                <div class="m-3"> </div>
                                <div class="card">test</div>


                        </div>
                        <div class="col-sm-12 col-md-2">
                                <h2>Finals</h2>
                                <div class="card">test</div>
                                <div class="p-sm-0 p-md-3"> </div>
                                <div class="card">test</div>

                        </div>
                        <div class="col-sm-12 col-md-2">
                                <h2>Winner</h2>
                                <div class="card">test</div>


                        </div>
                </div></h2>
        
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</body>

</html>