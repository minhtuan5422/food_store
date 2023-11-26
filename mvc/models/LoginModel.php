<?php
    class LoginModel extends DB {
        public function __construct() {
            parent::__construct();
        }

        public function select($sql) {
            return parent::select($sql);
        }
    }
?>