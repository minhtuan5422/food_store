<?php
class Checkout extends Controller {
    private $cartModel;
    private $checkoutModel;

    function show() {
        $this->cartModel = $this->model('CartModel');
        $this->checkoutModel = $this->model('CheckoutModel');
        $getProductsInCart = []; // Initialize the variable

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
            $total = $this->getCartTotal($getProductsInCart);
            $getUsrInfo = $this->checkoutModel->getUserInfo($userId[0]['id_user']);
        }

        $this->view("CheckoutView", [
            'productsInCart' => $getProductsInCart,
            'cartTotal' => $total,
            'userInfo' => $getUsrInfo,
        ]);
    }

    public function getCartTotal($getProductsInCart)
    {
        $total = 0;
        foreach ($getProductsInCart as $product) :
            $subTotal = $product['price'] * $product['total_quantity'];
            $total += $subTotal;
        endforeach;
        return $total;
    }
}
?>