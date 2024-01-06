<?php
class Checkout extends Controller
{
    private $cartModel;
    private $checkoutModel;
    private $productModel;

    function show()
    {
        $this->productModel = $this->model('ProductModel');
        $this->cartModel = $this->model('CartModel');
        $this->checkoutModel = $this->model('CheckoutModel');
        $getProductsInCart = []; // Khởi tạo mảng lưu danh sách sản phẩn trong giỏ hàng
        $data = []; //Tạo mảng data chứa thông tin đặt hàng để truy vấn database
        $productCategory = $this->productModel->getProductCategory();


        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            //Get ra id của user thông qua email được lưu trữ trên session
            $userId = $this->cartModel->getUsrIdByEmail($email);
            //Get danh sách sản phẩm trong cart và lưu vảo mảng đã khởi tạo
            $getProductsInCart = $this->cartModel->getProductsInCart($userId[0]);
            //Lưu cart total trong qua kết quả trả về của hàm phía dưới
            $total = $this->getCartTotal($getProductsInCart);
            //Get ra thông tin user vào template form đặt hàng 
            $getUsrInfo = $this->checkoutModel->getUserInfo($userId[0]['id_user']);
            //Lưu dữ liệu cần thiết vào mảng data đã khởi tạo
            $data = [
                'subTotal' => $total,
                'total' => $total + 0,
                'userId' => $userId[0]['id_user'],
                'products' => $getProductsInCart
            ];
        }

        $this->checkoutModel->orderPayment($data);

        $this->view("CheckoutView", [
            'productsInCart' => $getProductsInCart,
            'cartTotal' => $total,
            'userInfo' => $getUsrInfo,
            'productCategory' => $productCategory

        ]);
    }

    public function getCartTotal($getProductsInCart)
    {
        $total = 0;
        foreach ($getProductsInCart as $product) :
            $subTotal = $product['price'] * $product['total_quantity'];
            $total += $subTotal;
        endforeach;
        return $total;
    }
}
