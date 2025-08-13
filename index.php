<DOCTYPE !html>
    <html lang="en" data-bs-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Codelis - Home</title>

        <?php
        include("links.php");
        ?>
    </head>

    <body>
        <?php include 'header.php' ?>
        <div class="container">

            <div class="row row-pop text-white" id="hero_row">
                <h1>Welcome to Codelis</h1>
                <p>Your first choice for long term employment after university</p>
                <a href="" class="btn btn-primary w-25">Join Now</a>
            </div>

            <div class="row row-pop bg-light p-3">

                <div class="col-12">
                    <h1 class="text-primary">What we do for you</h1>
                </div>


                <div class="col-md-6">
                    <h2 class="text-secondary">For Employers</h2>
                    <p>We take on the search for candidates on your behalf looking through:</p>
                    <ul>
                        <li>CVs</li>
                        <li>Portfolios</li>
                        <li>Education</li>
                        <li>Previous Experience</li>
                    </ul>
                    <p>
                        This allows your company to free up valuable time by outsourcing any recruitment to us.
                        Our fees are variable depending on what works best for you.
                        <br /><br />
                        <strong>Our pricing structure is as follows:</strong>
                    </p>
                    <ul>
                        <li>Annual salary offered is less than £30,000 – 20% of annual income</li>
                        <li>£30,000 - £50,000 – 15%</li>
                        <li>£50,000 - £75,000 – 10%</li>
                        <li>£75,000+ – 5%</li>
                    </ul>
                    <p><em>Rates negotiable for long-term clients. No cost to candidates.</em></p>
                </div>

                <div class="col-md-6">
                    <h2 class="text-secondary">For Candidates</h2>
                    <p>We help you find the right job for you by:</p>
                    <ul>
                        <li>Matching your skills to the right employers</li>
                        <li>Providing interview preparation</li>
                        <li>Offering career advice</li>
                    </ul>
                    <p>
                        Our service is free for candidates, and we work with a wide range of employers to find the best
                        fit for your skills and career goals.
                        Add your information into our system once, and we’ll handle the rest. We’ll get in touch when a
                        match arises, represent you, and guide you through the hiring process.
                    </p>
                </div>
            </div>

            <?php
            include("footer.php");
            ?>

        </div>
    </body>

    </html>