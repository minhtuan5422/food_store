<?php
class App {
    protected $controller="Home";
    protected $action="Show";
    protected $params=[];

    function __construct() {
        $arr = $this->UrlProcess();
        
        // Controller Handler
        if(isset($arr[0])) {
            if( file_exists("./mvc/controllers/".$arr[0].".php") ) {
                $this->controller = $arr[0];
            } else {
                $this->controller = 'NotFound';
            }
            unset($arr[0]);
        }
        require_once("./mvc/controllers/".$this->controller.".php");
        $this->controller= new $this->controller;
        
        // Action Handler
        if(isset($arr[1])) {
            if( method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
            
        //Params Handler
        $this->params = $arr ? array_values($arr) : [];
        
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    
    //Function handle cut URL
    function UrlProcess() {
        if( isset($_GET['url']) ) {
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }
}
?>