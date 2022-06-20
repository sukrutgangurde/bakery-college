<nav class="nav">
        <div class="container">
            <div class="nav__logo">
                <a href="index.php" class="nav__logo__link">
                    <img src="./proimages/logo.png" alt="Logo">
                </a>
            </div>
            <?php
        if ($_SESSION['custid'] == null) {
        ?>
          <ul class="nav__links-list-not-logged-in nav-ul">
                <li class="nav__links-list-not-logged-in__item">
                    <a href="login.php" class="nav__links-list-not-logged-in__item__link nav__links-list-not-logged-in__item__link--sec">Sign In</a>
                </li>
                <li class="nav__links-list-not-logged-in__item">
                    <a href="register.php" class="nav__links-list-not-logged-in__item__link nav__links-list-not-logged-in__item__link--main">Sign Up</a>
                </li>
            </ul>
        <?php
        } else {

        ?>
          <ul class="nav__links-list-logged-in nav-ul">
                <li class="nav__links-list-logged-in__item">
                    <a href="welcome.php" class="nav__links-list-logged-in__item__link">Products</a>
                </li>
                <li class="nav__links-list-logged-in__item">
                    <a href="viewcart.php" class="nav__links-list-logged-in__item__link">Cart</a>
                </li>
                <li class="nav__links-list-logged-in__item">
                    <a href="feedback.php" class="nav__links-list-logged-in__item__link">Feedback</a>
                </li>
            </ul>
            <div class="nav__logout">
                <a href="logout.php" class="nav__logout__link">Logout</a>
            </div>
        <?php
        }
        ?>
        </div>
    </nav>