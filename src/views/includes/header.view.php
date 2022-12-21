<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="icon/favicon.ico" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d74732e987.js" crossorigin="anonymous"></script>
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Mystery+Quest&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        h1 {
            font-family: 'Mystery Quest', cursive;
        }
        nav {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <title>Running Up That Hill</title>
</head>
<body>
<header>
    <h1 class="text-5xl flex pt-12 pb-6 justify-center text-center">RUNNING UP</br>THAT HILL</h1>
    <nav class="pb-3">
        <ul class="text-sm flex flex-row justify-center">
            <li class="mx-2"><a href="/"><i class="fa-solid fa-house"></i><span class="hidden">Home</span></a></li>
            <?php if (empty($_SESSION['User'])): ?>
                <li class="mx-2"><a href="/login"><i class="fa-solid fa-user-check"></i><span class="hidden">Login</span></a></li>
                <li class="mx-2"><a href="/registration"><i class="fa-solid fa-user-plus"></i><span class="hidden">Register</span></a></li>
            <?php else: ?>
                <li class="mx-2"><a href="/logout"><i class="fa-solid fa-power-off"></i><span class="hidden">Logout</span></a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <?php if (!empty($_SESSION['User'])): ?>
        <span>Hello <?= $_SESSION['User']['nickname'] ?></span>
    <?php endif; ?>
</header>


