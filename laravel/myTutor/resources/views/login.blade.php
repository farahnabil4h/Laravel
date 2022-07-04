<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Login Page</title>
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
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif
    <header>
        <div class="w3-header w3-display-container w3-green w3-padding-32 w3-center">
            <h1 style="font-size:calc(8px+4vw);">MY Tutor</h1>
            <p style="font-size:calc(8px+1vw);">Account Login</p>
        </div>
    </header>

    <div class="w3-padding-64 w3-container" style="display:flex; justify-content: center">
        <div class="w3-card-4 w3-round" style="width:700px; margin:auto; text-align: left;">
            <div class="w3-green w3-container w3-center"><h2>Login as Tutor</h2></div>
                <form action="{{ route('login.post') }}" class="w3-container" method="post">
                    {{csrf_field()}}
                    <p><label for="email">Email</label>
                    <input id="email" class="w3-input w3-round w3-border" type="email" name="tutor_email" required></p>
                    @if ($errors->has('tutor_email'))
                    <span class="w3-red">{{ $errors->first('tutor_email') }}</span>
                    @endif

                    <p><label for="pass">Password</label>
                    <input id="pass" class="w3-input w3-round w3-border" type="password" name="tutor_password" required></p>
                    @if ($errors->has('tutor_password'))
                    <span class="w3-red">{{ $errors->first('tutor_password') }}</span>
                    @endif

                    <div class="w3-row">
                        <input type="checkbox" name="remember"> Remember Me
                        <button class="w3-button w3-green w3-round w3-right">Login</button>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
    <footer class="w3-footer w3-center w3-green w3-bottom">
        <p>Copyright &copy; 2022 MY Tutor</p>
    </footer>
</body>
</html>