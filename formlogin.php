<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN FORM | FAIZ</title>
    <style>
        .show-password-icon {
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .login-btn {
            background-color: #36B9CC !important;/* Your custom color */
            border: none;
            color: white !important;
        }
        .login-btn:hover {
            background-color: #36B9CC !important; /* Darker shade for hover effect */
        }
    </style>
</head>
<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #4e73df;">
                <div class="featured-image mb-3">
                    <img src="img/medic.svg" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">HEALERT</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Tetap teratur dengan catatan pola makan, latihan, dan janji medis hanya dalam satu website</small>
            </div> 

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hell-O</h2>
                        <p>Masuk dan nikmati kemudahan memantau kesehatan anda setiap hari</p>
                    </div>
                    <form method="POST" action="ceklogin.php" onsubmit="handleLogin(event)">
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                        </div>
                        <div class="mb-1 position-relative">
                            <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                            <span class="show-password-icon" onclick="togglePasswordVisibility()">
                                <svg id="eye-icon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg w-100 fs-6 login-btn">Login</button>
                        </div>
                        <div class="row">
                            <small>Belum punya akun? <a href="register.php">Daftar</a></small> <!-- Link to the register page -->
                        </div>
                    </form>
                </div>
            </div> 

        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Login Successful!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You have successfully logged in!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Go to Dashboard</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Login Failed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Incorrect username or password. Please try again.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.getElementById("eye-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.add("text-primary");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("text-primary"); 
            }
        }

        // function handleLogin(event) {
        //     event.preventDefault();  // Prevent the form from submitting immediately for demonstration

        //     // Simulate a login check (Replace this with actual validation logic)
        //     const username = document.querySelector("input[name='username']").value;
        //     const password = document.getElementById("password").value;

        //     // Example: Simple check for the credentials (you should replace this with actual validation)
        //     if (username === "username" && password === "password") {
        //         // Show success modal
        //         const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        //         successModal.show();

        //         // Simulate successful login delay before redirect
        //         setTimeout(() => {
        //             window.location.href = 'formlogin.php'; // Redirect to dashboard
        //         }, 2000); // 2-second delay
        //     } else {
        //         // Show error modal
        //         const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
        //         errorModal.show();
        //     }
        // }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>










































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #121212;
        }
        .login-form {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            color: #fff;
        }
        .form-control {
            background-color: #333;
            border: none;
            color: #fff;
        }
        .form-control:focus {
            background-color: #333;
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .social-login {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .social-login button {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: none;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <div class="text-center mb-4">
                <img src="https://via.placeholder.com/50" alt="Logo" class="mb-3">
                <h4>SIGN IN</h4>
            </div>
            <form method="POST" action="ceklogin.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="password" name="password" required>
                </div>
                <div class="form-group text-right">
                    <a href="#" class="text-light">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                <div class="footer-text">
                    <a href="#" class="text-light">Create account</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->