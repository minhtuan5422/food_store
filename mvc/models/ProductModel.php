<?php 
    class ProductModel extends DB {
        public function __construct() {
            parent::__construct();
        }

        public function insert($table, $data) {
            return parent::insert($table, $data);
        }
        
        public function delete($table, $data) {
            return parent::delete($table, $data);
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
            JOIN category ON product.id_category = category.id_category
            JOIN brand ON product.id_brand = brand.id_brand
            ORDER BY product.id_product ASC";
            return $this->select($sql);
        }
    }
