<?php 
class UserDashboard extends Controller {
    private $cartModel;

    function Show() {
        $this->cartModel = $this->model('CartModel');
        $getProductsInCart = []; // Initialize the variable

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
        }

        $this->view('UserDashboardView', [
            'productsInCart' => $getProductsInCart
        ]);
    }
}
?>