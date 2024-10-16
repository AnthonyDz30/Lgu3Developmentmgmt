<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----bootstrap----->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-----style----->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Register</title>
</head>
<body>
    <section class="container">
        <div class="form">

            <div class="form-content">
                <header>Register</header>

                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="fname" id="fname" placeholder="First Name" required>
                    </div>

                    <div class="input-group">
                        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                    </div>

                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class='bx bx-hide eye-icon' ></i>
                    </div>
                    <div class="input-group">
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                        <i class='bx bx-hide eye-icon' ></i>
                    </div>

                    <div class="button">
                        <input type="submit" class="btn" value="Register" name="register">
                    </div>

                    <div class="form-link">
                        <span>Already have an account? <a href="login.php" class="signin-link">Sign In</a></span>
                    </div>
                </form>
            </div>

            <div class="line"></div>

            <div class="media-option">
                <a href="https://www.facebook.com/" class="facebook-link">
                    <i class='bx bxl-facebook facebook-icon' ></i>
                </a>
                <a href="https://myaccount.google.com/" class="google-link">
                    <i class='bx bxl-google google-icon' ></i>
                </a>
            </div>
        </div>
    </section>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="./assets/js/script.js"></script>
</body>
</html>