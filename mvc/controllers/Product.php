<?php
class Product extends Controller {
    private $cartModel;

    private $productModel;
    function show() {
        $this->productModel = $this->model('ProductModel');
        $productList = $this->productModel->getProductList();
        $this->cartModel = $this->model('CartModel');
        $getProductsInCart = []; // Initialize the variable

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
        }


        $this->view('ProductView', [
            'productList' => $productList,
            'productsInCart' => $getProductsInCart
        ]);
    }
}
?>