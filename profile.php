<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

        <section style="background-color: #eee;">
                <div class="container py-5">
                        <div class="row">
                                <div class="col">
                                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                                <ol class="breadcrumb mb-0">
                                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                                                        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                                                </ol>
                                        </nav>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-lg-4">
                                        <div class="card mb-4">
                                                <div class="card-body text-center">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                                        <h5 class="my-3">John Smith</h5>
                                                        <p class="text-muted mb-1">Full Stack Developer</p>
                                                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                                        <div class="d-flex justify-content-center mb-2">
                                                                <button id="out" type="button" class="btn btn-outline-warning ms-1">Log out</button>

                                                                <button type="button" class="btn btn-outline-primary ms-1">Edit</button>
                                                        </div>
                                                </div>
                                        </div>

                                </div>
                                <div class="col-lg-8">
                                        <div class="card mb-4">
                                                <div class="card-body">
                                                        <div class="row">
                                                                <div class="col-sm-3">
                                                                        <p class="mb-0">Full Name</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                                                </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                                <div class="col-sm-3">
                                                                        <p class="mb-0">Email</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">example@example.com</p>
                                                                </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                                <div class="col-sm-3">
                                                                        <p class="mb-0">Phone</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                                                </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                                <div class="col-sm-3">
                                                                        <p class="mb-0">Mobile</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                                                </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                                <div class="col-sm-3">
                                                                        <p class="mb-0">Address</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-8">
                                                        <div class="card mb-4 mb-md-0">
                                                                <div class="card-body">
                                                                        <p class="mb-4"><span class="text-primary font-italic me-1"></span> Statistics
                                                                        </p>
                                                                        <div class="mx-4">
                                                                                <div class="row mt-2 h5 d-flex justify-content-between">
                                                                                        <p class="mb-1 col-md-4 " style="font-size: .77rem;">Orders</p>
                                                                                        <div class="col-md-4" style="height: 5px;">
                                                                                                46
                                                                                        </div>
                                                                                </div>
                                                                                <div class="row mt-2 h5 d-flex justify-content-between">
                                                                                        <p class="mb-1 col-md-4" style="font-size: .77rem;">Pending</p>
                                                                                        <div class="col-md-4 " style="height: 5px;">
                                                                                                46
                                                                                        </div>
                                                                                </div>
                                                                                <div class="row mt-2 h5 d-flex justify-content-between">
                                                                                        <p class="mb-1 col-md-4" style="font-size: .77rem;">Recieved</p>
                                                                                        <div class="col-md-4" style="height: 5px;">
                                                                                                46
                                                                                        </div>
                                                                                </div>
                                                                                <div class="row mt-2 h5 d-flex justify-content-between">
                                                                                        <p class="mb-1 col-md-4" style="font-size: .77rem;">Purchase</p>
                                                                                        <div class="col-md-4" style="height: 5px;">
                                                                                                46
                                                                                        </div>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                </div>
        </section>
        <script>
                document.getElementById('out').onclick = function() {
                        localStorage.log = 'out';
                        window.location.href = "index.php"
                }
        </script>
</body>

</html>