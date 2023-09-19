<?php
class Home extends Controller {
    function Show() {
        $content = $this->model("HomeModel");
        $this->view("HomeView", []);
    }
    
    function SayHi() {
        $teo = $this->model("HomeModel");
        echo $teo->GetSV();
    }
}
?>