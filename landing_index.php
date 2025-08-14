<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codelis - Welcome!</title>

    <?php
    include("links.php");
    ?>

    <style>
        body {
            background-image: url("pics/homepage-img.jpg");
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            /* Ensures it’s at least the full viewport height */
            box-shadow: 0 0 200px rgba(0, 0, 0, 0.9) inset;
            margin: 0;
            /* remove default body margin */
        }


        .hero-row {
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .carousel-item {
            background-color: rgba(30, 175, 178, 0.5);
            border-radius: 15px;
            padding: auto;
        }
    </style>

</head>

<body>


    <div class="container">
        <div class="row-md-12">

            <div id="landing-carousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#landing-carousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#landing-carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#landing-carousel" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1>Who we are</h1>
                        <p>Codelis connects talented software engineering graduates with innovative startups and growing
                            companies, creating opportunities for impact from day one.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>Who we are</h1>
                        <p>Codelis connects talented software engineering graduates with innovative startups and growing
                            companies, creating opportunities for impact from day one.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>Who we are</h1>
                        <p>Codelis connects talented software engineering graduates with innovative startups and growing
                            companies, creating opportunities for impact from day one.</p>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#landing-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#landing-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>


        </div>
    </div>
    </div>
</body>

</html>