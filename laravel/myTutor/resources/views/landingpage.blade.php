<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MY Tutor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Styles -->
        <style>
        body {
                font-family: 'Poppins', sans-serif;
                background-image: linear-gradient(to right, #57C84D, #ABE098);
        }
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
        html {
            height: 100%;
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }
        .button{
            width: 250px;
            font-size: 25px;
        }
        </style>
    </head>

    <body class="antialiased">
        <div class="container">
        <span> 
            <h1 style="color:white;" >Welcome to MY Tutor</h1>
            <h2 style="color:white;">Find your very own tutor with us now! </h2>
            <br>
            <div class="w3-center">
                <a href="{{ url('login') }}">
                    <button class="button w3-white w3-round">Login</button>
                </a>
            <br><br>
                <a href="{{ url('registrationtutor') }}">
                    <button class="button w3-white w3-round">Register</button>
                </a>
            </div>
        </span>
        </div>  
    </body>
</html>
