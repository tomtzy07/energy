<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">

	<style>
		.font-1 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }

    .highlight-title {
        color: rgb(172, 105, 105); /* Change the color to your preferred highlight color */
        /* Add any other styles you want for highlighting */
    }

	body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        #background-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: 50px;
            height: 1020px;
            z-index: -1000;
            background-size: cover;
        }
        .content-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.036); /* Adjust the opacity and color as needed */
        }
	
		
		</style>
	</head>
	<body>
		<video id="background-video" autoplay loop muted playsinline>
			<source src="../image/jm4.mp4" type="video/mp4">
		</video>
		<div class="content-overlay"></div> <!-- This overlay ensures text is readable -->
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 text-center mb-5">
					</div>
					<div class="col-md-7 text-center mb-5">
					</div>
					<div class="col-md-7 text-center mb-5">
					</div>
					<div class="col-md-7 text-center mb-5">
					</div>
					<div class="col-md-7 text-center mb-5">
					</div>
					<div class="col-md-7 text-center mb-5">

					</div>
				</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
	            {{-- <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div> --}}
	          </form>
	          <p class="w-100 text-center">&mdash; FACEBOOK PAGE &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="https://www.facebook.com/icpep.psu" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> CpE-UCC </a>
	          	<a href="https://www.facebook.com/psuurdofficial" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> PSU-UCC </a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>

	</body>
</html>

