<?php
class CheckoutModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function query($sql)
    {
        return parent::query($sql);
    }

    public function select($sql)
    {
        return parent::select($sql);
    }

    public function insert($table, $data)
    {
        return parent::insert($table, $data);
    }

    public function delete($table, $where)
    {
        return parent::delete($table, $where);
    }

    public function getUserInfo($userId)
    {
        $sql = "SELECT * FROM user WHERE id_user = '$userId'";
        $result = $this->select($sql);
        return $result;
    }

    public function orderPayment($data)
    {
        if (isset($_POST['orderPayment'])) {
            $date = date('Y-m-d');

            $bill = [
                'name' => $_POST['nameOrder'],
                'company_name' => $_POST['companyOrder'],
                'address' => $_POST['addressOrder'],
                'email' => $_POST['emailOrder'],
                'phone_number' => $_POST['phoneOrder'],
                'sub_total' => $data['subTotal'], /*  */
                'shipping' => 0,
                'total' => $data['total'],/*  */
                'description_bill' => $_POST['noteOrder'],
                'id_voucher' => 1,
                'id_user' => $data['userId'],/*  */
                'status_bill' => 1,
                'date' => $date,
                'payment_method' => 'cash on delivery',
            ];

            $billAdded = $this->insert('bill', $bill);
            $getProductsInCart = $data['products'];

            if ($billAdded && is_array($getProductsInCart)) {
                $billId = mysqli_insert_id($this->conn);

                for ($i = 0; $i < count($getProductsInCart); $i++) {
                    $product = $getProductsInCart[$i];
                    $productId = $product['id_product'];
                    $unitPrice = $product['price'];
                    $quantity = $product['quantity'];
                    $subTotal = $unitPrice * $quantity;

                    $billDetail = [
                        'id_bill' => $billId,
                        'id_product' => $productId,
                        'unit_price' => $unitPrice,
                        'quantity' => $quantity,
                        'sum' => $subTotal
                    ];

                    $billDetailAdded = $this->insert('bill_detail', $billDetail);

                    if ($billDetailAdded) {
                        $result = $this->delete("carts", "id_user =" . $data['userId']);
                        if ($result) {
                            echo "
                                <script>
                                alert('Order successfully'); 
                                window.location.href='" . PUBLIC_URL . "product';
                                </script>
                            ";
                        } else {
                            echo "<script>alert('Order failed!')</script>";
                        }
                    } else {
                        echo "<script>alert('Add bill detail failed!')</script>";
                        break; // Ngừng vòng lặp nếu không thêm được chi tiết hóa đơn
                    }
                }
            } else {
                echo "<script>alert('Add bill failed!')</script>";
            }
        }
    }
}
