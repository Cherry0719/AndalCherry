<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <main class="form-box">
        <h2>Login</h2>

        <!-- Alert Message Container -->
        <div id="alert-message" class="alert-box"></div>
        
        <form id="login-form" action="#" method="POST" novalidate="novalidate">
            <!-- Username Input -->
            <div class="input-group">
                <label for="username">Username</label>
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder="Enter username" autocomplete="username">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>

            <!-- Password Input -->
            <div class="input-group">
                <label for="password">Password</label>
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Enter password" autocomplete="current-password">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>

            <!-- Options -->
            <div class="options-group">
                <label class="remember-me">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="#" class="forgot-btn">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Login</button>

            <!-- Switch to Register Link -->
            <p class="switch-link">
                Don't have an account? <a href="register.php">Register</a>
            </p>
        </form>
    </main>

    <!-- jQuery and jQuery Validation Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</body>
</html>I'm