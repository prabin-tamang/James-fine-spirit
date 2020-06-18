<?php
    include("connection.php");
    
    
    
     $sql = "SELECT * FROM products";
     $result = $db->query($sql);
     ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - James Fine Spirit</title>
         <!-- meta tags -->
        <meta name="description" content="If you are looking for some of finest beers and spirits look no further. We bring people together with our crafted beers which contain fresh ingredients. Every day specials 10% off your first order!"/>
        <meta name="keywords" content="James Craft Beer Beers Spirits Cases Delivery Store Brewery Breweries"/>
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
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/head.inc.php'); ?>
    </head>
    <body>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/products-header.inc.php'); ?>
        <div class="delivery">
            <span class="flex flex-jc-c flex-ai-c">Open For Take-Away. Shop Online For Home Delivery</span>
        </div>
        <div class="twoCol">
            <div class="twoCol__background width">
                <aside>
                    <h2><span>25 products</span>Beers</h2>
                    <div class="twoCol__filter">
                        <h2>Filter</h2>
                        <div class="twoCol__container">
                            <ul class="twoCol__listing">
                                <li>All</li>
                                <li>Spirits</li>
                                <li>IPA</li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <main id="main" role="main">
                    <section class="productList">
                        <h2>By Brewery.</h2>
                        <p>At Flavourly we work with a great bunch of craft breweries including Prime Time Craft Ales, One Hop Stop, and Intrepid Journey With some help from them and many other great craft Brewers, we're confident you'll find something new to love.</p>
                        <h3>Showing items 1-50</h3>
                        <div class="productList__container grid">
                            <?php while($project = mysqli_fetch_assoc($result)) : ?>
                            <div class="productList__item All <?= $project['product_type']; ?> ">
                                <img src="images/product.svg" alt="River city Rasberry Ale">
                                <div class="productList__overlay">
                                    <a href="#">View Beer</a>
                                </div>
                                <div class="productList__desc">
                                    <h3><?= $project['product_name']; ?></h3>
                                    <span><?= $project['product_info']; ?></span>
                                    <strong><?= $project['product_price']; ?></strong>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </section>
                </main>
                <section class="newsletter">
                    <div class="newsletter__background grid width">
                        <h2>Get 10% off your first order when you subscribe.</h2>
                        <div class="newsletter__signUp">
                            <h3>Sign Up to get latest offers.</h3>
                            <p>Subscribe to our news letter to receive the latest Beer Store news and updates.</p>
                            <form>
                                <label for="email-field" aria-label="Email" class="visually-hidden">Enter Email: </label>
                                <input type="email" placeholder="Enter Email"  accesskey="E" name="email" required>
                                <button type="submit" class="signUpBtn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/footer.inc.php'); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="app/js/main.js"></script>
        <script src="app/js/hamburger.js"></script>
        <script src="app/js/opening.js"></script>
    </body>
</html>