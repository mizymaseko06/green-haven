<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Green Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md container">
            <a href="" class="navbar-brand"><img src="../assets/images/green-haven-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavigationMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="NavigationMenu">
                <ul class="navbar-nav me-5 pe-5">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
                </ul>
                <div>
                    <i class="bi bi-cart me-5">E2.00</i>
                    <i class="bi bi-box-arrow-right"></i>
                </div>

            </div>

        </nav>
    </header>
    <main>
        <img id="hero-bg" src="../assets/images/hero-background.png" alt="">
        <section id="hero">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-6">
                        <h1 class="display-4 fw-bold">Welcome to <span style="color: var(--light-green)">Green Haven</span></h1>
                        <p class="lead">Indulge in fresh, flavourful vegetarian cuisine crafted from the finest locally sourced ingredients</p>
                        <a href="" class="btn btn-primary action-btn">View menu</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="menu-preview">
            <div class="container border-3">
                <h4 class="text-center" style="z-index: 1;">MENU</h4>
                <p class="display-6 text-center">Our picks for today</p>
                <div class="row card-deck justify-content-center">
                    <?php
                    for ($i = 0; $i < 6; $i++) {
                    ?>
                        <article class="card col-10 col-md-6 col-lg-3 m-3">
                            <div class="card-img-top">
                                <img src="../assets/images/lefteris-kallergis-_TLKIVSW6Do-unsplash.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-title">Veggie Burger</p>
                                <p class="card-text">E129.99</p>
                                <div class="qty-container">
                                    <span>-</span>
                                    <span>3</span>
                                    <span>+</span>
                                </div>
                                <a href="" class="btn btn-primary action-btn w-100">Add to cart</a>
                            </div>
                        </article>
                    <?php }
                    ?>
                </div>
            </div>
        </section>

        <section id="reviews">
            <div class="container">
                <h4 class="text-center mt-5">REVIEWS</h4>
                <p class="display-6 text-center">What others have to say</p>
                <div class="row card-deck">
                    <?php
                    for ($i = 0; $i < 3; $i++) { ?>
                        <article class="card col-10 col-md-6 col-lg-3 m-5">
                            <div class="card-body">
                                <p class="card-text">
                                    “The food is amazing, I wish I had discovered it earlier. I love that there is a wide variety of meals. Also, their site is well-run and designed!”
                                </p>
                            </div>
                            <div class="card-footer bg-light">
                                <p class="">Mayenziwe Maseko</p>
                            </div>
                        </article>
                    <?php
                    } ?>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>