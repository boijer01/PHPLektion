
 <header>
            <!-- Logo och meny i headern -->
            <img src="./media/logo.svg" alt="Website logo" />
            <div id="logo">DenApp</div>

            <nav>
                <!-- Huvudmenyn -->
                <ul>
                    <li><a href="../projekt1/index.php">Home</a></li>
                    <li><a href="../projekt1/">Projekt 1</a></li>
                    <li><a href="../projekt2/">Projekt 2</a></li>
                    <li><a href="../rapport/">Rapport</a></li>
                    <li><a href="../projekt1/profile.php">Profile</a></li>
                    <?php
                    if (isset($_SESSION['username'])) {
                      
                    }

                    ?>

                </ul>

            </nav>
        </header>
