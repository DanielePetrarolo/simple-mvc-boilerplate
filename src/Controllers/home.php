<?php

class HomeController{
    private $model;

    function __construct($model){
        $this->model = $model;
    }

    public function render(){
        return $this->model->render();
    }

}

?>
