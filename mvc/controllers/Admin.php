<?php
class Admin extends Controller {
    private $productModel;

    function __construct() {
        $this->productModel = $this->model('ProductModel');
        $this->createProduct();
        $this->deleteProduct();
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
            $image = $_FILES['productAvatar']['name']; // Tên tệp tin hình ảnh tải lên
            $image_temp = $_FILES['productAvatar']['tmp_name']; // Đường dẫn tạm thời của tệp tin hình ảnh
            $targetDirectory = "D:\\Projects\\food_store\\public\\imgs\\"; // Đường dẫn tới thư mục lưu hình ảnh
            $targetFile = $targetDirectory . basename($image);
            $date = date('Y-m-d');

            if (move_uploaded_file($image_temp, $targetFile)) {
                $productData = [
                    'name' => $_POST['productName'],
                    'img' => $targetFile,
                    'price' => $_POST['productPrice'],
                    'quantity' => $_POST['productQuantity'],
                    'weight' => $_POST['productWeight'],
                    'id_category' => $_POST['productCategory'],
                    'id_brand' => $_POST['productBrand'],
                    'rate' => '0',
                    'create_date' => $date, 
                ];
            }
    
            $productAdded = $this->productModel->insert('product', $productData);

            if ($productAdded) {
                // Lấy ID cuối cùng sau khi chèn vào bảng "product"
                $product_id = mysqli_insert_id($this->productModel->conn);
    
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
                    echo "
                    <script>
                        alert('Add product successfully');
                    </script>
                    ";
                } else {
                    echo "Lỗi khi chèn dữ liệu vào bảng product_detail.";
                }
                
                return $productDetailId;
            } else {
                echo "Lỗi khi chèn dữ liệu vào bảng product.";
            }
        }
    }

    public function deleteProduct() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST["productId"];
            $result =  $this->productModel->delete("product_detail", "id_product = '$productId'");
            return $result;
        }
    }
}
?>


