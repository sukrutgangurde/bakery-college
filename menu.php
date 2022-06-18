<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bakery</a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <?php
        if ($_SESSION['custid'] == null) {
        ?>
          <a class="nav-link" href="register.php">Sign Up</a>
          <a class="nav-link" href="login.php">Sign In</a>
        <?php
        } else {

        ?>

          <a class="nav-link" href="welcome.php">Products</a>
          <a class="nav-link" href="viewcart.php">Cart</a>
          <a class="nav-link" href="feedback.php">Feedback</a>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php
        }
        ?>


      </div>
    </div>
  </div>
</nav>