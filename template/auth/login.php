<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="shortcut icon" href="http://localhost/blog/icon" type="image/x-icon" />

    <link rel="stylesheet" href="http://localhost/blog/public/css/admin/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

    <link href="http://localhost/blog/public/css/admin/style.css" rel="stylesheet" type="text/css">

</head>

<body>


    <section class="container-fluid bg-auth-form d-flex justify-content-center align-items-center ">
        <section class="row bg-gradiant-green-blue">

            <section class="col-12 bg-white p-5 rounded">
                <h2 class="h5 pb-3">Login Form</h2>
                <form method="post" class="" action="http://localhost/blog/check-login">
                    <?php
                    $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
                    if ($httpReferer == 'http://localhost/blog/login') { ?>
                        <div> <small class="form-text text-danger"> user is wrong</small> </div><?php
                                                                                            } ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email ...">
                        <!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div style="position: relative;">
                            <input id="inputPassword" type="password" class="form-control" id="password" name="password" placeholder="Enter password ...">
                            <div id="eye" style="position: absolute;top: 11px;right: 10px;width: 15px;height: 15px; font-size: 15px; cursor: pointer;" class="fas fa-eye-slash text-muted"></div>
                        </div>
                        <!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <button type="submit" class="btn btn-primary mx-0 my-0 btn-sm">OK</button>
                        <a href="http://localhost/blog/register" class="btn btn-sm mx-0 btn-success">REGISTER</a>
                        <a href="http://localhost/blog/home" class="btn btn-block btn-sm btn-warning">BACK</a>
                    </div>
                </form>

            </section>
        </section>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/blog/public/js/admin/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="http://localhost/blog/public/js/admin/mdb.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#eye").click(function() {
                if ($("#inputPassword").attr("type") === "password"){
                    $("#inputPassword").attr("type" , "text");
                    $("#eye").removeClass("fa-eye-slash");
                    $("#eye").addClass("fa-eye");
                }else{
                    $("#inputPassword").attr("type" , "password");
                    $("#eye").removeClass("fa-eye");
                    $("#eye").addClass("fa-eye-slash");
                }
            })
        });




        <?php if ($httpReferer == 'http://localhost/blog/login') { ?>
            swal({
                title: "Login Error!",
                text: "user information is worng",
                icon: "error",
                button: "OK",
                dangerMode: true,
            });
        <?php } ?>
    </script>
</body>

</html>