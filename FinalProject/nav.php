    <!--Navbar starts here-->


    <nav class="navbar navbar-dark bg-dark navbar-expand-lg py-0 sticky-top" id="mainNav">
        <a class="navbar-brand px-5" href="index.php">
            <img src="img/WestCoastLogo.png" class="" width="150" height="70" alt="West Coast Logo">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="toggle navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-end" id="navLinks">
            <ul class="navbar-nav  justify-content-end ">

                <li class="nav-item px-2">
                    <a href="index.php" class="nav-link">SERVICES</a>
                </li>
                <li class="nav-item px-2">
                    <a href="store_wine.php" class="nav-link">STORE</a>
                </li>
                <li class="nav-item px-2">
                    <a href="quote.php" class="nav-link">QUOTE</a>
                </li>
                <li class="nav-item px-2">
                    <a href="contact.php" class="nav-link">CONTACT</a>
                </li>

                <li class="nav-item">
                    <a href="register.php" class="nav-link link-small pt-3">Sign Up </a>
                </li>
                <li class="nav-item ">
                    <a href="login.php" class="nav-link link-small pt-3">Log In</a>

                </li>
                <li class="nav-item ">
                    <a href="cart.php" class="nav-link link-small pt-3">Your Cart</a>
                </li>
                <li class="nav-item d-md-block ">
                    <p id="login-text" class="pt-3">

                        <?php if (!empty($user)) : ?>
                            Welcome : <?= $user['email']; ?>
                            <a href="logout.php" class="px-2">Logout?</a>

                        <?php elseif (isset($_SESSION['staffname'])) : ?>
                            Welcome : <?= $_SESSION['staffname']; ?>
                            <a href="logout.php" class="px-2">Logout?</a>

                        <?php else : ?>
                            <a href="staff-login.php" class="px-2">Staff Login</a>

                        <?php endif; ?>

                    </p>
                </li>

                <li>

                </li>
            </ul>
        </div>
    </nav>