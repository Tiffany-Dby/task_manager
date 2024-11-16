<header>
    <div class="tmContainer">
        <div>
            <a href="/task_manager/index.php">Task Manager</a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/task_manager/index.php">Accueil</a>
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
                        <a href="/task_manager/tmViews/tmDashboard/tmDashboard.php">Mon compte</a>
                    </li>
                <li>
                    <form action="/task_manager/tmSignOut/tmProcessSignOut.php" method="POST">
                        <button type="submit" name="signOut">Déconnexion</button>
                    </form>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>