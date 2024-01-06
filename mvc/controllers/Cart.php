<?php
class Cart extends Controller
{
    private $cartModel;
    private $productModel;

    public function Show()
    {
        $this->productModel = $this->model('ProductModel');
        $productCategory = $this->productModel->getProductCategory();
        $this->cartModel = $this->model("CartModel");
        $getProductsInCart = []; // Initialize the variable
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
            $this->cartModel->increaseQuantity();
            $this->cartModel->decreaseQuantity();
        }

        $this->view('CartView', [
            'productsInCart' => $getProductsInCart,
            'productCategory' => $productCategory

        ]);
    }
}
