<!doctype html>
<html lang="en">
<head>
<?php
if(!isset($db)){
    $db= new \DataBase\DataBase();
} 
$setting= $db->select("SELECT * FROM `websetting`;")->fetch();
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $setting['title'] ?></title>
    <link rel="shortcut icon" href="http://localhost/blog/<?php echo $setting['icon'] ?>" type="image/x-icon" />

    <link rel="stylesheet" href="http://localhost/blog/public/css/admin/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

    <link href="http://localhost/blog/public/css/admin/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">

    <a class="navbar-brand" href="http://localhost/blog/admin"> <?php echo $setting['title'] ?></a>
    <span class="">
        <?php
                $unseenComments = $db->select("SELECT COUNT(*) FROM `comments` WHERE `status` = 'unseen' ;")->fetch();
                $username = $db->select("SELECT * FROM `users` WHERE( `id` = '".$_SESSION['user']."') ;")->fetch();

        ?>
        
                <a class="text-decoration-none px-3 text-dark" href="http://localhost/blog/comment"><i class="fas fa-comments"></i> 
<?php if($unseenComments['COUNT(*)']) {?><span class="badge badge-danger"><?php echo $unseenComments['COUNT(*)'] ?> new!!!</span> <?php }?></a>
            <span class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <?php echo $username['username'] ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-center border-bottom border-primary" href="http://localhost/blog/admin">ADMIN</a>
                    <a class="dropdown-item text-center" href="http://localhost/blog/logout">LOGOUT</a>
                </div>
            </span>
       </span>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-lg-2 col-md-3 bg-dark px-0">
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/admin"><i class="fas fa-home"></i> Home</a>
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/category"><i class="fas fa-clipboard-list"></i> Category</a>
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/article"><i class="fas fa-newspaper"></i> Article</a>
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/comment"><i class="fas fa-comments"></i> Comment</a>
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/menu"><i class="fas fa-bars"></i> Menus</a>
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/user"><i class="fas fa-users"></i> User</a>
            <a class="text-decoration-none d-block text-warning py-1 px-2 mt-1" href="http://localhost/blog/web-setting"><i class="fas fa-tools"></i> Web Setting</a>
        </nav>
        

        <main role="main" class="col-lg-10 col-md-9 col-9 px-4">