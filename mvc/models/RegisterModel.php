<?php
class RegisterModel extends DB {
    public function __construct() {
        parent::__construct();
    }

    public function select($sql) {
        return parent::select($sql);
    }
    
    public function insert($table, $data) {
        return parent::insert($table, $data);
    }
}
?>