<?php
class Contact extends Controller
{
    private $productModel;

    private $cartModel;

    function show()
    {
        $this->productModel = $this->model('ProductModel');
        $productCategory = $this->productModel->getProductCategory();
        $this->cartModel = $this->model('CartModel');
        $getProductsInCart = []; // Initialize the variable

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
        }

        $this->view("ContactView", [
            'productsInCart' => $getProductsInCart,
            'productCategory' => $productCategory

        ]);
    }
}
