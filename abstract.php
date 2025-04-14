<?php
abstract class ProductFeatures {
    abstract function productDetails();
    abstract function productImages();
    abstract function productOwnerDetails(); // fixed this line
}

class UploadProduct extends ProductFeatures {
    function productDetails() {
        echo "product details";
    }

    function productImages() {
        echo "product images";
    }

    function productOwnerDetails() {
        echo "product owner";
    }
}

$upload = new UploadProduct();
$upload->productDetails();
echo "<br>";
$upload->productImages();
echo "<br>";
$upload->productOwnerDetails(); 
?>