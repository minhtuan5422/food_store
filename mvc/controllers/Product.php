<?php
class Product extends Controller {
    private $productModel;
    function show() {
        $this->productModel = $this->model('ProductModel');
        $productList = $this->productModel->getProductList();
        $this->view('ProductView', [
            'productList' => $productList,
        ]);
    }
}
?>