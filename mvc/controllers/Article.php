<?php
class Article extends Controller {
    function show() {
        $this->view("ArticleView", []);
    }
}
?>