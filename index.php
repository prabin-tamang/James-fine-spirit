<?php
    include("connection.php");
    
    
    
     $sql = "SELECT * FROM products limit 3" ;
     $result = $db->query($sql);
     ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- mobile size viewport to control page dimensons and scaling -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- meta tags -->
        <meta name="description" content="If you are looking for some of finest beers and spirits look no further. We bring people together with our crafted beers which contain fresh ingredients. Every day specials 10% off your first order! "/>
        <meta name="keywords" content="James Craft Beer Beers Spirits Cases Delivery Store"/>
        <meta name="robots" content="noindex,nofollow"/>
        <meta property="og:title" content="Our Finest Craft Beers and Spirits | James Fine Spirit">
        <meta property="og:site_name" content="James Fine Spirit">
        <meta property="og:url" content="http://prabintamang.uk/JamesFineSpirit/index.php">
        <meta property="og:description" content="If you are looking for some of finest beers and spirits look no further. We bring people together with our crafted beers which contain fresh ingredients. Every day specials 10% off your first order!">
        <meta property="og:type" content="website">
        <meta property="og:image" content="view-source:http://prabintamang.uk/JamesFineSpirit/images/jfs.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@JamesFineSpirit">
        <meta name="twitter:title" content="James Fine Spirit">
        <meta name="twitter:description" content="If you are looking for some of finest beers and spirits look no further. We bring people together with our crafted beers which contain fresh ingredients. Every day specials 10% off your first order!">
        <meta name="twitter:image" content="http://prabintamang.uk/JamesFineSpirit/images/jfs.png">
        <title>Home - James Fine Spirit</title>
        <!-- fonts and stylesheet -->
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/head.inc.php'); ?>
    </head>
    <body>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/index-header.inc.php'); ?>
            <!-- Main section-->
        <main class="main" role="main" id="main">
            <section class="products">
                <div class="products__background">
                    <h2><span>Browse our</span> New Cases</h2>
                    <div class="products__container grid width">
                        <?php while($project = mysqli_fetch_assoc($result)) : ?>
                        <div class="products__item">
                            <img src="images/product.svg" alt="River city Rasberry Ale">
                            <div class="products__overlay">
                                <a href="products.php">View Beer</a>
                            </div>
                            <div class="products__desc">
                                <h3><?= $project['product_name']; ?></h3>
                                <span><?= $project['product_info']; ?></span>
                                <strong><?= $project['product_price']; ?></strong>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <a href="products.php">View all</a>
                    </div>
                </div>
            </section>
            <section class="discover">
                <div class="discover__background grid width">
                    <div class="disover__intro">
                        <h2><span>Buy Craft Beers</span>Buy craft beer with confidence.</h2>
                        <p>We only stock the best beers from top brewers, with next day craft beer delivery options available for UK customers.</p>
                    </div>
                    <div class="discover__container grid">
                        <div class="discover__craftBeer grid">
                            <img src="images/bottles.svg" alt="illustration of beer bottles">
                            <div class="discover__info">
                                <h3>Discover Craft Beer</h3>
                                <p>We bring you the very best beer from hundreds of independent breweries around the world. Discover the finest beers delivered right to your doorstep.</p>
                            </div>
                        </div>
                        <div class="discover__payments grid">
                            <img src="images/payment.svg" alt="illustration of a credit card">
                            <div class="discover__info">
                                <h3>Secure Payments</h3>
                                <p>Shop at James Craft Beer with confidence. We always handle your payments securely and accept VISA, Mastercard, Maestro, American Express as well as Google and Apple Pay.</p>
                            </div>
                        </div>
                        <div class="discover__delivery grid">
                            <img src="images/barrel.svg" alt="illustration of beer barrels">
                            <div class="discover__info">
                                <h3>Safe Delivery</h3>
                                <p>All our beers are carefully packaged and sent in protective boxes to ensure your beer arrives safely.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="newsletter">
                <div class="newsletter__background grid width">
                    <h2>Get 10% off your first order when you subscribe.</h2>
                    <div class="newsletter__signUp">
                        <h3>Sign Up to get latest offers.</h3>
                        <p>Subscribe to our news letter to receive the latest Beer Store news and updates.</p>
                        <form role="form">
                            <label for="email-field" aria-label="Email" class="visually-hidden">Enter Email: </label>
                            <input type="email" placeholder="Enter Email"  accesskey="E" name="email" required>
                            <button type="submit" class="signUpBtn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/footer.inc.php'); ?>
        <script src="app/js/hamburger.js"></script>
        <script src="app/js/opening.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>