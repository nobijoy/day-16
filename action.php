<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Pattern;
use App\classes\FileUpload;


if (isset($_GET['pages'])){
    if ($_GET['pages']== 'home'){
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'product'){
        $product = new Product();
        $products = $product->getAllProducts();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'details'){
        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/details.php';
    }
    elseif ($_GET['pages'] == 'pattern'){

        include 'pages/pattern.php';
    }
    elseif ($_GET['pages'] == 'file-upload'){

        include 'pages/file-upload.php';
    }
}
elseif (isset($_POST['pattern_btn'])){
    $pattern = new Pattern($_POST);
    $result = $pattern->index();
    include 'pages/pattern.php';
}
elseif (isset($_POST['img_btn'])){
    $fileUpload = new FileUpload($_POST);
    $fileUpload->index();
//    include 'pages/file-upload.php';
}
