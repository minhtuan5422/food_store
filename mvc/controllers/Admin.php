<?php 
class Admin extends Controller {
    function Show() {
        $productModel = $this->model('ProductModel');
        $productCategories = $productModel->getProductCategory();
        $productList = $productModel->getProductList();

        $this->admin('AdminView', [
            'productCategories' => $productCategories,
            'productList' => $productList,
        ]);
    }
}
?>