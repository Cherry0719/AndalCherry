<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <main class="form-box">
        <h2>Register</h2>

        <!-- Alert Message Container -->
        <div id="alert-message" class="alert-box"></div>
        
        <form id="register-form" action="#" method="POST" novalidate="novalidate">
            <!-- Username -->
            <div class="input-group">
                <label for="reg-username">Username</label>
                <div class="input-field">
                    <input type="text" id="reg-username" name="username" placeholder="Choose a username" autocomplete="username">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>

            <!-- Email Address -->
            <div class="input-group">
                <label for="email">Email Address</label>
                <div class="input-field">
                    <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>

            <!-- Phone Number -->
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <div class="input-field">
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" autocomplete="tel">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label for="reg-password">Password</label>
                <div class="input-field">
                    <input type="password" id="reg-password" name="password" placeholder="Create password" autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <div class="input-field">
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm password" autocomplete="new-password">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Register</button>

            <!-- Switch to Login Link -->
            <p class="switch-link">
                Already have an account? <a href="login.php">Login Here</a>
            </p>
        </form>
    </main>

    <!-- jQuery and jQuery Validation Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</body>
</html>