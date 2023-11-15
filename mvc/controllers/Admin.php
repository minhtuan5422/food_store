<?php
class Admin extends Controller {
    private $productModel;

    function __construct() {
        $this->productModel = $this->model('ProductModel');
        $this->createProduct();
    }

    public function show() {
        $productCategories = $this->productModel->getProductCategory();
        $productBrand = $this->productModel->getProductBrand();
        $productList = $this->productModel->getProductList();

        $this->admin('AdminView', [
            'productCategories' => $productCategories,
            'productList' => $productList,
            'productBrand' =>  $productBrand,
        ]);
    }

    public function createProduct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProductBtn'])) {
            $productData = [
                'name' => $_POST['productName'],
                'img' => $_POST['productAvatar'],
                'price' => $_POST['productPrice'],
                'quantity' => $_POST['productQuantity'],
                'weight' => $_POST['productWeight'],
                'id_category' => $_POST['productCategory'],
                'id_brand' => $_POST['productBrand'],
                'rate' => '0',
                'create_date' => date('d/m/Y'), 
            ];
    
            // Chèn dữ liệu vào bảng "product"
            $productAdded = $this->productModel->insert('product', $productData);
    
            if ($productAdded) {
                // Lấy ID cuối cùng sau khi chèn vào bảng "product"
                $product_id = mysqli_insert_id($this->productModel->conn);
    
                // Chèn dữ liệu vào bảng "product_detail"
                $productDetailData = [
                    'id_product' => $product_id,
                    'description' => $_POST['productDescription'],
                    'origin' => $_POST['productOrigin'],
                    'date_manufacture' => $_POST['productDateManufacture'],
                    'date_expiry' => $_POST['productDateExpiry'],
                ];
    
                $productDetailId = $this->productModel->insert('product_detail', $productDetailData);
    
                // Kiểm tra nếu chèn vào bảng "product_detail" thành công
                if ($productDetailId) {
                    // Chuyển hướng người dùng đến trang hiển thị sản phẩm sau khi thêm thành công
                    header('Location: /food_store/admin');
                    exit();
                } else {
                    // Xử lý lỗi khi chèn vào bảng "product_detail"
                    echo "Lỗi khi chèn dữ liệu vào bảng product_detail.";
                }
            } else {
                // Xử lý lỗi khi chèn vào bảng "product"
                echo "Lỗi khi chèn dữ liệu vào bảng product.";
            }
        }
    }
}
?>