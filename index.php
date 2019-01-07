<?php
define('APP_START', microtime(true));

require __DIR__.'/vendor/autoload.php';

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Dharma Miner | Developing a Peaceful Mind</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script>
        document.createElement("article");
        document.createElement("aside");
        document.createElement("footer");
        document.createElement("header");
        document.createElement("nav");
        document.createElement("section");
        document.createElement("time");
    </script>
    <![endif]-->
    <noscript>
        <p><strong>This web page requires JavaScript to be enabled.</strong></p>
        <p>JavaScript is an object-oriented computer programming language
            commonly used to create interactive effects within web browsers.</p>
        <p><a href="https://goo.gl/koeeaJ">How to enable JavaScript?</a></p>
    </noscript>
</head>
<body>
<header>
    <div class="topbar">
        <h1>Dharma Miner</h1>
        <h2>DharmaMiner is dedicated to developping a peaceful mind.</h2>
    </div>
    <picture>
        <source media="(max-width: 480px)" srcset="../images/meditation-hut-2-480w.jpg">
        <source media="(max-width: 1440px)" srcset="../images/meditation-hut-2.jpg">
        <source media="(min-width: 1441px)" srcset="../images/meditation-hut-2@2x.jpg">
        <img src="../images/meditation-hut-2@2x.jpg" alt="" role="presentation" style="width: 100%; height: auto;">
    </picture>
</header>

<main>
    <header>
        <h3>All Articles</h3>
        <p>Most recent first</p>
    </header>
    <article>
        <header>
            <h1>Article Title</h1>
        </header>
        <section>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti laborum maxime qui voluptatum. At ea molestias porro repellendus veritatis. Ad alias consequatur laborum libero nostrum quaerat quos reprehenderit rerum tenetur!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti laborum maxime qui voluptatum. At ea molestias porro repellendus veritatis. Ad alias consequatur laborum libero nostrum quaerat quos reprehenderit rerum tenetur!</p>
        </section>
        <footer>Written on Nov 30th 2018</footer>
    </article>
</main>


<footer>
    <div class="copyright">©2018 Dharma Miner. All rights reserved.</div>
    <nav class="footer">
        <ul>
            <li>Home</li>
            <li>Privacy</li>
        </ul>
    </nav>
</footer>

</body>
</html>