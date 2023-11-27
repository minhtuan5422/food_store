<?php 
    class ProductModel extends DB {
        public function __construct() {
            parent::__construct();
        }

        public function select($sql) {
            return parent::select($sql);
        }

        public function insert($table, $data) {
            return parent::insert($table, $data);
        }
        
        public function delete($table, $data) {
            return parent::delete($table, $data);
        }

        public function update($table, $data, $where) {
            return parent::update($table, $data, $where);
        }

        public function getProductCategory() {
            $sql = "SELECT * FROM category";
            return $this->select($sql);
        }

        public function getProductBrand() {
            $sql = "SELECT * FROM brand";
            return $this->select($sql);
        }

        public function getProductList() {
            $sql = "SELECT *, product.name as product_name, category.name as category_name, brand.name as brand_name, DATE_FORMAT(product.create_date, '%d/%m/%y') AS formatted_date
            FROM product
            JOIN product_detail ON product.id_product = product_detail.id_product
            JOIN category ON product.id_category = category.id_category
            JOIN brand ON product.id_brand = brand.id_brand
            ORDER BY product.id_product ASC";
            return $this->select($sql);
        }

        public function getUpdateProductInfo()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $productId = $_POST['productUpdateId'];
                $sql = "SELECT p.*, pdt.*
                        FROM product AS p
                        JOIN product_detail AS pdt ON p.id_product = pdt.id_product
                        WHERE p.id_product = '$productId'";
                return $this->selectSingleItem($sql);
            }
        }
    }
