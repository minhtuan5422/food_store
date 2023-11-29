<?php
class ProductDetail extends Controller
{
   private $productModel;

   function show()
   {
      $this->productModel = $this->model('ProductModel');
      $productList = $this->productModel->getProductList();
      $getProductById = $this->getProductDetailInfo();
      $this->view('ProductDetailView', [
         'productList' => $productList,
         'productDetailInfo' => $getProductById
      ]);
   }

   public function getProductDetailInfo()
   {
      // Giải mã tên sản phẩm
      $currentURL = $_SERVER['REQUEST_URI'];
      // Lấy phần path từ URL
      $path = parse_url($currentURL, PHP_URL_PATH);
      // Lấy phần cuối cùng của path (tức là tên file)
      $filename = basename($path);
      // Lấy số từ tên file
      $number = intval($filename);
      
      $sql = "SELECT *, product.name as product_name, category.name as category_name, brand.name as brand_name, DATE_FORMAT(product.create_date, '%d/%m/%y') AS formatted_date
        FROM product 
        JOIN product_detail ON product.id_product = product_detail.id_product
        JOIN category ON product.id_category = category.id_category
        JOIN brand ON product.id_brand = brand.id_brand
        WHERE product.id_product = '$number'";

      $getProductDetailById = $this->productModel->select($sql);
      return $getProductDetailById;
   }
}
