<?php
class Controller {
    public function model($model) {
        require_once "./mvc/models/". $model .".php";
        return new $model;
    }

    /* View User */
    public function view($view, $data=[]) {
        require_once "./mvc/views/pages/". $view .".php";
    }

    /* View Admin Management */
    public function admin($admin, $data=[]) {
        require_once "./mvc/views/admin/". $admin .".php";
    }
}
?>
