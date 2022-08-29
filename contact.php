<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php include 'header.php';  ?>
    <section>
        <div class="vh-100 conatiner" style="background-image: url('assets/images/sgp.png'); color: white;">
            <div class="text-center">
                <h1 class="text-light">How Can We Help You?</h1>
                <h3 class="text-light section-title">Help us to ensure maximum customer satisfaction</h3>
            </div>
            <div class=" d-flex align-items-center justify-content-center">
                <div class="bg-transparent col-md-4">
                    <div class="p-4 rounded shadow-md">
                        <div>
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                        </div class="mt-3">
                        <div class="mt-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" cols="20" rows="6" class="form-control" placeholder="message"></textarea>
                        </div>
                        <button class="btn btn-success text-warning">
                            Submit Form
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="" id="email" class="form-control my-4 py-2" placeholder="Email" />
                    <input type="password" name="" id="pass" class="form-control my-4 py-2" placeholder="Password" />
                    <p id="warn" class="text-danger"></p>

                    <div class="text-center mt-3">
                        <input type="submit" name="submit" id="login" value="Sign in" class=" btn btn-warning"></input>
                        <a href="register.php" class="nav-link text-dark text-lg-center">Register account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Error-->
    <div style="" id="error"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        if (localStorage.log != 'on') {
            document.getElementById("user-panel").style.visibility = "hidden"
            document.getElementById("fav").style.visibility = "hidden"
            document.getElementById("cart").style.visibility = "hidden"
        }else{
            document.getElementById("user-panel").style.visibility = "visible"
            document.getElementById("fav").style.visibility = "visible"
            document.getElementById("cart").style.visibility = "visible"
        }

        $(document).ready(function() {
            $('#login').click(function(e) {
                $.ajax({
                    type: "POST",
                    url: "login_module.php",
                    data: {
                        email: $("#email").val(),
                        pass: $("#pass").val()
                    },
                    success: function(result, status, xhr) {
                        $("#error").html(result)



                    }
                });
            });
        })
    </script>
    
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>