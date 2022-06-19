<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php'; ?>
    <title></title>
</head>

<body>
  <?php include 'menu.php'; ?>
  <header class="header" style="color:black;">

        <div class="container">
            <div class="header__text">
                <div class="header__text__logo">
                    <img src="./proimages/purple-logo.png" alt="Logo">
                    <div class="header__text__logo__line"></div>
                </div>
                <h1 class="header__text__title">Always Fresh,<br>Always Delicious.</h1>
            </div>
            <div class="header__img">
                <img src="./proimages/hero.svg" alt="Hero Illustration">
            </div>
        </div>
        <div class="header__arrow">
            <a href="#carousel" class="header__arrow__link">
                <img src="./proimages/down-arrow.svg" alt="Down Arrow">
            </a>
        </div>
    </header>
    <div class="swiper carousel" id="carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img class="swiper-img" src="./proimages/cake5.jpg"></div>
            <div class="swiper-slide"><img class="swiper-img" src="./proimages/cake6.jpg"></div>
            <div class="swiper-slide"><img class="swiper-img" src="./proimages/cookie4.jpg"></div>
            <div class="swiper-slide"><img class="swiper-img" src="./proimages/cookie5.jpg"></div>
            <div class="swiper-slide"><img class="swiper-img" src="./proimages/bread2.jpg"></div>
            <div class="swiper-slide"><img class="swiper-img" src="./proimages/pastry1.jpg"></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <script src="./js/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            grabCursor: true,
            effect: "creative",
            loop: true,
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-120%", 0, -500],
                },
                next: {
                    shadow: true,
                    translate: ["120%", 0, -500],
                },
            },
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            }
        });
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>