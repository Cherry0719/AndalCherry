$(document).ready(function () {

    // Custom helper function to display feedback alerts
    function showAlert(message, type) {
        const alertBox = $("#alert-message");
        alertBox
            .removeClass("alert-success alert-danger")
            .addClass(type === "success" ? "alert-success" : "alert-danger")
            .html(message)
            .fadeIn();
    }

    // ==========================================
    // 1. LOGIN FORM VALIDATION & CREDENTIAL CHECK
    // ==========================================
    $("#login-form").validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            },
            password: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Please enter your username.",
                minlength: "Username must be at least 3 characters long."
            },
            password: {
                required: "Please enter your password."
            }
        },
        errorElement: "span",
        errorClass: "error-text",
        highlight: function (element) {
            $(element).closest(".input-field").addClass("input-error");
        },
        unhighlight: function (element) {
            $(element).closest(".input-field").removeClass("input-error");
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element.closest(".input-field"));
        },
        submitHandler: function (form) {
            const enteredUsername = $("#username").val().trim();
            const enteredPassword = $("#password").val().trim();

            // Static Credential Values
            const validUsername = "admin";
            const validPassword = "12345";

            if (enteredUsername === validUsername && enteredPassword === validPassword) {
                showAlert("<i class='fa-solid fa-circle-check'></i> Login Successful! Redirecting...", "success");
                
                // Optional: Simulate redirect after 2 seconds
                setTimeout(function () {
                    alert("Welcome, Admin!");
                }, 1500);
            } else {
                showAlert("<i class='fa-solid fa-triangle-exclamation'></i> Invalid username or password.", "danger");
            }
            return false; // Prevent page reload
        }
    });

    // ==========================================
    // 2. REGISTRATION FORM VALIDATION
    // ==========================================
    $("#register-form").validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 11
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: "#reg-password"
            }
        },
        messages: {
            username: {
                required: "Please choose a username.",
                minlength: "Username must be at least 3 characters long."
            },
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            phone: {
                required: "Please enter your phone number.",
                digits: "Phone number must contain numbers only.",
                minlength: "Phone number must be at least 10 digits.",
                maxlength: "Phone number cannot exceed 11 digits."
            },
            password: {
                required: "Please create a password.",
                minlength: "Password must be at least 6 characters long."
            },
            confirm_password: {
                required: "Please confirm your password.",
                equalTo: "Passwords do not match."
            }
        },
        errorElement: "span",
        errorClass: "error-text",
        highlight: function (element) {
            $(element).closest(".input-field").addClass("input-error");
        },
        unhighlight: function (element) {
            $(element).closest(".input-field").removeClass("input-error");
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element.closest(".input-field"));
        },
        submitHandler: function (form) {
            showAlert("<i class='fa-solid fa-circle-check'></i> Registration successful! You can now log in.", "success");
            
            // Clear form inputs on successful registration
            form.reset();
            return false; // Prevent page reload
        }
    });

});