<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $setting['title'] ?></title>


    <link href="http://localhost/blog/public/css/app/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <section class="app">
        <header>
            <nav class="header">
                <img class="header-logo" style="width: 120px; height:40px" src="http://localhost/blog/<?php echo $setting['logo'] ?>" alt="">
                <button class="header-menu-burger" onclick="showMenu()" type="button"><i class="fas fa-bars"></i></button>
                <ul class="header-menu" id="menu">
                    <?php foreach ($menus as $menu) { ?>
                        <li class="header-menu-item"><?php if ($menu['parent_id'] == null) { ?> <a class="header-menu-item-link" href="http://localhost/blog/<?php echo $menu['url']; ?>"><?php echo $menu['name'] ?></a><?php } ?>
                            <?php if ($menu['submenu_count'] > 0) { ?>
                                <span>
                                    <?php foreach ($submenus as $submenu) {
                                        if ($submenu['parent_id'] == $menu['id']) {
                                    ?>
                                            <a href="<?php echo $submenu['url'] ?>"><?php echo $submenu['name'] ?></a>
                                    <?php }
                                    } ?>
                                </span>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
                <section class="clear-fix"></section>
            </nav>
            <!--end of navbar-->
        </header>
        <!--end of header-->