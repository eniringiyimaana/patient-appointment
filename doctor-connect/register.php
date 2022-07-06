<!DOCTYPE html>
<html lang="">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Connect</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">  
</head>

  <body>



  <nav class="navbar navbar-expand-sm navbar-light bg-primary text-light">
	  <div class="container-fluid ">
		<a class="navbar-brand " href="index.php"><img src = "img/logo/logo.png"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		  <ul class="navbar-nav ">
			<li class="nav-item">
			  <a class="nav-link" href="register">Sign Up  |</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="login.php">Login  |</a>
			</li>	
      <li class="nav-item">
			  <a class="nav-link" href="#">Our Doctors  |</a>
			</li>	
      <li class="nav-item">
			  <a class="nav-link" href="contactus.php">Contact Us</a>
			</li>			
		  </ul>		  
		</div>
	  </div>
	</nav>

</section>






<section>
    <div class="container">
  <form class="form-horizontal" action="/action_page.php">
            <h1 class="h3 mb-3 fw-normal">Please Register</h1>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="mobile" placeholder="Enter mobile Number" name="mobile">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>

        <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male">
        <label class="form-check-label" for="male">
        Male
        </label>
      </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" checked>
          <label class="form-check-label" for="male">
            Female
          </label>
        </div>

    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button class="w-60 btn btn-lg btn-primary mt-2" type="submit">Register</button>
        <p>Already Registered <a href="login.php">Login</a></p>
      </div>
    </div>
  </form>
</div>
</section>


    <section>
<div class="container-fluid bg-dark text-white mt-4">
      <footer class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
              <h5>Doctor Connect</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="aboutus.html" class="nav-link p-0 text-muted">About Us</a></li>
              <li class="nav-item mb-2"><a href="ourteam.html" class="nav-link p-0 text-muted">Our Team</a></li>
              <li class="nav-item mb-2"><a href="careers.html" class="nav-link p-0 text-muted">Careers</a></li>
              <li class="nav-item mb-2"><a href="press.html" class="nav-link p-0 text-muted">press</a></li>
              <li class="nav-item mb-2"><a href="contactus.html" class="nav-link p-0 text-muted">Contact Us</a></li>
            </ul>
            </div>

            <div class="col-md-4 mb-md-0 mb-4">
              <h5>Search a Doctor</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="tennis.html" class="nav-link p-0 text-muted">Dentist</a></li>
              <li class="nav-item mb-2"><a href="volleyball.html" class="nav-link p-0 text-muted">Dermatology</a></li>
              <li class="nav-item mb-2"><a href="goff.html" class="nav-link p-0 text-muted">Pediatrician</a></li>
              <li class="nav-item mb-2"><a href="boxing.html" class="nav-link p-0 text-muted">Brain and Nerves</a></li>
              <li class="nav-item mb-2"><a href="felloships.html" class="nav-link p-0 text-muted">Ear And Nose</a></li>
            </ul>
            </div>


            <div class="col-md-4 mb-md-0 mb-4">
              <h5>Need Help?</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="gyming.html" class="nav-link p-0 text-muted">Contact us</a></li>
              <li class="nav-item mb-2"><a href="speaking.html" class="nav-link p-0 text-muted">Terms of use</a></li>
              <li class="nav-item mb-2"><a href="workshops.html" class="nav-link p-0 text-muted">private policy</a></li>
              <li class="nav-item mb-2"><a href="innovations.html" class="nav-link p-0 text-muted">Doctor privacy policy</a></li>
            </ul>
            </div>

          </div>
        </div>
          
    
          <div class="col-md-5 mb-md-0 mb-4">
            <form>
              <h5></h5>
              <p>Subscribe to our newsletter</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>

          <hr>

          <p class="lead text-center">Copyright &copy; 2022 Doctor-Connect. All rights reserved</p>
        </div>
  
      </footer>
    </div>
</section>

    






    
<script src = "bootstrap/js/bootstrap.bundle.js"></script>
</div>
</body>
</html>