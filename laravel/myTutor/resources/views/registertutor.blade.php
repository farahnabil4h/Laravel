<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Registration Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
         body {
                font-family: 'Poppins', sans-serif;
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
    </style>
</head>
<body class="antialiased">
    <header>
        <div class="w3-header w3-display-container w3-green w3-padding-32 w3-center">
            <h1 style="font-size:calc(8px+4vw);">MY Tutor</h1>
            <p style="font-size:calc(8px+1vw);">Account Registration</p>
        </div>
    </header>
    <div class="w3-content w3-padding-64">
        <form class="w3-card w3-padding" action="{{ route('register.post') }}" method="post">
            <div class="w3-container w3-green w3-center"style="width:950px;" >
                <h3>Profile</h3></div>
                {{csrf_field()}}
                <div class="w3-row">
                    <div class="w3-half" style="padding-right:4px">
                        <p><label for="email">Full Name</label>
                        <input id="email" class="w3-input w3-round w3-border" type=
                        "name" name="tutor_name" required></p>
                        @if ($errors->has('tutor_name'))
                        <span class="text-danger">{{ $errors->first('tutor_name') }}</span>
                        @endif
                    </div>
                    <div class="w3-half" style="padding-right:4px">
                        <p><label for="email">Email</label>
                        <input id="email" class="w3-input w3-round w3-border" type="email" name="tutor_email" required></p>
                        @if ($errors->has('tutor_email'))
                        <span class="w3-red">{{ $errors->first('tutor_email') }}</span>
                        @endif
                    </div>
                </div>

                <div class="w3-row">
                    <div class="w3-half" style="padding-right:4px">
                        <p><label>Phone</label>
                        <input class="w3-input w3-round w3-border" type=
                        "text" name="tutor_phone" required></p>
                        @if ($errors->has('tutor_phone'))
                        <span class="text-danger">{{ $errors->first('tutor_phone') }}</span>
                        @endif
                    </div>
                    <div class="w3-half" style="padding-right:4px">
                        <p><label for="pass">Password</label>
                        <input id="pass" class="w3-input w3-round w3-border" type="password" name="tutor_password" required></p>
                        @if ($errors->has('tutor_password'))
                        <span class="w3-red">{{ $errors->first('tutor_password') }}</span>
                        @endif
                    </div>
                </div> 
                   
                <div class="w3-row">
                    <div class="w3-half" style="padding-right:4px">
                        <p><label>Address</label>
                        <input class="w3-input w3-round w3-border" type="text" name="tutor_address" required></p>
                        @if ($errors->has('tutor_address'))
                        <span class="text-danger">{{ $errors->first('tutor_address') }}</span>
                        @endif
                    </div>
                    <div class="w3-half" style="padding-right:4px">
                        <p><label>State</label>
                        <input class="w3-input w3-round w3-border" type=
                        "text" name="tutor_state" required></p>
                        @if ($errors->has('tutor_state'))
                        <span class="text-danger">{{ $errors->first('tutor_state') }}</span>
                        @endif
                    </div>
                </div> 
                   
                <div class="w3-row">
                    <input type="checkbox" name="remember"> Remember Me
                    <button class="w3-button w3-green w3-round w3-right">Save</button>
                </div>
            </div>
        </form>
    </div>
    <footer class="w3-footer w3-center w3-green w3-bottom">
        <p>Copyright &copy; 2022 MY Tutor</p>
    </footer>
</body>
</html>