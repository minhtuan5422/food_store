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
                'id_user' => $data['userId'],/*  */
                'status_bill' => 1,
                'date' => $date,
                'payment_method' => 'cash on delivery',
            ];

            $billAdded = $this->insert('bill', $bill);

            if ($billAdded) {
                $billId = mysqli_insert_id($this->conn);

                foreach ($data['products'] as $product) {
                    $productId = $product['id'];
                    $unitPrice = $product['price'];
                    $quantity = $product['quantity'];
                    $subTotal = $unitPrice * $quantity;

                    $sql = "INSERT INTO bill_detail (id_bill, id_product, unit_price, quantity, sum) 
                    VALUES ('$billId', '$productId', '$unitPrice', '$quantity', '$subTotal')";
                    $result = $this->query($sql);

                    if($result) {
                        /* Delete data in table carts */
                    }
                }

                echo "<script>alert('Order successfully')</script>";
            } else {
                echo "<script>alert('Order failed!')</script>";
            }
        }
    }
}
