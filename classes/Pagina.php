<?php 

class Pagina {
protected $header;
protected $content;
protected $footer;

public function __construct(){
    
}
public function index($conteudo){
 include $this->header = "header.php";
 include $this->content = $this->inc($conteudo);
 include $this->footer = "footer.php";
}
private function inc($nome_pagina){
    return $nome_pagina.".php";
}

public function listarUsuarios() { 
 include $this->inc("header");
 include $this->inc("menu");
 include $this->inc("listagem_usuarios");
 include $this->inc("footer");

}
}