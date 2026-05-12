<?php 

class Pagina {
protected $header;
protected $content;
protected $footer;

public function __contruct(){
    $this->header = inc("header");
    //$this->content =  inc($conteudo);
    $this->footer = inc("footer");
}
public function index($conteudo){
 include $this->header = "header.php";
 include $this->content = $this->inc($conteudo);
 include $this->footer = "footer.php";
}
private function inc($nome_pagina){
    return $nome_pagina.".php";
}
}