<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Mystery+Quest&display=swap');
        h1 {
            font-family: 'Mystery Quest', cursive;
        }
    </style>
    <title>Hiking Project</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <?php if (empty($_SESSION['user'])): ?>
                <li><a href="/login">Login</a></li>
                <li><a href="/registration">Register</a></li>
            <?php else: ?>
                <li><a href="/logout">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <h1 class="text-5xl flex py-12 justify-center text-center">RUNNING UP</br>THAT HILL</h1>
    <?php if (!empty($_SESSION['user'])): ?>
        <span>Hello <?= $_SESSION['user']['username'] ?></span>
    <?php endif; ?>
</header>


