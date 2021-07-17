<?php

class HomeModel{


    function __construct(){

    }

    public function render(){
        $this->message = 'pagina home';
        return $this;
    }

}

?>
