<?php
class Cart extends Controller
{
    private $cartModel;
    public function Show()
    {
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
        ]);
    }
}
