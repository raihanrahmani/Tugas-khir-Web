<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{url('/proseslogin')}}" method="GET">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required>
                    <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                        <label>
                            <a href="#">Forgot Password?</a>
                        </label>
                    </div>
                    <button type="submit">Log In</button>
                    <div class="register">
                        <p>Don't Have a account? <a href="#">Register</a></p>
                    </div>
                </form>

            </div>

        </div>
    </section>
</body>
</html>