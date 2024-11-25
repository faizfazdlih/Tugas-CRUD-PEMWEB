<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register | FAIZ</title>
    <style>
        .input-group.position-relative {
            position: relative;
        }
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
                    <img src="img/data.svg" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">HEALERT</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Tetap teratur dengan catatan pola makan, latihan, dan janji medis hanya dalam satu website</small>
            </div> 

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Daftar Akun</h2>
                        <p>Daftar sekarang untuk memulai perjalanan kesehatan yang lebih baik</p>
                    </div>

                    <form id="registerForm" method="POST" action="signup.php" onsubmit="showSuccessAlert(event)">
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                            <span class="show-password-icon" onclick="togglePasswordVisibility('password', 'eye-icon')">
                                <svg id="eye-icon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg w-100 fs-6 login-btn">Register</button>
                        </div>
                        <div class="row">
                            <small>Sudah punya akun? <a href="formlogin.php">Masuk</a></small>
                        </div>
                    </form>
                </div>
            </div> 

        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Sukses!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Akun kamu telah dibuat!
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(iconId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.add("text-primary");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("text-primary"); 
            }
        }

        function showSuccessAlert(event) {
            event.preventDefault(); // Prevent the form from submitting immediately for demonstration

            // Show the modal
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();

            // Proceed with the form submission after the modal is shown
            setTimeout(() => {
                document.getElementById("registerForm").submit();
            }, 2000); // Delay before submitting the form
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
