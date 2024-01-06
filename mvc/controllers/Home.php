<?php
class Home extends Controller {
    private $productModel;
    private $cartModel;

    function Show() {
        $this->productModel = $this->model('ProductModel');
        $this->cartModel = $this->model('CartModel');
        $productList = $this->productModel->getProductList();
        $productCategory = $this->productModel->getProductCategory();
        $getProductsInCart = []; // Initialize the variable

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $userId = $this->cartModel->getUsrIdByEmail($email);
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
        }
        
        $this->view('HomeView', [
            'productList' => $productList,
            'productsInCart' => $getProductsInCart,
            'productCategory' => $productCategory
        ]);
    }
}
?>
