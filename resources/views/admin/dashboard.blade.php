{{-- @extends('layouts.master')

@section('title', 'Energy Monitoring Dashboard')

@section('content')

<style>
    body {
      /*  background-color: #c5f6f7f9; light blue */
    
      
    }
    .font-1 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }
    .font-2{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }
    .font-3{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }
    .font-4{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;

    }
    
</style>

<div class="container-fluid px-4">
    <h1 class="mt-4"></h1>
</div>    


<div class="container-fluid">
    
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <style>

                .bg-gradient-blue {
                    background-image: linear-gradient(to bottom, #75edf1, #03036b); /* Gradient from dark green to light green */
                }
            </style>
            <div class="card bg-gradient-blue text-black mb-4">
                <div class="card-body">
                    <img src="{{asset('/image/cpe logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                    <span class="font-1">Computer Engineering Faculty</span>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        

        <div class="col-xl-3 col-md-6">
            <style>
                .bg-gradient-warning {
                    background-image: linear-gradient(to bottom, #fbf7ad, #b08401); /* Gradient from dark green to light green */
                }
            </style>
                <div class="card bg-gradient-warning text-black mb-4">
                    <div class="card-body">
                        <img src="{{asset('/image/ME logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                        <span class="font-3">Mechanical Engineering Faculty</span>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <style>
                    .bg-gradient-danger {
                        background-image: linear-gradient(to bottom, #fbadad, #750505); /* Gradient from dark green to light green */
                    }
                    
                </style>
                <div class="card bg-gradient-danger text-black mb-4">
                    <div class="card-body">
                        <img src="{{asset('/image/iee logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                        <span class="font-4">Electrical Engineering Faculty</span>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <style>
            .bg-gradient-green {
                background-image: linear-gradient(to bottom, #a9f175, #036b2b); /* Gradient from dark green to light green */
            }
        </style>
        <div class="card bg-gradient-green text-black mb-4">
            <div class="card-body">
                <img src="{{asset('/image/CE logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                 <span class="font-2">Civil Engineering Faculty</span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Transition</title>
<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 100vh;
        z-index: 0;
    }
    
    .image-container img {
        position: absolute; 
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: opacity 1s ease-in-out;
        
    }
    
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    
</style>
</head>
<body>


<div class="image-container">
    <img src="{{asset('/image/tom logo.png')}}" alt="tom logo" style="opacity: 1;">
    <img src="{{asset('/image/psu front.jpg')}}" alt="psu front" style="opacity: 0;">

</div>

<script>
    // JavaScript to switch between images after a certain duration
    var images = document.querySelectorAll('.image-container img');
    var currentImageIndex = 0;
    var interval = setInterval(changeImage, 5000); // Change image every 5 seconds

    function changeImage() {
        images[currentImageIndex].style.opacity = 0;
        currentImageIndex = (currentImageIndex + 1) % images.length;
        images[currentImageIndex].style.opacity = 1;
    }

</script>

</body>
</html>


@endsection  --}}


@extends('layouts.master')

@section('title', 'Energy Monitoring Dashboard')

@section('content')

<style>
    body {
        /*  background-color: #c5f6f7f9; light blue */
        margin: 0;
        padding: 0;
        height: 100%;
        overflow-x: hidden;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }

    .container-fluid {
        position: relative;
        padding: 0;
        margin: 0;
        height: 1%;
        left: 1.2%;
    }

    .container-fluid1 {
        position: relative;
        padding: 0;
        margin: 10;
        height: 50%;
        /* top: 20%; */
        left: 75%;
    }
    .container-fluid2 {
        position: relative;
        padding: 0;
        margin: 0;
        height: 20%;
        top: 20%;
        left: 1.2%;
    }
    .container-fluid3 {
        position: relative;
        padding: 0;
        margin: 0;
        height: 1%;
        left: 75%;
    }
    .image-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        animation: fadeIn 2s ease-in-out infinite alternate;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        80% { opacity: 0.80; }
    }

    .card {
        position: relative;
        z-index: 1; /* Ensure cards appear above the background */
    }

    .card-footer .fa-angle-right {
        margin-left: 2px;
    }

    /* Additional CSS styles for fonts */
    .font-1 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }

    .font-2 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }

    .font-3 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }

    .font-4 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgba(1, 1, 9, 0.888);
        font-weight: bolder;
    }
</style>

<div class="container-fluid px-4">
    <h1 class="mt-4"></h1>
</div>

<div class="image-container">
    <img src="{{asset('/image/psu front.jpg')}}" alt="Background Image">
</div>

<div class="container-fluid">
    <div class="row"> 
        <div class="col-xl-3 col-md-6">
            <style>

                .bg-gradient-blue {
                    background-image: linear-gradient(to bottom, #75edf1, #03036b); /* Gradient from dark green to light green */
                }
            </style>
            <div class="card bg-gradient-blue text-black mb-4">
                <div class="card-body">
                    <img src="{{asset('/image/cpe logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                    <span class="font-1">Computer Engineering Faculty</span>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid1">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <style>
                .bg-gradient-warning {
                    background-image: linear-gradient(to bottom, #fbf7ad, #b08401); /* Gradient from dark green to light green */
                }
            </style>
            <div class="card bg-gradient-warning text-black mb-4">
                <div class="card-body">
                    <img src="{{asset('/image/ME logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                    <span class="font-3">Mechanical Engineering Faculty</span>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid2">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <style>
                .bg-gradient-danger {
                    background-image: linear-gradient(to bottom, #fbadad, #750505); /* Gradient from dark green to light green */
                }
                
            </style>
            <div class="card bg-gradient-danger text-black mb-4">
                <div class="card-body">
                    <img src="{{asset('/image/iee logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                    <span class="font-4">Electrical Engineering Faculty</span>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid3">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <style>
                .bg-gradient-green {
                    background-image: linear-gradient(to bottom, #a9f175, #036b2b); /* Gradient from dark green to light green */
                }
            </style>
            <div class="card bg-gradient-green text-black mb-4">
                <div class="card-body">
                    <img src="{{asset('/image/CE logo.png')}}" alt="Logo" width="50" height="50"> <!-- Add your logo here -->
                    <span class="font-2">Civil Engineering Faculty</span>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="https://blynk.cloud/dashboard/login">View The System</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
