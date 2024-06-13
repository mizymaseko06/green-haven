<?php
include("../includes/db_connect.php");
include("../includes/menu_items.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Green Haven</title>
    <?php
    include("../includes/header.php");
    ?>
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
                    $i = 0;
                    foreach ($menu_items as $preview_item) {
                    ?>
                        <article class="card col-10 col-md-6 col-lg-3 m-3">
                            <div class="card-img-top">
                                <img src="../assets/images/lefteris-kallergis-_TLKIVSW6Do-unsplash.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-title"> <?php echo ($preview_item['item_name']) ?> </p>
                                <p class="card-text"><?php echo ($preview_item['price']) ?> </p>
                                <!-- <div class="qty-container">
                                    <span>-</span>
                                    <span>3</span>
                                    <span>+</span>
                                </div> -->
                                <a href="" class="btn btn-primary action-btn w-100">Add to cart</a>
                            </div>
                        </article>
                    <?php
                        $i += 1;
                        if ($i == 6) {
                            break;
                        }
                    }
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