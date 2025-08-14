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
                <a href="#register_index" class="btn btn-primary w-25">Join Now</a>
            </div>

            <div class="row row-pop bg-light p-3">

                <div class="col-12">
                    <h1 class="text-primary text-center my-3">What we do for you</h1>
                    <hr style="text-primary">
                </div>

                <div class="col-md-6">
                    <h2 class="text-secondary text-center mb-3">For Employers</h2>
                    <p>We take the search for candidates off your hands, carefully reviewing:</p>
                    <ul>
                        <li><strong>CVs</strong> – Screening for the right skills, qualifications, and career potential.
                        </li>
                        <li><strong>Portfolios</strong> – Assessing real-world work to ensure candidates can deliver
                            from day one.</li>
                        <li><strong>Education</strong> – Matching academic backgrounds to your specific role
                            requirements.</li>
                        <li><strong>Previous Experience</strong> – Evaluating professional history to find the right fit
                            for your team and culture.</li>
                    </ul>
                    <p>
                        By outsourcing your recruitment process to us, your company can save valuable time and focus on
                        growth while we
                        handle everything from sourcing to shortlisting. Our fees are flexible and designed to suit your
                        hiring needs, ensuring you only pay for results.
                    </p>
                    <p><strong>Our standard pricing structure is as follows:</strong></p>
                    <ul>
                        <li>Annual salary under £30,000 – <strong>20%</strong> of annual income</li>
                        <li>£30,000 – £50,000 – <strong>15%</strong></li>
                        <li>£50,000 – £75,000 – <strong>10%</strong></li>
                        <li>£75,000+ – <strong>5%</strong></li>
                    </ul>
                    <p>
                        <em>Rates are negotiable for long-term clients. There is never any cost to candidates.</em>
                    </p>

                </div>

                <div class="col-md-6">
                    <h2 class="text-secondary text-center mb-3">For Candidates</h2>
                    <p>We help you find the right job for you by:</p>
                    <ul>
                        <li>
                            <strong>Matching your skills to the right employers</strong> – We partner with innovative
                            startups and growing
                            companies to ensure you’re introduced to opportunities where you can make an immediate
                            impact.
                        </li>
                        <li>
                            <strong>Providing interview preparation</strong> – From technical challenges to cultural fit
                            questions, we’ll
                            make sure you walk into every interview confident, prepared, and ready to impress.
                        </li>
                        <li>
                            <strong>Offering career advice</strong> – Whether it’s refining your CV, identifying your
                            strengths, or mapping
                            your career path, we’re here to guide you at every stage.
                        </li>
                    </ul>
                    <p>
                        Our service is <strong>completely free for candidates</strong> — because your focus should be on
                        your future, not on fees.
                        Simply add your details into our system once, and we’ll take it from there. When a perfect match
                        comes up, we’ll reach out,
                        represent you to employers, and support you through every step of the hiring process. With
                        Codelis, you don’t just apply for jobs —
                        you step into opportunities designed to help you grow.
                    </p>
                    <p><em>Register now to get started!</em></p>

                </div>
            </div>

            <div class="row row-pop bg-light p-3" id="register_index">
                <?php
                include('forms/register.php');
                ?>
            </div>
        </div>

        <?php
        include("footer.php");
        ?>

        </div>

    </body>

    </html>