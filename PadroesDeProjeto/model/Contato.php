<?php
class Contato {
    private $id; 
    private $nome;
    private $fone;
    private $email;
    
    public function getId() {
        return $this->id;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getFone() {
        return $this->fone;
    }
    
    public function setFone($fone) {
        $this->fone = $fone;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
}


?>