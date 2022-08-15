<?php
include 'data.php';
?>
<header>

        <nav class="fixed-top navbar navbar-expand-lg navbar-light">
                <div class="container">
                        <a class="navbar-brand" href="index.php">
                                <img src="assets/images/ecommerce-logo-png-11.png" height="40" alt="">

                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="list.php">Categories</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link " href="adminlog.php">Admin panel</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link " href="#">About</a>
                                        </li>
                                </ul>
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 action-menu">

                                        <li class="nav-item">
                                                <a class="nav-link" href="#">
                                                        <i class="bi bi-heart"></i>
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" id="cart">
                                                        <i class="bi bi-cart4 position-relative">
                                                                <span style="font-size: 12px" id="cart-icon" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $noOfDatav; ?>
                                                                </span>
                                                        </i>
                                                </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-person"></i>
                                                </a>
                                                <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                                                        <li><a id="log" class="dropdown-item" href="login.php">Login</a></li>
                                                        <li><a id="reg" class="dropdown-item" href="register.php">Register</a></li>

                                                        <li><a id="mp" class="dropdown-item" href="profile.php">My profile</a></li>
                                                </ul>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
</header>
<script>
        //localStorage.setItem("log", "on");
        if (localStorage.log == 'on') {

                document.getElementById('cart').onclick = function() {
                        window.location.href = "cart.php"
                }

                document.getElementById('reg').style.display = 'none';
                document.getElementById('log').innerText = "Log out";
                document.getElementById('mp').style.display = 'block';
                document.getElementById('cart-icon').style.display = 'block';
        } else {
                document.getElementById('reg').style.display = 'block';
                document.getElementById('log').innerText = "Log in";
                document.getElementById('mp').style.display = 'none';
                document.getElementById('cart-icon').style.display = 'none';
                document.getElementById('cart').onclick = function() {
                        window.location.href = "login.php"
                }

        }
</script>