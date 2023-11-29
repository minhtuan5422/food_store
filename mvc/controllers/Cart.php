<?php 
class Cart extends Controller {
    private $cartModel;
    function Show() {
        $this->cartModel = $this->model("CartModel");
        $this->view('CartView', []);
    }
}
?>