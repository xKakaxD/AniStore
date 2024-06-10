<?php 

class Produto {

    private $id_produto;
    private $nome;
    private $valor;
    private $image_url;
    private $destaque; 

    public function getId_produto() {
        return $this->id_produto;
    }

    public function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getImage_url() {
        return $this->image_url;
    }

    public function setImage_url($image_url) {
        $this->image_url = $image_url;
    }       
    
    public function getDestaque() {
        return $this->destaque;
    }

    public function setDestaque($destaque) {
        $this->destaque = $destaque;
    }

    public function toString() {
        return $this->getNome(); //nome
    }
}

?>
