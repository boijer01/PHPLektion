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
                <h2>Uppgift 8</h2>
                <?php include "uppg8.php" ?>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Uppgift 1 - Superglobals</h2>
                <?php include "uppg1.php" ?>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Uppgift 2 - Datum och tid</h2>
                <?php include "uppg2.php" ?>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Uppgift 3 - Formulär</h2>
                <form action="index.php" method="get">
                    Dag: <input type="text" name="day"><br>
                    Månad: <input type="text" name="month"><br>
                    <input type="submit">
                </form>
                <?php include "uppg3.php" ?>
            </article>

            <article>
                <h2>Uppgift 4 - Registrera</h2>
                <form action="index.php" method="get">
                    Name: <input type="text" name="name"><br>
                    E-mail: <input type="text" name="email"><br>
                    <input type="submit">
                </form>
                <?php include "uppg4.php" ?>
            </article>


        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>