<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseTech</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

<style>
    body{
        font-family: 'Roboto', sans-serif;
    }

    .nav-item-custom :{
        color:'white' !important;
        font-weight:'500' !important;
    }
</style>

</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-transparent">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" style='width:95px'/>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-4">
                <li class="nav-item">
                    <a class="nav-link nav-item-custom" href="#" style='color:white'>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nav-item-custom" >
                    <a class="nav-link" href="#"  style='color:white'>Course</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="#"  style='color:white'>About</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-light my-2 my-sm-0 mr-2" type="submit">Log in</button>
                <button class="btn btn-info my-2 my-sm-0" type="submit">Register</button>
            </form>
        </div>
    </div>
    </nav>
    <div class="jumbotron d-flex flex-column align-items-center justify-content-center" style='background:center center/cover  url("assets/images/jumbotron.jpg");border-radius:0;min-height:100vh;'>
            <h5 class="display-4 text-light text-center">
                Raihlah mimpimu dengan mulai belajar bersama <span class='font-weight-bold'> CourseTech!</span>
            </h5>
            <!-- <p class="lead"> -->
                <a class="btn btn-info btn-lg" href="Jumbo action link" role="button">Join Now</a>
            <!-- </p> -->
    </div>



