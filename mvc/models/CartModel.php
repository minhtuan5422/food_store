<?php 
    class CartModel extends DB {
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
    }
