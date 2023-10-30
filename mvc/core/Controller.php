<?php
class Controller {
    public function model($model) {
        require_once "./mvc/models/". $model .".php";
        return new $model;
    }

    public function view($view, $data=[]) {
        require_once "./mvc/views/pages/". $view .".php";
    }

    public function admin($admin, $data=[]) {
        require_once "./mvc/views/admin/". $admin .".php";
    }
}
?>