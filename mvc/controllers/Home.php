<?php
class Home extends Controller {
    private $productModel;
    function Show() {
        $this->productModel = $this->model('ProductModel');
        $productList = $this->productModel->getProductList();
        $this->view('HomeView', [
            'productList' => $productList,
        ]);
    }
}
?>