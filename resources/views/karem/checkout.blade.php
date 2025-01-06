<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="assets/css/tiny-slider.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index">Home</a>
						</li>
						<li><a class="nav-link" href="shop">Shop</a></li>
						<li><a class="nav-link" href="about">About us</a></li>
						<li><a class="nav-link" href="contact">Contact us</a></li>
						<li><a class="nav-link" href="{{ route('logout') }}">logout</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="cart"><img src="assets/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Checkout</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<div class="untree_co-section">
		    <div class="container">
		      <div class="row mb-5">
		        <div class="col-md-12">

		        </div>
		      </div>

			  <form action="{{ route('checkout.store') }}" method="POST">
				@csrf
				<div class="form-group row">
					<div class="col-md-6">
						<h2 class="h3 mb-3 text-black">Billing Details</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<div class="form-group">
								<label for="Country" class="text-black">Country<span class="text-danger">*</span></label>
								<input type="text" class="form-control @error('Country') is-invalid @enderror" id="Country" name="Country" value="{{ old('Country') }}">
								@error('Country') <span class="text-danger">{{ $message }}</span> @enderror
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label for="first_name" class="text-black">First Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}">
									@error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="col-md-6">
									<label for="last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}">
									@error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
							</div>
			
							<div class="form-group row">
								<div class="col-md-12">
									<label for="address" class="text-black">Address <span class="text-danger">*</span></label>
									<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Street address" value="{{ old('address') }}">
									@error('address') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
							</div>
			
							<div class="form-group row">
								<div class="col-md-6">
									<label for="state" class="text-black">State <span class="text-danger">*</span></label>
									<input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state') }}">
									@error('state') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
							</div>
			
							<div class="form-group row mb-5">
								<div class="col-md-6">
									<label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
									<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
									@error('email') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="col-md-6">
									<label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
									<input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
									@error('phone') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
							</div>
			
							<div class="form-group">
								<button type="submit" class="btn btn-black btn-lg py-3 btn-block">Place Order</button>
							</div>
						</div>
					</div>
				</div>
			</form>


		          </div>
		        </div>
		      
		      </div>
			 
		      <!-- </form> -->
		    </div>
		  </div>

		<!-- Start Footer Section -->
		@extends('karem.layouts.footer')
