<?php
session_start();
if(isset($_SESSION["signin"]) && $_SESSION["signin"] === true){
    header("location: /signin");
    exit;
}
?>
@extends('master')
@section('content')
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Registration</title>
        <link rel="stylesheet" href="/style.css"/>
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
</head>
    <body class="container"> 
        <div class="main">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="main">
                <div class="regform"><h1>Registration</h1>
                <form method="post" action="/register">
                {{csrf_field()}}
                <label for="ic"><b>IC</b></label>
                <input class="form-control" name="ic" type="text" maxlength="12" required="true"/>
                 
                <label for="name"><b>Name</b></label>
                <input class="form-control" name="name" type="text" maxlength="30" required="true"/>
             
                <label for="email"><b>Email Address</b></label>
                <input class="form-control" name="email" type="email" maxlength="50" required="true"/>

                <label for="phone"><b>Phone Number</b></label>
                <input class="form-control" name="phoneno" type="text" maxlength="11" required="true"/>
                
                <label for="password"><b>Password</b></label>
                <input class="form-control" name="password" type="password" maxlength="15" minlength="8" required="true"/>
                
                <label for="cPassword"><b>Confirm Password</b></label>
                <input class="form-control" name="cPassword" type="password" maxlength="15" minlength="8" required="true"/>
                <hr class="mb-3">
                <div class="row-cols-sm-1">
                <input class="btn btn-primary" href="{{route('student.signin')}}" id="register" type="submit" name="submit" value="Sign Up"/>
                </div>
                </div>
            </form>
        </div>
      </div>
        </div>
        </div>
    </body>
</html>
@endsection