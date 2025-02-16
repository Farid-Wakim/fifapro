
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
        <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                <link href="style.css" rel="stylesheet">
				<script src="JS/Info_Fetch.js"></script>
				<script src="JS/home.js"></script>
        </head>
<body>

	<div class="p-3 title text-center display-1">FIFAPRO</div>
<?php 

if(isset($_SESSION["User_ID"])){

	include("navbar-session.php");

}
// else{

// 	include("navbar.php");
// }



?>

<div class="container py-3">
	<div class="row">
		<div class="col-sm-12 col-lg-6">
		<h2> What is FifaPro</h2>
		
		<p>
		Unleash the ultimate FIFA showdown with our Tournament Creator! Whether you’re organizing a small league with friends or a massive knockout competition, this software gives you total control over your tournament experience. Set up custom brackets, create thrilling match rules, and easily track results as the action unfolds. Invite players, choose your favorite teams, and watch the competition heat up with real-time updates and stats. With customizable formats, from intense knockout rounds to epic round-robin battles, it’s the perfect way to elevate your FIFA game to the next level. Get ready to crown your champion and dominate the virtual pitch!
	</p> 
	<a class="btn btn-outline-pink w-100 m-1 p-3" href="#signup">Create A New Tournament/Account </a>
	<a class="btn btn-pink w-100 m-1 p-3" href="login.html">Get Back In The Game</a>
	
</div>

<div class="col-sm-12 col-lg-6">
	<img class="img img-fluid mx-auto d-block landing-player" src="./resources/images/landing-player.png"> 
</div>
</div>
</div>
<div class="features pt-5">
<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-3">
		<img src="resources/images/background-football.jpg" alt="feature1" class="rounded align-items-center img img-fluid">
		<h3>
			Feature 1
		</h3>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet labore molestias vero porro nisi quae incidunt. Adipisci sequi ducimus, dolores numquam modi consequuntur cupiditate non possimus, ipsam illo error dicta.	
		</p>
	</div>
	<div class="col-sm-12 col-md-3">
		<img src="resources/images/background-football.jpg" alt="feature1" class="rounded align-items-center img img-fluid">
		<h3>
			Feature 2
		</h3>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet labore molestias vero porro nisi quae incidunt. Adipisci sequi ducimus, dolores numquam modi consequuntur cupiditate non possimus, ipsam illo error dicta.	
		</p>
	</div>
	<div class="col-sm-12 col-md-3">
		<img src="resources/images/background-football.jpg" alt="feature1" class="rounded align-items-center img img-fluid">
		<h3>
			Feature 3
		</h3>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet labore molestias vero porro nisi quae incidunt. Adipisci sequi ducimus, dolores numquam modi consequuntur cupiditate non possimus, ipsam illo error dicta.	
		</p>
	</div>
	<div class="col-sm-12 col-md-3">
		<img src="resources/images/background-football.jpg" alt="feature1" class="rounded align-items-center img img-fluid">
		<h3>
			Feature 4
		</h3>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet labore molestias vero porro nisi quae incidunt. Adipisci sequi ducimus, dolores numquam modi consequuntur cupiditate non possimus, ipsam illo error dicta.	
		</p>
	</div>
</div>
</div>
</div>


<div class="stats py-5">
	<h2 class="pb-5">This is how much people like FifaPro</h2>
	<blockquote class="blockquote">
		<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
	</blockquote>


	<blockquote class="blockquote text-end">
		<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
	</blockquote>

	
	
	<blockquote class="blockquote">
		<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
	</blockquote>

</div>


<div class="signup py-5 text-center" id ="signup" >
<h2 class="py-3">Create A New Tournament/Account</h2>	
<div class="container">
		<div>
			<div class="form-group input-group mb-5">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
				<input name="" class="form-control" placeholder="Full name" type="text" id="input_full_name">
			</div>
			<div class="form-group input-group mb-5">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				 </div>
				<input name="" class="form-control" placeholder="Email address" type="email" id="input_email">
			</div>
			<div class="form-group input-group mb-5">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
				</div>
				<select class="custom-select" style="max-width: 120px;">
					<option selected="">+971</option>
					<option value="1">+972</option>
					<option value="2">+198</option>
					<option value="3">+701</option>
				</select>
				<input name="" class="form-control" placeholder="Phone number" type="text" id="input_phone_number">
			</div>
			<div class="form-group input-group mb-5">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-building"></i> </span>
				</div>
				<select class="form-control" id="dropdown_account_types">
					<option selected=""> Select account type</option>
					<!-- <option>Admin</option>
					<option>Coach</option>
					<option>Viewer</option> -->
				</select>
			</div> <!-- form-group end.// -->
			<div class="form-group input-group mb-5">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input class="form-control" placeholder="Create password" type="password" id="input_password">
			</div>
			<div class="form-group input-group mb-5">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input class="form-control" placeholder="Repeat password" type="password" id="input_password_check">
			</div>                                      
			<div class="form-group">
				<button type="submit" class="btn btn-pink btn-block" id="button_register"> Create Account  </button>
			</div>  	    
			<p class="text-center">Have an account? <a class="font-pink" href="login.html">Log In</a> </p>                                                                 
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
