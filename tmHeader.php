<header class="header">
    <div class="header__container container">
        <div class="header__logo">
            <a href="/task_manager/index.php"><i class="fas fa-tasks"></i> Task Manager</a>
        </div>
        <nav class="header__nav">
            <ul>
                <li>
                    <a href="/task_manager/index.php"><i class="fas fa-home"></i> Accueil</a>
                </li>
                <?php if(!isset($_SESSION["email"])): ?>
                <li>
                    <a href="/task_manager/tmViews/tmSignIn/tmSignIn.php">Se connecter</a>
                </li>
                <li>
                    <a href="/task_manager/tmViews/tmSignUp/tmSignUp.php">S'inscrire</a>
                </li>
                <?php else: ?>
                    <li>
                        <a href="/task_manager/tmViews/tmDashboard/tmDashboard.php"><i class="fas fa-user"></i> Mon compte</a>
                    </li>
                    <li>
                        <form action="/task_manager/tmSignOut/tmProcessSignOut.php" method="POST">
                            <button class="btn btn--accent" type="submit" name="signOut" aria-label="Bouton de déconnexion"><i class="fa-solid fa-right-from-bracket"></i></button>
                        </form>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>