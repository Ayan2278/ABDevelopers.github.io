<?php
if(isset($_POST['email'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "ab_developers";

    $con = mysqli_connect($server,$username,$password,$dbName);
    if(!$con)
    {
        die("Connection to this database failed due to ");
    }

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `contact_info` (`email`, `phone_number`, `message`, `time`) VALUES ('$email', '$phone', '$message', current_timestamp());";
    if($con->query($sql) == true)
    {
        //echo "Successfully inserted..!";
    }
    else
    {
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark disp bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">AB Developers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">

                    <button type="button" class="btn btn-danger mx-5" data-bs-toggle="modal"
                        data-bs-target="#LoginModal">LogIn</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#signupModal">SignUp</button>
                    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="LoginModalLabel">Login here</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="index.html">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                            <label class="form-check-label" for="exampleCheck1">Accept Terms And
                                                Conditions</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signupModalLabel">Sign-up Here</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="index.html">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Accept terms and condition</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>
    </nav>

    <h2 class="mx-3 my-3">Successfully Sent...!</h2>
    
    <form action="contact.php" method="post">
        <div class="container" style="margin-top: 40px;">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter your email address">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone number</label>
                <input type="text" maxlength="13" name="phone" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
    <div class="containe">
        <h5 style="margin: 100px; margin-bottom:50px">Email on : ayanchhipa2278@gmail.com <br><br>Follow me on insta, fb and twitter</h5>

    </div>



    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>

            <div class="containe" style="margin-top: 10px;">
                <a href="https://www.facebook.com/ayan.banglawala.1">
                    <div class="flex"><img src="fb.svg" alt=""></div>
                </a>
                <a href="https://www.instagram.com/its_ab_26">
                    <div class="flex"><img src="insta.svg" alt=""></div>
                </a>
                <a href="https://twitter.com/Ayan_B_26">
                    <div class="flex"><img src="twit.svg" alt=""></div>
                </a>
                <a href="https://www.linkedin.com/in/ayan-banglawala-542056253/">
                    <div class="flex"><img src="linkedin.svg" width="28px" alt=""></div>
                </a>
                <a href="https://github.com/Ayan2278">
                    <div class="flex"><img src="github.svg" width="30px" alt=""></div>
                </a>
            </div>
        </ul>

        <p class="text-center text-muted">&copy; 2022 AB Developers, Inc</p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>

</html>
