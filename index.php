<!DOCTYPE html>
<html>

<head>
  <?php include 'head.php'; ?>
  <title></title>
</head>

<body>
  <?php include 'menu.php'; ?>
  <!-- Carousel wrapper -->
  <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="proimages/cake1.jpg" class="d-block w-100" alt="Sunset Over the City" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Strawberry Cake</h5>
          <p>Made with fresh strawberry.</p>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <img src="proimages/cake2.jpg" class="d-block w-100" alt="Canyon at Nigh" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Foamed Cake</h5>
          <p>Made with milk foam.</p>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <img src="proimages/cake3.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Chocolate Cake</h5>
          <p>Made with chocolates and chocolate syrup.</p>
        </div>
      </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->
  <?php include 'footer.php'; ?>
</body>

</html>