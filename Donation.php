<?php
// Start the session to store user data (if needed for this page)
session_start();

// Simulate loading donation options from a JSON file or external source
$jsonDonations = '[
    {"amount": "10", "description": "Helps plant a tree."},
    {"amount": "25", "description": "Helps clean a river."},
    {"amount": "50", "description": "Supports wildlife conservation projects."},
    {"amount": "100", "description": "Funds renewable energy research."}
]';

// Decode JSON to PHP array
$donationOptions = json_decode($jsonDonations, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuest - Donation Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> <!-- Link to jQuery -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header .logo img {
            width: 100px; /* Adjust based on your logo size */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .donation-option {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin: 10px;
            display: inline-block;
        }

        .donation-option button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .image-box {
            margin: 20px auto;
            width: 200px; /* Adjust based on the size of your image */
            height: 200px; /* Adjust based on the size of your image */
            border: 1px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer {
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="eco logo.png" alt="EcoQuest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="newpage.php">More Information</a></li>
                <li><a href="donation.php">Donate</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <h1>Support Our Cause</h1>
        <p>Choose a donation amount that best fits your ability to help us make a difference:</p>
        <?php foreach ($donationOptions as $option): ?>
            <div class="donation-option">
                <h3>$<?= $option['amount'] ?></h3>
                <p><?= $option['description'] ?></p>
                <button>Donate $<?= $option['amount'] ?></button>
            </div>
        <?php endforeach; ?>

        <!-- Image display section -->
        <<div class="image-box">
    <img src="images/Eco Flower.png" alt="Eco Flower" style="max-width:100%; max-height:100%;">
</div>

    <footer>
        <div class="footer-logo">EcoQuest</div>
        <address>123 Main Street, City<br>State Province, Country</address>
    </footer>
</body>
</html>
