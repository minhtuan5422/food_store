<?php
class ProductDetail extends Controller
{
   private $productModel;

   function show()
   {
      $this->productModel = $this->model('ProductModel');
      $this->addToCart();
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

   public function addToCart()
   {
      if (isset($_POST['addToCart'])) {
         $email = $_POST['cartUserEmail'];
         $productId = $_POST['cartProductId'];
         $quantity = $_POST['cartProductQuantity'];
         $date = date('Y-m-d');

         //Truy vấn lấy ra id của user và số lượng sản phẩm
         $sql = "SELECT account.id_user, product.quantity
            FROM account, product   
            WHERE email = '$email' AND product.id_product = '$productId'
         ";
         $userId = $this->productModel->select($sql);
         /* Đối chiếu số lương sản phẩm còn lại và 
         số lượng sản phẩm muốn thêm vào giỏ hàng */
         $compareProductQuantity = $userId[0]['quantity'] - $quantity;

         /* Cho phép thêm vào giỏ hàng nếu số lượng
         sản phẩm trong db lớn hơn */
         if ($compareProductQuantity >= 0) {
            /* Nếu thêm thành công trừ trừ số sản phẩm trên db  */
            $decreaseQuantity = [
               "quantity"=> $compareProductQuantity
            ];
            $where = "id_product = $productId";

            $data = [
               "id_user" => $userId[0]['id_user'],
               "id_product" =>  $productId,
               "quantity" => $_POST['cartProductQuantity'],
               "added_date" => $date
            ];

            /* Thêm sản phẩm vào table giỏ hàng */
            $result = $this->productModel->insert('carts', $data);
            /* Cập nhật lại số lượng sản phẩm */
            $this->productModel->update('product', $decreaseQuantity, $where);

            if ($result) {
               echo "<script>alert('Add to cart successfully!')</script>";
            } else {
               echo "<script>alert('Add to cart failed!')</script>";
            }
         } else {
            echo "<script>alert('The number of products left is only " . $userId[0]['quantity'] . "!')</script>";
         }
      }
   }
}
