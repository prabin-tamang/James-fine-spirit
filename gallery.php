<?php
    include("connection.php");
    
    
    
     $sql = "SELECT * FROM gallery";
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
        <meta name="keywords" content=""/>
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
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/gallery-header.inc.php'); ?>
        <main id="main" role="main">
            <section class="gallery">
                <div class="gallery__container grid">
                    <?php while($project = mysqli_fetch_assoc($result)) : ?>
                    <img src="<?= $project['photo']; ?>" alt="gallery">
                    <?php endwhile; ?>
                </div>
            </section>
            <section class="newsletter">
                <div class="newsletter__background grid width">
                    <h2>Get 10% off your first order when you subscribe.</h2>
                    <div class="newsletter__signUp">
                        <h3>Sign Up to get latest offers.</h3>
                        <p>Subscribe to our news letter to receive the latest Beer Store news and updates.</p>
                        <form>
                            <label for="email-field" aria-label="Email" class="visually-hidden">Enter Email: </label>
                            <input type="email" placeholder="Enter Email" accesskey="E"  name="email" required>
                            <button type="submit" class="signUpBtn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/JamesFineSpirit/includes/footer.inc.php'); ?>
        <script src="app/js/hamburger.js"></script>
        <script src="app/js/opening.js"></script>
    </body>
</html>