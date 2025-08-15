<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codelis - About</title>

    <?php
    include("../links.php");
    ?>
</head>

<body>
    <?php include '../header.php' ?>
    <div class="container">

        <div class="row row-pop bg-light p-3">
            <?php

            $type = $_GET['type'] ?? 'graduate'; // Default to graduate if no parameter
            
            if ($type === 'graduate') {
                include 'register_graduate.php';
            } elseif ($type === 'employer') {
                include 'register_employer.php';
            } elseif ($type === 'support') {
                include 'register_ticket.php';
            } else {
                echo "<p>Invalid type selected.</p>";
            }
            ?>

        </div>

        <?php
        include("../footer.php");
        ?>

    </div>
</body>

</html>