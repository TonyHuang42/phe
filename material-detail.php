
<link rel="stylesheet" href="css/materials.css">

<?php

require 'data/products.php';

$slug = $_GET['product'] ?? '';

if(!isset($products[$slug])){
    die('Product not found');
}

$product = $products[$slug];

$page_title = $product['title'];

include 'inc/header.php';

include 'inc/templates/' . $product['template'] . '.php';

include 'inc/footer.php';