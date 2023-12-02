<?php
class CartModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select($sql)
    {
        return parent::select($sql);
    }

    public function insert($table, $data)
    {
        return parent::insert($table, $data);
    }

    public function delete($table, $data)
    {
        return parent::delete($table, $data);
    }

    public function update($table, $data, $where)
    {
        return parent::update($table, $data, $where);
    }

    public function getProductsInCart($userId)
    {
        $sql = "SELECT SUM(carts.quantity) AS total_quantity, product.*, SUM(product.price * product.quantity) AS total_price
                    FROM carts
                    JOIN product ON product.id_product = carts.id_product
                    WHERE carts.id_user = '$userId[0]'
                    GROUP BY carts.id_product";

        $result = $this->select($sql);
        return $result;
    }

    public function getUsrIdByEmail($email)
    {
        $sql = "SELECT id_user FROM account WHERE email = '$email'";
        $userId = $this->select($sql);
        return $userId;
    }
}
