<?php
include("../includes/db_connect.php");
include("../includes/menu_items.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu - Green Haven</title>
    <?php
    include("../includes/header.php");
    ?>
    <main>
        <section id="menu">
            <div class="container">
                <h4 class="text-center" style="z-index: 1;">MENU</h4>
                <p class="display-6 text-center">What the chef has prepared for today</p>
                <div>
                    <ul class="nav nav-tabs bg-light" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="starters-tab" data-bs-toggle="tab" data-bs-target="#starters" type="button" role="tab" aria-controls="starters">Starters</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="main-tab" data-bs-toggle="tab" data-bs-target="#main" type="button" role="tab" aria-controls="main">Main</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sides-tab" data-bs-toggle="tab" data-bs-target="#sides" type="button" role="tab" aria-controls="sides">Sides</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="desserts-tab" data-bs-toggle="tab" data-bs-target="#desserts" type="button" role="tab" aria-controls="desserts">Desserts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="beverages-tab" data-bs-toggle="tab" data-bs-target="#beverages" type="button" role="tab" aria-controls="beverages">Beverages</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">...</div>
                        <div class="tab-pane fade" id="starters" role="tabpanel" aria-labelledby="starters-tab">...</div>
                        <div class="tab-pane fade" id="main" role="tabpanel" aria-labelledby="main-tab">...</div>
                        <div class="tab-pane fade" id="sides" role="tabpanel" aria-labelledby="sides-tab">...</div>
                        <div class="tab-pane fade" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">...</div>
                        <div class="tab-pane fade" id="beverages" role="tabpanel" aria-labelledby="beverages-tab">...</div>
                    </div>

                </div>
                <div class="row card-deck mt-5">
                    <?php
                    foreach ($menu_items as $menu_item) {
                    ?>
                        <article class="card col-8 col-md-4 col-lg-3">
                            <div class="card-img-top">
                                <img src="../assets/images/lefteris-kallergis-_TLKIVSW6Do-unsplash.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-title"> <?php echo $menu_item['item_name'] ?> </p>
                                <p class="card-text"><?php echo $menu_item['price'] ?></p>
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
            </div>
        </section>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
    </body>

</html>