<?php
class Article extends Controller {
    private $cartModel;

    function show() {
        $this->cartModel = $this->model('CartModel');
        $getProductsInCart = []; // Initialize the variable

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
        }

        $this->view("ArticleView", [
            'productsInCart' => $getProductsInCart
        ]);
    }
}
?>