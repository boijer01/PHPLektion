<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Back-end template</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>


            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Profilsida</h2>
                <?php include "uppg6.php" ?>
            </article>
            <div class="separator"></div>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>