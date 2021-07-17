<?php

class AboutModel{


    function __construct(){

    }

    public function render(){
        $this->message = 'pagina about';
        return $this;
    }

}

?>
