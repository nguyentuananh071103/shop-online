<?php
include_once "ProductModel.php";
$productModel = new ProductModel();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($productModel->getById($id) !== null) {
        $product = $productModel->delete($id);
        header("Location:index.php");
    }
}
