<?php 
class About extends Controller {
    private $productModel;
    private $cartModel;
    
    function Show() {
        $this->productModel = $this->model('ProductModel');
        $this->cartModel = $this->model('CartModel');
        $getProductsInCart = []; // Initialize the variable
        $productCategory = $this->productModel->getProductCategory();

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
        }

        $this->view('AboutView', [
            'productsInCart' => $getProductsInCart,
            'productCategory' => $productCategory
        ]);
    }
}
?>