<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to bottom, blue, yellow);
        }
        #passwordAlert {
            display: none;
            font-size: 12px;
            padding: 5px;
            background-color: #ff7676;
            border-radius: 5px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4" style="max-width: 400px;">
            <h2 class="text-center mb-4">Registration Form</h2>
            <!-- Display messages here -->
            <?php include "MessageHandler.php"; ?>
            <form class="row g-3" method="POST" action="process.php" onsubmit="return validatePassword()">
                <div class="col-12">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="eg. Christina Lumiguid" autocomplete="off">
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="example@gmail.com"  aria-describedby="emailHelp" autocomplete="off">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" aria-describedby="passwordHelpBlock" autocomplete="off">
                    <div id="passwordAlert" class="alert alert-danger" role="alert">
                        Your password must be 8-20 characters long and must contain letters and symbols!
                    </div>
                </div>
                <div class="col-10 text-center">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validatePassword() {
            var password = document.getElementById("inputPassword").value;
            var passwordLength = password.length;
            var regex = /^(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
            if (!regex.test(password)) {
                document.getElementById("passwordAlert").style.display = "block";
                return false;
            } else {
                document.getElementById("passwordAlert").style.display = "none";
                return true;
            }
        }
        // for autocomplete something
    //     window.onload = function() {
    //     document.getElementById("inputUsername").value = "";
    //     document.getElementById("inputEmail").value = "";
    //     document.getElementById("inputPassword").value = "";
    // }
    </script>
</body>
</html>
