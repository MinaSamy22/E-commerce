<?php
session_start();
require_once("partials/general.php");
require_once("partials/navv.php");

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$products = [
    ["name" => "Wireless Mouse", "price" => 20, "img" => "https://placehold.co/200x150?text=Mouse"],
    ["name" => "Mechanical Keyboard", "price" => 45, "img" => "https://placehold.co/200x150?text=Keyboard"],
    ["name" => "USB-C Hub", "price" => 30, "img" => "https://placehold.co/200x150?text=USB-C+Hub"],
    ["name" => "Laptop Stand", "price" => 25, "img" => "https://placehold.co/200x150?text=Laptop+Stand"],
    ["name" => "Webcam 1080p", "price" => 40, "img" => "https://placehold.co/200x150?text=Webcam"],
    ["name" => "Gaming Headset", "price" => 60, "img" => "https://placehold.co/200x150?text=Headset"],
    ["name" => "Smartphone Tripod", "price" => 15, "img" => "https://placehold.co/200x150?text=Tripod"],
    ["name" => "Portable SSD 1TB", "price" => 100, "img" => "https://placehold.co/200x150?text=SSD"],
    ["name" => "Desk Lamp LED", "price" => 22, "img" => "https://placehold.co/200x150?text=Lamp"]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome <?= htmlspecialchars($_SESSION['user']['name']) ?></title>
    <link rel="stylesheet" href="home.css" />

</head>
<div style="margin-top: 80px;"> <!-- Adjust margin as needed -->

<h2>Welcome, <?= htmlspecialchars($_SESSION['user']['name']) ?>! Browse Our Products</h2>

<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <img src="<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
            <h4><?= htmlspecialchars($product['name']) ?></h4>
            <p>$<?= $product['price'] ?></p>
            <button class="buy-btn">Buy Now</button>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
